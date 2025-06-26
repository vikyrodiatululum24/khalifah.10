@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between w-full items-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-primary-400 bg-white border border-primary-300 cursor-default leading-5 rounded-md dark:text-primary-600 dark:bg-gray-800 dark:border-primary-600">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-primary-700 bg-white border border-primary-300 leading-5 rounded-md hover:text-primary-500 focus:outline-none focus:ring ring-primary-300 focus:border-primary-400 active:bg-primary-100 active:text-primary-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-primary-600 dark:text-primary-300 dark:focus:border-primary-700 dark:active:bg-primary-700 dark:active:text-primary-300">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-primary-700 bg-white border border-primary-300 leading-5 rounded-md hover:text-primary-500 focus:outline-none focus:ring ring-primary-300 focus:border-primary-400 active:bg-primary-100 active:text-primary-700 transition ease-in-out duration-150 dark:bg-gray-800 dark:border-primary-600 dark:text-primary-300 dark:focus:border-primary-700 dark:active:bg-primary-700 dark:active:text-primary-300">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-primary-400 bg-white border border-primary-300 cursor-default leading-5 rounded-md dark:text-primary-600 dark:bg-gray-800 dark:border-primary-600">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
