<div class="inline-block snap-start scroll-ml-6">
	<div class="dark:border-gray-700 overflow-hidden rounded-xl border border-gray-200">

		<div class="dark:bg-[#18181b] group relative h-28 w-96 bg-white group-hover:top-0">

			<div
				class="relative -left-32 top-0 z-10 w-96 rounded-xl px-5 pb-10 pt-9 text-base font-semibold opacity-0 transition-all duration-700 group-hover:-left-3 group-hover:bg-transparent group-hover:opacity-100">
				<div class="flex flex-col">
					<div class="flex items-center gap-1 text-gray-900">
						<div class="dark:text-white flex items-center rounded-full px-5 py-2">
							<p class="text-lg leading-tight text-green-700">{{ $ontimeAttendance }}</p>
						</div>
						<p class="dark:text-white text-lg text-gray-800"> Kali</p>
					</div>
				</div>
			</div>
			<div
				class="absolute -right-0 top-0 z-10 h-full w-96 self-end border-none px-5 py-2 text-base font-semibold transition-all duration-700 group-hover:-right-14 group-hover:w-64">
				<div
					class="absolute left-0 top-5 flex h-auto w-[395px] cursor-pointer transition-all duration-700 group-hover:-left-44 group-hover:top-10">
					<div class="w-full rounded-lg" id="cardOntime-chart" data-ontime-counts='@json($ontimeCounts)'></div>
				</div>
				<p class="dark:text-white absolute top-3 text-lg font-medium text-gray-800 transition-all duration-700">Masuk Tepat
					Waktu</p>

			</div>
		</div>
	</div>
</div>

<div class="inline-block snap-start scroll-ml-6">
	<div class="dark:border-gray-700 overflow-hidden rounded-xl border border-gray-200">

		<div class="dark:bg-[#18181b] group relative h-28 w-96 bg-white group-hover:top-0">

			<div
				class="relative -left-32 top-0 z-10 w-96 rounded-xl px-5 pb-10 pt-9 text-base font-semibold transition-all duration-700 group-hover:-left-3 group-hover:bg-transparent">
				<div class="flex flex-col">
					<div class="flex items-center gap-1 text-gray-900">
						<div class="dark:text-white flex items-center rounded-full px-5 py-2">
							<p class="text-lg leading-tight text-red-700">{{ $terlambat }}</p>
						</div>
						<p class="dark:text-white text-lg text-gray-800">Kali</p>
					</div>
				</div>
			</div>
			<div
				class="absolute -right-0 top-0 z-10 h-full w-96 self-end border-none px-5 py-2 text-base font-semibold transition-all duration-700 group-hover:-right-[132px] group-hover:w-64">
				<div
					class="absolute left-0 top-5 flex h-auto w-[395px] cursor-pointer transition-all duration-700 group-hover:-left-[260px] group-hover:top-10">
					<div class="w-full rounded-lg" id="cardLate-chart" data-late-counts='@json($lateCounts)'></div>
				</div>
				<p class="dark:text-white absolute top-3 text-lg font-medium text-gray-800 transition-all duration-700">Terlambat
				</p>

			</div>
		</div>
	</div>
</div>

<div class="inline-block snap-start scroll-ml-6">
	<div class="dark:border-gray-700 overflow-hidden rounded-xl border border-gray-200">

		<div class="dark:bg-[#18181b] group relative h-28 w-96 bg-white group-hover:top-0">

			<div
				class="relative -left-32 top-0 z-10 w-96 rounded-xl px-5 pb-10 pt-9 text-base font-semibold opacity-0 transition-all duration-700 group-hover:-left-3 group-hover:bg-transparent group-hover:opacity-100">
				<div class="flex flex-col">
					<div class="flex items-center gap-1 text-gray-900">
						<div class="dark:text-white flex items-center rounded-full px-5 py-2">
							<p class="text-lg leading-tight text-cyan-700">{{ $outtimeAttendance }}</p>
						</div>
						<p class="dark:text-white text-lg text-gray-800"> Kali</p>
					</div>
				</div>
			</div>
			<div
				class="absolute -right-0 top-0 z-10 h-full w-96 self-end border-none px-5 py-2 text-base font-semibold transition-all duration-700 group-hover:-right-14 group-hover:w-64">
				<div
					class="absolute left-0 top-5 flex h-auto w-[395px] cursor-pointer transition-all duration-700 group-hover:-left-44 group-hover:top-10">
					<div class="w-full rounded-lg" id="cardOuttime-chart" data-outtime-counts='@json($outtimeCounts)'></div>
				</div>
				<p class="dark:text-white absolute top-3 text-lg font-medium text-gray-800 transition-all duration-700">Keluar Tepat
					Waktu</p>

			</div>
		</div>
	</div>
</div>

<div class="inline-block snap-start scroll-ml-6">
	<div class="dark:border-gray-700 overflow-hidden rounded-xl border border-gray-200">

		<div class="dark:bg-[#18181b] group relative h-28 w-96 bg-white group-hover:top-0">

			<div
				class="relative -left-32 top-0 z-10 w-96 rounded-xl px-5 pb-10 pt-9 text-base font-semibold opacity-0 transition-all duration-700 group-hover:-left-3 group-hover:bg-transparent group-hover:opacity-100">
				<div class="flex flex-col">
					<div class="flex items-center gap-1 text-gray-900">
						<div class="dark:text-white flex items-center rounded-full px-5 py-2">
							<p class="text-lg leading-tight text-rose-700">{{ $kecepatan }}</p>
						</div>
						<p class="dark:text-white text-lg text-gray-800"> Kali</p>
					</div>
				</div>
			</div>
			<div
				class="absolute -right-0 top-0 z-10 h-full w-96 self-end border-none px-5 py-2 text-base font-semibold transition-all duration-700 group-hover:-right-24 group-hover:w-64">
				<div
					class="absolute left-0 top-5 flex h-auto w-[395px] cursor-pointer transition-all duration-700 group-hover:-left-44 group-hover:top-10">
					<div class="w-full rounded-lg" id="Cardkecepatan-chart" data-fast-counts='@json($fastCounts)'></div>
				</div>
				<p class="dark:text-white absolute top-3 text-lg font-medium text-gray-800 transition-all duration-700">Cepat Pulang
				</p>

			</div>
		</div>
	</div>
</div>
