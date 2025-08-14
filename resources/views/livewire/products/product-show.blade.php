<div>
    <div class="mb-6">
        <flux:heading size="xl" level="1">{{ __('Show User') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('This page is show user detail') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    <a href="{{ route('product.index') }}">
        <flux:button variant="primary" color="green">Back</flux:button>
    </a>


    <div class="w-150">
        {{-- @dd($product->all()) --}}
        <p class="mx-2 my-2"><strong>Name : </strong> {{ $product->name }}</p>
        <p class="mx-2 my-2"><strong>Product : </strong> {{ $product->details }}</p>
    </div>
</div>
