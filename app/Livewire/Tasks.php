<?php

namespace App\Livewire;

use Livewire\Component;

class Tasks extends Component
{
   public $todos=[];
   public $task='';

   public function mount()  {
    return $this->todos=['first','second','hjk'];
    
   }
   public function add()  {

     $this->todos[]=$this->task;

     $this->reset('task');
    
    
   }

    public function render()
    {
        return view('livewire.tasks')->layout('layouts.app');
    }
}
