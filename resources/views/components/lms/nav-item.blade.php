@props(['route', 'directRoute' => '', 'title', 'icon' => 'far fa-circle'])
@php
    $isCurrentRoute = request()->routeIs("$route") ? true : false;
@endphp
<li x-data="{ isOpen: false }" class=" nav-item @if ($isCurrentRoute) menu-is-opening menu-open @endif"
    x-on:click="isOpen = !isOpen">

    @if ($directRoute)
        <a wire:navigate href="{{ route("$directRoute") }}" @class(['nav-link cursor-pointer'])>
            <i class="{{ $icon }} nav-icon"></i>
            <p @class(['text_dark font-bold bold ' => $isCurrentRoute])>
                {{ $title }}
                <i class="right fas fa-angle-left"></i>
                {{-- <i class="right fas fa-angle-left" stle="transform:rotate(-90deg)" x-show="isOpen"></i> --}}
            </p>
        </a>
    @else
        <div @class(['nav-link cursor-pointer'])>
            <i class="{{ $icon }} nav-icon"></i>
            <p @class(['text_dark font-bold bold ' => $isCurrentRoute])>
                {{ $title }}
                <i class="right fas fa-angle-left"></i>
                {{-- <i class="right fas fa-angle-left" stle="transform:rotate(-90deg)" x-show="isOpen"></i> --}}
            </p>
        </div>
    @endif
    <ul class="nav nav-treeview" :class="{ 'd-block': isOpen }">
        {{ $slot }}
    </ul>
</li>
