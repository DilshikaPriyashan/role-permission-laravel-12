<div>
    <div class="mb-6">
        <flux:heading size="xl" level="1">{{ __('Edit Role') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Edit an existing Role in the system') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>
        <form method="POST" wire:submit="submit" class="mt-6 space-y-6 w-1/3">
            @csrf
            <flux:input wire:model="name" label="Name" placeholder="Name" />
            <flux:checkbox.group wire:model="permissions" label="Permissions">
                @foreach ($allPermissions as $permission)
                    <flux:checkbox label="{{ $permission->name }}" value="{{ $permission->name }}"/>
                @endforeach
            </flux:checkbox.group>
            <flux:button type="submit" variant="primary">Primary</flux:button>
        </form>
    </div>
</div>
