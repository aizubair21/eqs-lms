@props(['content', 'route'])
<li class="nav-item">
    <a wire:navigate href="{{ $route ? route("$route") : '' }}" @class(['nav-link ', 'active' => request()->routeIs("$route")])>
        <i class="fas fa-circle nav-icon w-3 h-3"></i>
        <p>{{ $content }} </p>
    </a>
</li>
