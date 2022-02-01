<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class DeleteTask extends Component
{
    public $task;

    public function mount($task)
    {
        $this->task = Task::find($task);
    }

    public function destroy()
    {
        $this->task->delete();
        $this->emit('taskUpdated');
    }

    public function render()
    {
        return view('livewire.delete-task');
    }

}
