<a wire:navigate  {{ $attributes->merge(['class' => 'nav-item px-3 py-2', 'href' => '']) }}>
    {{ $slot }}
</a>
