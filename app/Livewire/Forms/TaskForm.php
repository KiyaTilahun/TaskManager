<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    
    public $title='';
    public $description='';
    public $slug='';
    public $status='';
    public $priority='';
    public $deadline='';

    public function rules() 
    {
        return [
            'title' => 'required',
            'description' => 'required|min:3',
            'slug' => 'required|min:3',

        ];
    }
    public function createTask(){
       return auth()->user()->tasks()->create($this->all());

    }
    
}
