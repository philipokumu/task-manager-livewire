<x-guest-layout>
    <div class="pt-4 bg-blue-600">
        <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
            <div>
                <x-jet-authentication-card-logo />
            </div>

            <livewire:add-task />
            <livewire:task-list />
        </div>
    </div>
</x-guest-layout>