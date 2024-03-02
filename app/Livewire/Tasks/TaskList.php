<?php

namespace App\Livewire\Tasks;

use Illuminate\Support\Facades\DB;
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
        return view('livewire.tasks.task-list',['tasks'=>auth()->user()->tasks()->paginate(5),'tasksBystatus'=>auth()->user()->tasks()->select('status', DB::raw('COUNT(*) as count'))
        ->groupBy('status')
        ->get()]);
    }
}
