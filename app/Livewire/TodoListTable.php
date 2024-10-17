<?php

namespace App\Livewire;

use App\Models\TodoList;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class TodoListTable extends Component
{
    use WithPagination;

    public $search;

    public $todoLists;

    #[On('todo-created')]
    public function render()
    {
        return view('livewire.todo-list-table', [
            'lists' => TodoList::latest()->where("name", 'like', "%{$this->search}%")->paginate(3),
        ]);
    }
}
