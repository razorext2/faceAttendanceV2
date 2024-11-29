<div class="relative z-10 mb-0 px-6 md:mb-10 md:grid md:grid-cols-1" data-aos="fade-down">
	<div class="h-full items-center justify-center py-5 text-left text-black md:flex md:flex-col md:text-center">
		<x-landing.heading-text>
			{{ $title }}
		</x-landing.heading-text>

		<x-landing.paragraph class="hidden text-lg md:block">
			{!! $slot !!}
		</x-landing.paragraph>

		<x-landing.paragraph class="hidden md:block">
			Tekan tombol
			<span class="dark:text-white text-xl font-bold text-black">
				[-]
			</span>
			untuk melihat tutorial
		</x-landing.paragraph>
	</div>
</div>
