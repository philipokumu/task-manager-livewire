<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class TaskList extends Component
{
    public $tasks = array();
    public $showTaskList = false;

    protected $listeners = [
        'taskUpdated' => 'loadTasks',
        'taskEdited' => 'refreshList'
    ];

    public function mount()
    {
        $this->loadTasks();
    }
    public function render()
    {
        return view('livewire.task-list');
    }

    public function loadTasks()
    {
        $this->tasks = Task::orderBy('priority')->get();

        $this->showTaskList = $this->tasks->count() > 0 ? true : false;


    }

    public function updateTaskOrder($list)
    {
        foreach($list as $task){
            Task::find($task['value'])->update(['priority' => $task['order']]);
        }
        $this->loadTasks();
    }
    
    public function refreshList()
    {
        $this->mount();
    }
}
