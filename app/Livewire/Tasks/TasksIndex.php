<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class TasksIndex extends Component
{
    
 
 
    public function render()
    {
        return view('livewire.tasks.tasks-index')->layout('layouts.app');
    }
}
