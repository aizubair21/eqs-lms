<div>

    @section('page-title')
        Test
    @endsection

    @section('page-nav')
        <x-page-nav-item class="page_nav_active" href="{{ route('test.blade', ['p' => 'blade']) }}">Blade</x-page-nav-item>
        {{-- <x-page-nav-item class="" href="{{ route('test') }}">Blade Components</x-page-nav-item> --}}
        <x-page-nav-item class="" href="{{ route('test.class') }}">Class and Objects</x-page-nav-item>
        <x-page-nav-item class="" href="{{ route('test.livewire') }}">Livewire Components</x-page-nav-item>
    @endsection



    <x-section-title>
        <x-slot name="title">
            Test Page
        </x-slot>
        <x-slot name="description">
            Here i use to test my all of development process. including blade syntax, class, property and methods.
        </x-slot>
    </x-section-title>

    <x-section-title>
        <x-slot name="title">
            Test Playground
        </x-slot>
        <x-slot name="description">

            <hr>
            <input type="checkbox" name="active" value="active" @checked(old('active', 'active')) />
            <hr>

            {{ $_GET['p'] ?? 'No Data' }}

        </x-slot>
    </x-section-title>

    <x-section-title>
        <x-slot name="title">
            Modern Dropdown
        </x-slot>
        <x-slot name="description">
            <x-dropdown align="left" width="70">
                <x-slot name="trigger">
                    <button type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                        Select Your Pasion
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link href="">
                        Mandetory
                    </x-dropdown-link>
                </x-slot>
            </x-dropdown>
        </x-slot>
    </x-section-title>

    <div>
        <h1>{{ $count }}</h1>

        <button wire:click="increment">+</button>

        <button wire:click="decrement">-</button>
    </div>

</div>
