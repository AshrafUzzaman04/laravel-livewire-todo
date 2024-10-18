 <div>
     @include('livewire.includes.search-box')
     <h3 wire:poll.visible.10s>Total Todo {{ $this->countLists }}</h3>

     <div id="todos-list">
         @if ($this->todoLists && $this->countLists > 0)
             @foreach ($this->todoLists as $list)
                 @include('livewire.includes.todo-card')
             @endforeach
         @else
             <div class="col-span-1 px-5 py-6 mb-5 bg-white border-t-2 border-blue-500 todo card hover:shadow">
                 <span class="text-red-600">
                     Not Data Found
                 </span>
             </div>
         @endif

         <div class="my-2">
             <!-- Pagination goes here -->
             {{ $this->todoLists->links() }}
         </div>
     </div>
 </div>
