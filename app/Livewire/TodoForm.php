<?php

namespace App\Livewire;

use App\Models\TodoList;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TodoForm extends Component
{
    #[Validate("required|unique:todo_lists,name|max:255")]
    public $name;

    public function submit()
    {
        // sleep(3);

        $validated = $this->validate();

        TodoList::create($validated);

        $this->reset('name');

        session()->flash('message', "Todolist added successfully!");

        $this->dispatch('todo-created');
    }

    public function render()
    {
        return view('livewire.todo-form');
    }
}