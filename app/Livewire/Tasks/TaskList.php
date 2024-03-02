<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class TaskList extends Component
{
    
    use WithPagination;
public function placeholder(){

    return view('skeleton');
}

    #[On('task_created')]
    public function render()
    {
        return view('livewire.tasks.task-list',['tasks'=>auth()->user()->tasks()->paginate(5),'count'=>auth()->user()->tasks()->count()]);
    }
}
