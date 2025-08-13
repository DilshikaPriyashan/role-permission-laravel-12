<div>
    <div class="mb-6">
        <flux:heading size="xl" level="1">{{ __('Create User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Add a new user to the system') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

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
