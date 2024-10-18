<?php

namespace App\Livewire;

use App\Models\TodoList;
use Illuminate\Validation\Rule as ValidationRule;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class TodoListTable extends Component
{
    use WithPagination;

    public $search;

    public $editTodoId;

    #[Rule('required|min:3|max:255')]
    public $editTodoName;

    public function placeholder()
    {
        return view('todo-list-placeholder');
    }

    #[Computed()]
    public function todoLists()
    {
        return TodoList::latest()
                ->where("name", 'like', "%{$this->search}%")
                ->paginate(3);
    }

    #[Computed()]
    public function countLists()
    {
        return TodoList::where('name', 'like', "%{$this->search}%")->count();
    }

    #[On('todo-created')]
    public function render()
    {
        return view('livewire.todo-list-table');
    }

    #[On('todo-created')]
    public function pageReset()
    {
        $this->resetPage();
    }

    public function editTodo($id)
    {
        if ($todoList = TodoList::find($id)) {
            $this->editTodoId = $id;
            $this->editTodoName = $todoList->name;
        }
    }

    public function updateTodo()
    {
        if ($todoList = TodoList::find($this->editTodoId)) {
            $this->validateOnly('editTodoName');

            $this->validate([
                'editTodoName' => [
                    ValidationRule::unique('todo_lists', 'name')->ignore($this->editTodoId)
                ],
            ]);

            $todoList->update([
                "name" => $this->editTodoName,
            ]);

            $this->cancelEdit();
        }
    }

    public function cancelEdit()
    {
        $this->reset('editTodoId', 'editTodoName');
    }

    public function delete($id)
    {
        if ($todoList = TodoList::find($id)) {
            $todoList->delete();
        }
    }
}