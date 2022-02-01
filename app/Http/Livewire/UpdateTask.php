<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class UpdateTask extends Component
{
    public $task_name;
    public $task;

    protected $rules = [
        'task_name' => 'required|min:6|max:200',
    ];

    public function mount($taskId)
    {
        $this->task = Task::find($taskId);
        $this->task_name = $this->task->task_name;
    }

    public function update()
    {
        $this->task->update(['task_name' => $this->task_name]);
        $this->emit('taskEdited');
    }

    public function render()
    {
        return view('livewire.update-task');
    }
}
