<div>
    <div class="mb-6">
        <flux:heading size="xl" level="1">{{ __('Create User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Add a new user to the system') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    @session('success')
        <div id="toast-success"
            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800"
            role="alert">
            <div
                class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">This is a success message.</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                aria-label="Close" onclick="document.getElementById('toast-success').style.display='none'">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endsession

    <a href="{{ route('user.index') }}">
        <flux:button variant="primary" color="green">Back</flux:button>
    </a>


    <div>
        <form method="POST" wire:submit="submit" class="mt-6 space-y-6 w-1/3">
            @csrf
            <flux:input wire:model="name" label="Name" placeholder="Name" />
            <flux:input wire:model="email" label="Email" type="email" placeholder="Email" />
            <flux:input wire:model="password" label="Password" type="password" placeholder="Password" />
            <flux:input wire:model="confirm_password" label="Confirm Password" type="password"
                placeholder="Confirm Password" />

            <flux:button type="submit" variant="primary">Primary</flux:button>
        </form>
    </div>
</div>
