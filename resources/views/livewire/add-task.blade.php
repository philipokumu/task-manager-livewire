<div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose">
    <form wire:submit.prevent="store" method="POST">
        <div class="flex shadow bg-white p-2">
            <input id="todo-input" wire:model="task_name" class="w-full rounded text-gray-700 p-2" type="text" placeholder="Write your task..." maxlength="50" required>
            <button class="bg-green-500 hover:bg-green-400 rounded text-white p-2 pl-5 pr-5 cursor-pointer" type="submit">
                {{ __('Add') }}
            </button>
        </div>
    </form>
</div>