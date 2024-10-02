const labels = [];
fetch("/api/getPegawai")
    .then((response) => response.json())
    .then((data) => {
        console.log("Initializing application");
        labels.push(...data);
        initializeFaceAPI();
    })
    .catch((error) => console.error("Error fetching data", error));

const detectedFaces = new Set(); // To track detected faces and prevent re-capture
let videoStream = null;
let webcamStarted = false;
let modelsLoaded = false;
let detectionInterval = null;
const video = document.getElementById("video");
const overlay = document.getElementById("overlay");
const startButton = document.getElementById("startButton");
const endButton = document.getElementById("endAttendance");
const csrfToken = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");
const canvInfo = document.getElementById("canvAttend");
const pegawaiKosong = document.getElementById("pegawaiKosong");
const pegawaiInfo = document.getElementById("pegawaiInfo");

const originalConsoleLog = console.log;
console.log = customConsoleLog;

canvInfo.style.display = "none";

// Load models
function initializeFaceAPI() {
    Promise.all([
        faceapi.nets.ssdMobilenetv1.loadFromUri("/models"),
        faceapi.nets.faceRecognitionNet.loadFromUri("/models"),
        faceapi.nets.faceLandmark68Net.loadFromUri("/models"),
    ]).then(() => {
        modelsLoaded = true;
        console.log("Models loaded successfully");
    });
}

startButton.addEventListener("click", async () => {
    overlay.style.display = "block";
    canvInfo.style.display = "none";
    startButton.setAttribute("disabled", "disabled");
    endButton.removeAttribute("disabled");

    if (!webcamStarted && modelsLoaded) {
        try {
            const stream = await navigator.mediaDevices.getUserMedia({
                video: true,
                audio: false,
            });
            video.srcObject = stream;
            videoStream = stream;
            webcamStarted = true;
            console.log("Webcam started successfully");

            startFaceDetection(); // Start face detection when webcam is started
        } catch (error) {
            console.error("Error accessing webcam:", error);
        }
    }
});

async function getImagePathsForLabel(storage) {
    try {
        const response = await fetch(
            `/api/pegawai-images/${encodeURIComponent(storage)}`
        );
        // console.log("Fetching image paths...");
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return await response.json();
    } catch (error) {
        console.error("Error fetching image paths:", error);
        return [];
    }
}

async function getLabeledFaceDescriptions() {
    const labeledDescriptors = [];

    for (const label of labels) {
        const descriptions = [];
        const imagePaths = await getImagePathsForLabel(label);

        for (const path of imagePaths) {
            try {
                const img = await faceapi.fetchImage(path);
                const detections = await faceapi
                    .detectSingleFace(img)
                    .withFaceLandmarks()
                    .withFaceDescriptor();
                console.log("Fetching image paths...");
                if (detections) {
                    descriptions.push(detections.descriptor);
                }
            } catch (error) {
                console.error(`Error processing ${path}:`, error);
            }
        }
        if (descriptions.length > 0) {
            labeledDescriptors.push(
                new faceapi.LabeledFaceDescriptors(label, descriptions)
            );
        }
    }
    return labeledDescriptors;
}

video.addEventListener("loadedmetadata", () => {
    video.width = video.videoWidth;
    video.height = video.videoHeight;
    overlay.width = video.width;
    overlay.height = video.height;
});

async function startFaceDetection() {
    if (!detectionInterval) {
        try {
            const labeledFaceDescriptors = await getLabeledFaceDescriptions();
            console.log("Processing image for face data...");
            if (labeledFaceDescriptors.length === 0) {
                console.error("No labeled face descriptors found.");
                return;
            }

            const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors);
            const displaySize = { width: video.width, height: video.height };
            faceapi.matchDimensions(overlay, displaySize);

            const context = overlay.getContext("2d", {
                willReadFrequently: true,
            });
            if (!context) {
                console.error("Failed to get canvas context.");
                return;
            }

            detectionInterval = setInterval(async () => {
                try {
                    const detections = await faceapi
                        .detectAllFaces(video)
                        .withFaceLandmarks()
                        .withFaceDescriptors();
                    const resizedDetections = faceapi.resizeResults(
                        detections,
                        displaySize
                    );

                    const tempCanvas = document.createElement("canvas");
                    tempCanvas.width = overlay.width;
                    tempCanvas.height = overlay.height;

                    let shouldCapture = false;
                    let captureLabel = null;
                    let kodePegawai = null; // Define kodePegawai here

                    for (const detection of resizedDetections) {
                        const bestMatch = faceMatcher.findBestMatch(
                            detection.descriptor
                        );
                        const matchConfidence = bestMatch.distance;

                        if (
                            bestMatch.label !== "unknown" &&
                            matchConfidence < 0.4 &&
                            !detectedFaces.has(bestMatch.label)
                        ) {
                            const box = detection.detection.box;
                            const drawBox = new faceapi.draw.DrawBox(box, {
                                label: bestMatch.toString(),
                            });
                            drawBox.draw(tempCanvas);

                            shouldCapture = true;
                            captureLabel = bestMatch.label;
                            detectedFaces.add(bestMatch.label);

                            // Ambil data pegawai berdasarkan label yang dikenali
                            const pegawaiData = await getPegawaiDataByLabel(
                                captureLabel
                            );
                            if (pegawaiData) {
                                displayPegawaiData(pegawaiData); // Tampilkan data pegawai di halaman
                                kodePegawai = pegawaiData.kode_pegawai; // Set kodePegawai here
                            }
                        }
                    }

                    if (shouldCapture && kodePegawai) {
                        // Check if kodePegawai is defined
                        const imageBlob = await captureImage();
                        if (imageBlob) {
                            await saveImageToServer(imageBlob, captureLabel);
                            await saveAttendance(kodePegawai); // Pass kodePegawai
                            canvInfo.style.display = "block";
                        } else {
                            console.error("Failed to capture image");
                        }
                    }

                    context.clearRect(0, 0, overlay.width, overlay.height);
                    context.drawImage(tempCanvas, 0, 0);
                } catch (error) {
                    console.error(
                        "Error during face detection or matching:",
                        error
                    );
                }
            }, 100);

            console.log("Face detection started");
        } catch (error) {
            console.error("Error initializing face recognition:", error);
        }
    }
}

function stopFaceDetection() {
    if (detectionInterval) {
        clearInterval(detectionInterval);
        detectionInterval = null;
        console.log("Face detection stopped");
    }
}

function stopWebcam() {
    if (videoStream) {
        console.log("Stopping webcam...");
        stopFaceDetection();
        videoStream.getTracks().forEach((track) => track.stop());
        video.srcObject = null;
        videoStream = null;
        webcamStarted = false;
    }
}

function captureImage() {
    const canvas = document.createElement("canvas");
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    const context = canvas.getContext("2d");
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    return new Promise((resolve) => {
        canvas.toBlob((blob) => {
            resolve(blob || null);
        }, "image/png");
        console.log("Image captured...");
    });
}

async function saveImageToServer(imageBlob, label) {
    const formData = new FormData();
    formData.append("image", imageBlob, "capturedImg.png");
    formData.append("label", label);

    try {
        const response = await fetch("/api/saveImage", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": csrfToken,
            },
            body: formData,
        });

        if (response.ok) {
            const data = await response.json();
            if (data.imageUrl) {
                displayImageOnCanvas(data.imageUrl);
                console.log("Image saved and displayed on canvas");
            }
        } else {
            console.error("Failed to save image");
        }
    } catch (error) {
        console.error("Error saving image:", error);
    }
}

function displayImageOnCanvas(imageUrl) {
    // document.getElementById("canvLogo").style.display = "none";
    canvInfo.style.display = "block";
    const canvas = document.getElementById("canvAttend");
    const context = canvas.getContext("2d");

    if (context) {
        const img = new Image();
        img.src = imageUrl;

        img.onload = () => {
            canvInfo.width = img.width;
            canvInfo.height = img.height;
            context.drawImage(img, 0, 0);
        };

        img.onerror = () => {
            console.error("Failed to load image:", imageUrl);
        };
    } else {
        console.error("Failed to get canvas context.");
    }
}

endButton.addEventListener("click", () => {
    canvInfo.style.display = "none";
    pegawaiKosong.style.display = "block";
    pegawaiInfo.style.display = "none";
    overlay.style.display = "none";
    startButton.removeAttribute("disabled");
    endButton.setAttribute("disabled", "disabled");
    stopWebcam();
});

function customConsoleLog(message) {
    const consoleOutput = document.getElementById("consoleOutput");
    if (consoleOutput) {
        consoleOutput.textContent += message + "\n";
        consoleOutput.scrollTop = consoleOutput.scrollHeight; // Auto-scroll ke bagian bawah
    }
    originalConsoleLog(message); // Gunakan referensi asli
}

// ini yang baru
async function getPegawaiDataByLabel(label) {
    try {
        const response = await fetch(
            `/api/getPegawaiData/${encodeURIComponent(label)}`
        );
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return await response.json();
    } catch (error) {
        console.error("Error fetching pegawai data:", error);
        return null;
    }
}

function displayPegawaiData(pegawaiData) {
    pegawaiKosong.style.display = "none";
    const pegawaiInfoDiv = pegawaiInfo;

    if (pegawaiInfoDiv) {
        pegawaiInfoDiv.style.display = "block";
        pegawaiInfoDiv.innerHTML = `
            <ul class="space-y-4 text-left text-gray-500">
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                    <span>Lokasi: Titi Kuning</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                     <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                    <span>Nama: ${pegawaiData.kode_pegawai}</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                     <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                    <span>Nama: ${pegawaiData.full_name}</span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                    <span id="waktu-masuk">Waktu Masuk: </span>
                </li>
                <li class="flex items-center space-x-3 rtl:space-x-reverse">
                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                    </svg>
                    <span id="waktu-keluar">Waktu Keluar: </span>
                </li>
            </ul>
        `;
    } else {
        console.error("Element with ID 'pegawaiInfo' not found");
    }
}

function jamMasuk() {
    // Get the current date and time in UTC
    const currentDate = new Date();

    // Format the current date and time to WIB (UTC+7)
    const options = {
        year: "numeric",
        month: "long",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
        second: "numeric",
        hour12: false,
        timeZone: "Asia/Jakarta", // Set the time zone to WIB
    };
    const formattedJamMasuk = currentDate.toLocaleString("id-ID", options);

    // Set the formatted date-time in the span
    document.getElementById(
        "waktu-masuk"
    ).textContent = `Waktu Masuk: ${formattedJamMasuk}`;
}

function jamKeluar() {
    // Placeholder function to handle the clock-out time
    const currentDate = new Date();

    // Format the current date and time to WIB (UTC+7)
    const options = {
        year: "numeric",
        month: "long",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
        second: "numeric",
        hour12: false,
        timeZone: "Asia/Jakarta", // Set the time zone to WIB
    };
    const formattedJamKeluar = currentDate.toLocaleString("id-ID", options);

    // Set the formatted date-time in the span
    document.getElementById(
        "waktu-keluar"
    ).textContent = `Waktu Keluar: ${formattedJamKeluar}`;
}

function formatDatabaseDate(dateString) {
    const date = new Date(dateString);

    const options = {
        year: "numeric",
        month: "long",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
        second: "numeric",
        hour12: false,
        timeZone: "Asia/Jakarta", // Adjust as needed
    };

    return date.toLocaleString("id-ID", options);
}

function attendanceAlert() {
    Swal.fire({
        title: "Sukses!",
        html: "Berhasil melakukan absensi.",
        timer: 1500,
        icon: "success",
        showConfirmButton: false,
    });

    setTimeout(function () {
        pegawaiKosong.style.display = "block";
        pegawaiInfo.style.display = "none";
        canvInfo.style.display = "none";
    }, 2000);
}

async function saveAttendance(kodePegawai) {
    try {
        // Check attendance status
        const checkResponse = await fetch("/check-attendance", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": csrfToken,
            },
            body: JSON.stringify({ kode_pegawai: kodePegawai }),
        });

        const checkResult = await checkResponse.json();

        if (checkResult.hasClockedIn) {
            // Display existing attendance data
            const jamMasuk = checkResult.jam_masuk; // Assuming checkResult has jam_masuk
            const jamMasukFormat = formatDatabaseDate(jamMasuk);
            document.getElementById(
                "waktu-masuk"
            ).textContent = `Waktu Masuk: ${jamMasukFormat}`;

            jamKeluar();

            // Proceed with clock-out
            const response = await fetch("/store-attendance-out", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken,
                },
                body: JSON.stringify({ kode_pegawai: kodePegawai }),
            });

            const result = await response.json();
            if (result.success) {
                console.log(result.message);
                attendanceAlert();
            } else {
                console.error("Failed to record clock-out:", result.message);
            }
        } else {
            // Handle clock-in
            const currentDate = new Date();

            // Format the current date and time to WIB (UTC+7)
            const options = {
                year: "numeric",
                month: "long",
                day: "numeric",
                hour: "numeric",
                minute: "numeric",
                second: "numeric",
                hour12: false,
                timeZone: "Asia/Jakarta",
            };
            const formattedJamMasuk = currentDate.toLocaleString(
                "id-ID",
                options
            );

            // Display formatted clock-in time
            document.getElementById(
                "waktu-masuk"
            ).textContent = `Waktu Masuk: ${formattedJamMasuk}`;

            document.getElementById("waktu-keluar").textContent =
                "Jam Keluar: Belum ada data";

            // Store clock-in data
            const response = await fetch("/store-attendance", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken,
                },
                body: JSON.stringify({
                    kode_pegawai: kodePegawai,
                    jam_masuk: currentDate.toISOString(),
                }),
            });

            const result = await response.json();
            if (result.success) {
                console.log(result.message);
                attendanceAlert();
            } else {
                console.error("Failed to record clock-in:", result.message);
            }
        }
    } catch (error) {
        console.error("Error checking or saving attendance:", error);
    }
}
