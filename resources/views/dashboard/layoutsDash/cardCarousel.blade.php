<div class="inline-block scroll-ml-6 snap-start">
    <div class="overflow-hidden rounded-xl shadow bg-gray-50">

        <div class="group relative flex cursor-pointer after:shadow-lg after:shadow-black">
            <div class="relative -left-16 top-0 z-10 w-96 rounded-xl bg-[#1e641e] px-5 py-4 text-base font-semibold transition-all duration-700 group-hover:-left-3">
                <div class="flex flex-col gap-5">
                    <div class="flex items-center gap-1">
                        <div class="flex items-center rounded-full bg-white/45 py-3 px-5">
                            <p class="text-lg leading-tight text-white">{{ $totalAtIn }}</p>
                        </div>
                        <p class="text-white text-lg opacity-0 delay-200 duration-700 ease-in-out group-hover:opacity-100">Data</p>
                    </div>

                </div>
            </div>
            <div class="absolute h-full -right-0 top-0 z-20 flex w-96 flex-col gap-5 self-end rounded-xl border-none bg-[#59c05e] px-5 py-4 text-base font-semibold transition-all duration-700 group-hover:-right-14 group-hover:w-64 group-hover:rounded-3xl">
                <p class="text-[#fff] text-lg mt-2">Absen Masuk</p>
            </div>
            <div class="h-16 bg-[#206e20] w-[28rem] -left-10 shadow-2xl shadow-[#348b40] absolute bottom-0"></div>
        </div>

    </div>
</div>

<div class="inline-block scroll-ml-6 snap-start">
    <div class="overflow-hidden rounded-xl shadow bg-gray-50">

        <div class="group relative flex cursor-pointer after:shadow-lg after:shadow-black">
            <div class="relative -left-16 top-0 z-10 w-96 rounded-xl bg-[#8b3434] px-5 py-4 text-base font-semibold transition-all duration-700 group-hover:-left-3">
                <div class="flex flex-col gap-5">
                    <div class="flex items-center gap-1">
                        <div class="flex items-center rounded-full bg-white/45 py-3 px-5">
                            <p class="text-lg leading-tight text-white">{{ $totalAtOut }}</p>
                        </div>
                        <p class="text-white text-lg opacity-0 delay-200 duration-700 ease-in-out group-hover:opacity-100">Data</p>
                    </div>

                </div>
            </div>
            <div class="absolute h-full -right-0 top-0 z-20 flex w-96 flex-col gap-5 self-end rounded-xl border-none bg-[#ed7676] px-5 py-4 text-base font-semibold transition-all duration-700 group-hover:-right-14 group-hover:w-64 group-hover:rounded-3xl">
                <p class="text-[#fff] text-lg mt-2">Absen Keluar</p>
            </div>
            <div class="h-16 bg-[#8b3434] w-[28rem] -left-10 shadow-2xl shadow-[#8b3434] absolute bottom-0"></div>
        </div>

    </div>
</div>

<div class="inline-block scroll-ml-6 snap-start">
    <div class="overflow-hidden rounded-xl shadow bg-gray-50">

        <div class="group relative flex cursor-pointer after:shadow-lg after:shadow-black">
            <div class="relative -left-16 top-0 z-10 w-96 rounded-xl bg-[#3d348b] px-5 py-1.5 text-base font-semibold transition-all duration-700 group-hover:-left-3">
                <div class="flex flex-col gap-1 pb-0.5">
                    <div class="flex items-center gap-1">
                        <p class="text-white text-xs opacity-0 delay-200 duration-700 ease-in-out group-hover:opacity-100">Masuk : </p>
                        <div class="flex items-center rounded-full bg-green-400/45 py-2 px-2">
                            <p class="text-xs leading-tight text-white">{{ round($ontimePercentage, 1) }}</p>
                        </div>
                        <p class="text-white text-xs opacity-0 delay-200 duration-700 ease-in-out group-hover:opacity-100">%</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <p class="text-white text-xs opacity-0 delay-200 duration-700 ease-in-out group-hover:opacity-100">Keluar : </p>
                        <div class="flex items-center rounded-full bg-green-400/45 py-2 px-2">
                            <p class="text-xs leading-tight text-white">{{ round($outtimePercentage, 1) }}</p>
                        </div>
                        <p class="text-white text-xs opacity-0 delay-200 duration-700 ease-in-out group-hover:opacity-100">%</p>
                    </div>
                </div>
            </div>
            <div class="absolute h-full -right-0 top-0 z-20 flex w-96 flex-col self-end rounded-xl border-none bg-[#7678ed] px-5 py-4 text-base font-semibold transition-all duration-700 group-hover:-right-14 group-hover:w-64 group-hover:rounded-3xl">
                <p class="text-[#fff] text-lg mt-2">Tepat Waktu</p>
            </div>
            <div class="h-16 bg-[#3d348b] w-[28rem] -left-10 shadow-2xl shadow-[#3d348b] absolute bottom-0"></div>
        </div>

    </div>
</div>

<div class="inline-block scroll-ml-6 snap-start">
    <div class="overflow-hidden rounded-xl shadow bg-gray-50">

        <div class="group relative flex cursor-pointer after:shadow-lg after:shadow-black">
            <div class="relative -left-16 top-0 z-10 w-96 rounded-xl bg-[#3d348b] px-5 py-1.5 text-base font-semibold transition-all duration-700 group-hover:-left-3">
                <div class="flex flex-col gap-1 pb-0.5">
                    <div class="flex items-center gap-1">
                        <p class="text-white text-xs opacity-0 delay-200 duration-700 ease-in-out group-hover:opacity-100">Masuk : </p>
                        <div class="flex items-center rounded-full bg-red-400/45 py-2 px-2">
                            <p class="text-xs leading-tight text-white">{{ round($totalTerlambat, 1) }}</p>
                        </div>
                        <p class="text-white text-xs opacity-0 delay-200 duration-700 ease-in-out group-hover:opacity-100">%</p>
                    </div>
                    <div class="flex items-center gap-1">
                        <p class="text-white text-xs opacity-0 delay-200 duration-700 ease-in-out group-hover:opacity-100">Keluar : </p>
                        <div class="flex items-center rounded-full bg-red-400/45 py-2 px-2">
                            <p class="text-xs leading-tight text-white">{{ round($totalKecepatan, 1) }}</p>
                        </div>
                        <p class="text-white text-xs opacity-0 delay-200 duration-700 ease-in-out group-hover:opacity-100">%</p>
                    </div>
                </div>
            </div>
            <div class="absolute h-full -right-0 top-0 z-20 flex w-96 flex-col self-end rounded-xl border-none bg-[#7678ed] px-5 py-4 text-base font-semibold transition-all duration-700 group-hover:-right-14 group-hover:w-64 group-hover:rounded-3xl">
                <p class="text-[#fff] text-lg mt-2">Terlambat</p>
            </div>
            <div class="h-16 bg-[#3d348b] w-[28rem] -left-10 shadow-2xl shadow-[#3d348b] absolute bottom-0"></div>
        </div>

    </div>
</div>