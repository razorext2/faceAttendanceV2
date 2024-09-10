@unless ($breadcrumbs->isEmpty())
<nav class="flex mb-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        @foreach ($breadcrumbs as $breadcrumb)

        @if ($breadcrumb->url && !$loop->last)
        <li class="inline-flex items-center">
            <a href="{{ $breadcrumb->url }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                <svg class="w-3 h-3 text-gray-400 mr-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                {{ $breadcrumb->title }}
            </a>
        </li>
        @else
        <li class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
            <svg class="w-3 h-3 text-gray-400 mr-1.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            {{ $breadcrumb->title }}
        </li>
        @endif

        @endforeach
    </ol>
</nav>
@endunless