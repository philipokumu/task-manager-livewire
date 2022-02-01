    <form wire:submit.prevent="update" method="POST" x-cloak>
        <div class="flex bg-white">
            <input id="todo-input" wire:model="task_name" class="w-full h-7 rounded text-gray-700 ml-1 outline-none" type="text" placeholder="Write your task..." maxlength="80" required>
                <button class="bg-green-500 hover:bg-green-300 rounded text-white px-2 cursor-pointer text-sm" type="submit">
                    {{ __('Update') }}
                </button>
        </div>
    </form>