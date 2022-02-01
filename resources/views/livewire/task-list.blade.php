    <div wire:sortable="updateTaskOrder" x-data="{ openList: @entangle('showTaskList')}" x-show="openList" class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
    
        @foreach ($tasks as $task)
        <div wire:key="task-{{ $task->id }}" wire:sortable.item="{{ $task->id }}" class="card shadow-md px-2 rounded-md mt-3" x-data="{showUpdate : false}" @click.away="showUpdate = false">
            <div class="flex justify-between py-0 my-0">
                <div class="pt-3 pb-0">
                    <div class="flex font-sans text-lg">
                        <p class="ml-1 p-0 my-0"> {{ $task['priority']}}. </p>
                        <p class="ml-1 p-0 my-0" x-show="!showUpdate"> {{ $task['task_name']}}</p>
                        <div  x-show="showUpdate">
                            <livewire:update-task :taskId="$task->id" :wire:key="'task-update-'.$task->id">
                        </div>
                    </div>
                    <p class="text-sm text-gray-400 my-0">{{ $task['updated_at']}}</p>
                </div>
                <div class="flex justify-start">
                    <p x-show="!showUpdate" class="text-sm text-blue-500 cursor-pointer mx-2 mt-0 pt-6 font-bold" @click="showUpdate = ! showUpdate">Edit</p>
                    <p x-show="showUpdate" class="text-sm text-blue-500 cursor-pointer mx-2 mt-0 pt-6 font-bold" @click="showUpdate = ! showUpdate" x-cloak>Cancel edit</p>
                    <p class="text-sm text-blue-500 cursor-grab mx-2 mt-0 pt-6 font-bold" wire:sortable.handle><..></p>
                    <livewire:delete-task :task="$task->id" :wire:key="'task-delete-'.$task->id">
                </div>
            </div>
        </div>
        
        
        @endforeach
    </div>