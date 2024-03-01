<?php

namespace App\Livewire\Tasks;

use Livewire\Component;

class TasksIndex extends Component
{
    public $title='';
    public $description='';
    public $slug='';
    public $status='';
    public $priority='';
    public $deadline='';


    public function save()  {
        auth()->user()->tasks()->create($this->only(['title','description','slug','status','priority','deadline']));
        session()->flash('message','saved succesfullty');
        $this->reset();
        
    }
    public function render()
    {
        return view('livewire.tasks.tasks-index')->layout('layouts.app');
    }
}
