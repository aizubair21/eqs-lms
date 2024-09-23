<div>
    <div>

        @section('page-title')
            Test Class and Object
        @endsection

        @section('page-nav')
            <x-page-nav-item class="" href="{{ route('test.blade') }}">Blade</x-page-nav-item>
            {{-- <x-page-nav-item class="" href="{{ route('test') }}">Blade Components</x-page-nav-item> --}}
            <x-page-nav-item class="page_nav_active" href="{{ route('test.class') }}">Class and Objects</x-page-nav-item>
            <x-page-nav-item class="" href="{{ route('test.livewire') }}">Livewire Components</x-page-nav-item>
        @endsection



        <div class="p-3 bg-indigo-900 text-white" x-data="{ GData: 'me parent component' }">
            <h4 class=" mb-2">Type to check reactive</h4>
            <input type="text" wire:model="$wire.GData" class="bg-light rounded border-0">
            <button class="block border bg-white px-3 py-2 rounded" wire:click="test">Test</button>
            <p class="my-2 ms-2">
                You type: <strong x-html="GData"></strong>
            </p>
        </div>
        <div class="border my-2 "></div>
        <livewire:test.component.reactive-component :$GData />
        <hr>
        @livewire('test.component.reactive-component', ['GData' => $GData])
        <hr>
        

    </div>
</div>
