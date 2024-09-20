<div class="inline-block scroll-ml-6 snap-start">
    <div class="overflow-hidden rounded-xl border border-gray-50 dark:border-gray-500">

        <div class="group relative w-96 h-28 group-hover:top-0 bg-green-500 dark:bg-gray-800">

            <div class="relative -left-32 opacity-0 top-0 z-10 w-96 rounded-xl group-hover:bg-transparent px-5 pt-9 pb-10 text-base font-semibold transition-all duration-700 group-hover:-left-3 group-hover:opacity-100">
                <div class="flex flex-col">
                    <div class="flex items-center gap-1 text-gray-900">
                        <div class="flex items-center rounded-full py-2 px-5 bg-green-50">
                            <p class="text-lg leading-tight text-green-700">{{ $ontimeAttendance }}</p>
                        </div>
                        <p class="text-lg text-green-50"> Kali</p>
                    </div>
                </div>
            </div>
            <div class="absolute h-full -right-0 top-0 z-20 w-96 self-end border-none px-5 py-2 text-base font-semibold transition-all duration-700 group-hover:-right-14 group-hover:w-64">
                <div class="absolute flex cursor-pointer w-[395px] h-auto top-0 left-0 transition-all duration-700 group-hover:-left-44 group-hover:top-5">
                    <div id="cardOntime-chart" class="w-full rounded-lg" data-ontime-counts='@json($ontimeCounts)'></div>
                </div>
                <p class="absolute transition-all duration-700 text-lg top-3 text-green-50">Masuk Tepat Waktu</p>

            </div>
        </div>
    </div>
</div>

<div class="inline-block scroll-ml-6 snap-start">
    <div class="overflow-hidden rounded-xl border border-gray-50 dark:border-gray-500">

        <div class="group relative w-96 h-28 group-hover:top-0 bg-red-500 dark:bg-gray-800">

            <div class="relative -left-32 top-0 z-10 w-96 rounded-xl group-hover:bg-transparent px-5 pt-9 pb-10 text-base font-semibold transition-all duration-700 group-hover:-left-3">
                <div class="flex flex-col">
                    <div class="flex items-center gap-1 text-gray-900">
                        <div class="flex items-center rounded-full py-2 px-5 bg-red-50">
                            <p class="text-lg leading-tight text-red-700">{{ $terlambat }}</p>
                        </div>
                        <p class="text-lg text-red-50">Kali</p>
                    </div>
                </div>
            </div>
            <div class="absolute h-full -right-0 top-0 z-20 w-96 self-end border-none px-5 py-2 text-base font-semibold transition-all duration-700 group-hover:-right-[132px] group-hover:w-64">
                <div class="absolute flex cursor-pointer w-[395px] h-auto top-0 left-0 transition-all duration-700 group-hover:-left-[260px] group-hover:top-5">
                    <div id="cardLate-chart" class="w-full rounded-lg" data-late-counts='@json($lateCounts)'></div>
                </div>
                <p class="text-red-50 absolute transition-all duration-700 text-lg top-3">Terlambat</p>

            </div>
        </div>
    </div>
</div>

<div class="inline-block scroll-ml-6 snap-start">
    <div class="overflow-hidden rounded-xl border border-gray-50 dark:border-gray-500">

        <div class="group relative w-96 h-28 group-hover:top-0 bg-cyan-500 dark:bg-gray-800">

            <div class="relative -left-32 opacity-0 top-0 z-10 w-96 rounded-xl group-hover:bg-transparent px-5 pt-9 pb-10 text-base font-semibold transition-all duration-700 group-hover:-left-3 group-hover:opacity-100">
                <div class="flex flex-col">
                    <div class="flex items-center gap-1 text-gray-900">
                        <div class="flex items-center rounded-full py-2 px-5 bg-cyan-50">
                            <p class="text-lg leading-tight text-cyan-700">{{ $outtimeAttendance }}</p>
                        </div>
                        <p class="text-lg text-cyan-50"> Kali</p>
                    </div>
                </div>
            </div>
            <div class="absolute h-full -right-0 top-0 z-20 w-96 self-end border-none px-5 py-2 text-base font-semibold transition-all duration-700 group-hover:-right-14 group-hover:w-64">
                <div class="absolute flex cursor-pointer w-[395px] h-auto top-0 left-0 transition-all duration-700 group-hover:-left-44 group-hover:top-5">
                    <div id="cardOuttime-chart" class="w-full rounded-lg" data-outtime-counts='@json($outtimeCounts)'></div>
                </div>
                <p class="text-cyan-50 absolute transition-all duration-700 text-lg top-3">Keluar Tepat Waktu</p>

            </div>
        </div>
    </div>
</div>

<div class="inline-block scroll-ml-6 snap-start">
    <div class="overflow-hidden rounded-xl border border-gray-50 dark:border-gray-500">

        <div class="group relative w-96 h-28 group-hover:top-0 bg-rose-500 dark:bg-gray-800">

            <div class="relative -left-32 opacity-0 top-0 z-10 w-96 rounded-xl group-hover:bg-transparent px-5 pt-9 pb-10 text-base font-semibold transition-all duration-700 group-hover:-left-3 group-hover:opacity-100">
                <div class="flex flex-col">
                    <div class="flex items-center gap-1 text-gray-900">
                        <div class="flex items-center rounded-full py-2 px-5 bg-rose-50">
                            <p class="text-lg leading-tight text-rose-700">{{ $kecepatan }}</p>
                        </div>
                        <p class="text-lg text-rose-50"> Kali</p>
                    </div>
                </div>
            </div>
            <div class="absolute h-full -right-0 top-0 z-20 w-96 self-end border-none px-5 py-2 text-base font-semibold transition-all duration-700 group-hover:-right-24 group-hover:w-64">
                <div class="absolute flex cursor-pointer w-[395px] h-auto top-0 left-0 transition-all duration-700 group-hover:-left-44 group-hover:top-5">
                    <div id="Cardkecepatan-chart" class="w-full rounded-lg" data-fast-counts='@json($fastCounts)'></div>
                </div>
                <p class="text-rose-50 absolute transition-all duration-700 text-lg top-3">Cepat Pulang</p>

            </div>
        </div>
    </div>
</div>