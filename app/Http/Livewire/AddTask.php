<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTask extends Component
{
    public $task_name = '';

    protected $rules = [
        'task_name' => 'required|min:6|max:200',
    ];

    public function store()
    {   
        $this->validate();

        Task::create(['task_name'=>$this->task_name, 'priority' => Task::count() + 1]);

        $this->emit('taskUpdated');
    }

    public function render()
    {
        return view('livewire.add-task');
    }
}
