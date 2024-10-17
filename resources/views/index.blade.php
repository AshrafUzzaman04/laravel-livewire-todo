<x-layout>
    <div id="head" class="flex border-t-2 border-blue-800">
        <div class="w-full">
            <header class="flex items-center justify-between h-20 px-6 bg-white border-b border-b-gray-200">
                <div id="left-header" class="">
                </div>
                <div id="right-header" class="space-x-3 text-gray-800 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            </header>
        </div>
    </div>
    <div id="content" class="mx-auto" style="max-width:500px;">
        <div class="container py-6 mx-auto content">
            <div class="mx-auto">
                <div id="create-form" class="p-6 bg-white border-t-2 border-blue-500 hover:shadow">
                    <div class="flex ">
                        <h2 class="mb-5 text-lg font-semibold text-gray-800">Create New Todo</h2>
                    </div>
                    @livewire('todo-form')
                    {{-- <livewire:todo-form /> --}}
                </div>
            </div>
        </div>
        @livewire('todo-list-table', ['lazy' => true])
        {{-- <livewire:todo-list-table lazy /> --}}
    </div>
</x-layout>
