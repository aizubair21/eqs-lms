<div>
    @section('content')
        {{-- If your happiness depends on money, you will never be happy with yourself. --}}

        <h1>This is counter livewire class</h1>
        <div class="flex align-center ">
            <button wire:click="addition" class="bg_dark p-3 rounded mx-1 text_white font-medium">
                <i class="fas fa-plus font-medium"></i>
            </button>
            <div class="p-3 rounded mx-2 bg-light font-bold">{{ $counter }}</div>
            <button wire:click="substr" class="bg_dark p-3 rounded mx-1 text_white font-medium">
                <i class="fas fa-minus font-medium"></i>
            </button>
        </div>
    @endsection
</div>
