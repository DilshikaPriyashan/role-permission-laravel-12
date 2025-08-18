<div>
    <div class="mb-6">
        <flux:heading size="xl" level="1">{{ __('Show Role') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('This page is show role detail') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <a href="{{ route('role.index') }}">
        <flux:button variant="primary" color="green">Back</flux:button>
    </a>


    <div class="w-150">
        <p class="mx-2 my-2"><strong>Role Name :</strong> {{ $role->name }}</p>
        <p class="mx-2 my-2"><strong>Roles :</strong>
            @if ($role->permissions)
                @foreach ($role->permissions as $permission)
                    <flux:badge>{{ $permission->name }}</flux:badge>
                @endforeach
            @endif
        </p>
    </div>
</div>
