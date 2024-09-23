<div {{ $attributes->merge(['class' => 'breadcrumb pt-0 bg-light border-0']) }}>
    <x-nav-link class="breadcrumb-item p-0" href="{{ URL::to('/') }}">
        <i class="fas fa-home me-2"></i> Dash
    </x-nav-link>
    {{ $slot }}
</div>
