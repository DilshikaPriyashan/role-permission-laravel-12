<div>
    <div class="mb-6">
        <flux:heading size="xl" level="1">{{ __('Create product') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Add a new product to the system') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <div>
        <form method="POST" wire:submit="submit" class="mt-6 space-y-6 w-1/3">
            @csrf
            <flux:input wire:model="name" label="Name" placeholder="Name" />
            <flux:input wire:model="details" label="details" placeholder="details" />
            <flux:button type="submit" variant="primary">Primary</flux:button>
        </form>
    </div>
</div>
