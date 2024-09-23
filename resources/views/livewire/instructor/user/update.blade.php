<div>
    {{-- Be like water. --}}
    @section('page-title')
        Update Users
        <p class="m-0">
            Edit, Update your users information on your space.
        </p>
    @endsection

    @section('page-nav')
        <x-page-nav-item class="page_nav_active" href="{{ route('instructorUsers.update') }}">
            <i class="fas fa-edit me-2"></i> Edit
        </x-page-nav-item>
        <x-page-nav-item class="border-start border-end" href="{{ route('instructorUsers.update') }}">
            <i class="fas fa-info me-2"></i> Info
        </x-page-nav-item>
        <x-page-nav-item class="" href="{{ route('instructorUsers.update') }}">
            <i class="fas fa-list me-2"></i> Course
        </x-page-nav-item>
    @endsection

    <section>

        {{-- if user id not found, show the select modal to select a users --}}
        @php
            $get = $_GET['get'] ?? '1';
        @endphp
        @if (!$get)
            <div class="mx-auto mt-3 p-2 fixed flex justify-center items-center "
                style="top: 50%; left:50%; transform:translate(-50%, -50%); width:100%; height:100%; z-index:99;backdrop-filter:blur(5px)">
                <div style="max-width: 600px " class="card">

                    <div class="card-header ">
                        <div class="text-start">

                            <h4>
                                Select the user
                            </h4>
                            <p>
                                to continue at first you have to select a user form your space.
                            </p>

                        </div>
                    </div>

                    <div class="card-body">

                        <input type="search" name="" class="w-full py-2" autofocus id=""
                            placeholder="search with name or email of id">
                        <div class="py-1 px-2 flex items-center">
                            <i class="fas fa-search  me-2 text_dark"></i> 1 Result were found.
                        </div>

                        <div class="my-3 p-3 overflow-x-scroll scrolbar-none">
                            <table class=" ">
                                <thead>
                                    <tr>
                                        <x-table.th>#</x-table.th>
                                        <x-table.th>ID</x-table.th>
                                        <x-table.th>AC</x-table.th>
                                        <x-table.th>NAME</x-table.th>
                                        <x-table.th>EMAIL</x-table.th>
                                        <x-table.th>STS</x-table.th>
                                    </tr>
                                </thead>
                                <tr>

                                    <x-table.td>01</x-table.td>
                                    <x-table.td>01</x-table.td>
                                    <x-table.td>
                                        <input type="checkbox" name="" id="">
                                    </x-table.td>
                                    <x-table.td>
                                        lorem ipsum <br>
                                    </x-table.td>
                                    <x-table.td>
                                        <span class="font-sm">lorem@ipsum.com</span>
                                    </x-table.td>
                                    <x-table.td>
                                        <div class="bg-green rounded p-1">active</div>
                                    </x-table.td>

                                </tr>
                            </table>
                        </div>

                    </div>

                    <div class="card-footer">
                        <p>
                            check the user want to procced.
                        </p>
                        <button type="button" class="bg_dark text_white px-3 py-2 rounded shadow-sm ">
                            Procced
                        </button>

                    </div>

                </div>
            </div>
        @else
        @endif

    </section>
</div>
