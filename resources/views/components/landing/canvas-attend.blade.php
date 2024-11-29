<div class="relative flex w-full flex-col gap-6 rounded-lg md:flex-row lg:flex-col lg:gap-0" data-aos="fade-right"
	data-aos-delay="100">
	<div class="h-full w-full rounded-lg md:rounded-lg lg:w-full lg:object-fill">
		<img
			class="dark:ring-gray-700 h-60 w-full rounded-lg object-cover ring-1 ring-black md:h-auto lg:h-full lg:object-fill"
			id="{{ $imgID }}" src="{{ asset('assets/img/noImage.webp') }}" alt="">
		<canvas
			class="dark:ring-gray-700 absolute left-0 top-0 h-60 w-full rounded-lg object-cover ring-1 ring-black md:h-full lg:h-full"
			id="{{ $canvID }}"></canvas>
	</div>
</div>
