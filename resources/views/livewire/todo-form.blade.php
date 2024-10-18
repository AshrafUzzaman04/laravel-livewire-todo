<div>
    <form wire:submit.prevent='submit'>
        <div class="mb-6">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">*
                Todo </label>
            <input wire:model.live.throttle.200ms='name' type="text" id="title" placeholder="Todo.."
                class="bg-gray-100 text-gray-900 text-sm rounded block w-full p-2.5 @error('name') border border-red-600 @enderror">

            @error('name')
                <span class="block mt-3 text-xs text-red-500 ">{{ $message }}</span>
            @enderror
        </div>
        <button wire:loading.attr="disabled" type="submit"
            class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600">

            <div wire:loading.delay.remove wire:target='submit'>Create +</div>
            <div wire:loading.delay wire:target='submit'
                class="w-5 h-5 border-b-2 border-white rounded-full animate-spin">
            </div>

        </button>
        @if (Session::has('message'))
            <br>
            <span class="text-xs text-green-500">{{ session('message') }}</span>
        @endif

    </form>
</div>
