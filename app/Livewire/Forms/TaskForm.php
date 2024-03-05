<?php

namespace App\Livewire\Forms;

use App\Models\Task;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    public ?Task $task;
    public $editMode = false;
    public $title='';
    public $description='';
    public $slug='';
    public $status='';
    public $priority='';
    public $deadline='';

    public function setTask(Task $task)
    {
        $this->task = $task;
        $this->editMode = true;
        $this->title = $task->title;
        $this->slug = $task->slug;
        $this->description = $task->description;
        $this->status = $task->status;
        $this->deadline = $task->deadline->format('Y-m-d');
        $this->priority = $task->priority;
    }

    public function rules() 
    {
        return [
            'title' => 'required',
            'description' => 'required|min:3',
            'slug' => 'required|min:3',

        ];
    }
    public function createTask(){
          if ($this->editMode) {
            $this->task->update($this->all());
            $this->reset();
           session()->flash('message', __('Task updated successfully'));
        } else {
            auth()->user()->tasks()->create($this->all());
            $this->reset();
           session()->flash('message', __('Task created successfully'));
        }

    }
    
}
