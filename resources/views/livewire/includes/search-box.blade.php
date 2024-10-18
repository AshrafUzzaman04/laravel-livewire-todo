<div id="search-box" class="flex flex-col items-center justify-center px-2 my-4">
    <div class="flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
        <input type="text" wire:model.live.throttle.200ms='search' placeholder="Search..."
            class="px-4 py-2 ml-2 bg-gray-100 rounded hover:bg-gray-100" />
    </div>
    {{-- <span class="block mt-2 text-xs text-red-500">Error</span> --}}

</div>
