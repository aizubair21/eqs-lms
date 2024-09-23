<div>

    <x-page-title>
        Users
    </x-page-title>

    <x-lms.breadcrumb>
        <x-nav-link class="breadcrumb-item" href="{{ route('instructorUsers.index') }}">
            Users
        </x-nav-link>
        <x-nav-link class="breadcrumb-item active">
            Index
        </x-nav-link>
    </x-lms.breadcrumb>


    <x-dashboard>
        <section>
            <h6 class="mb-3 test_black w-auto py-2 rounded flex align-items-center">
                <div class="px-3 py-2 rounded me-2 text_white bg_dark">
                    <i class="fas fa-bell"></i>
                </div>

                <div class="mx-2">
                    You have total 5 users in your space.
                </div>
            </h6>
            <div class="overflow-x-scroll scrolbar-hidden">
                <table class="table ">

                    <thead>
                        <tr>
                            <x-table.th>#</x-table.th>
                            <x-table.th>Name</x-table.th>
                            <x-table.th>Email</x-table.th>
                            <x-table.th>Phone</x-table.th>
                            <x-table.th>Status</x-table.th>
                            <x-table.th>Action</x-table.th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="bg-light border-bottom">
                            <x-table.td>01</x-table.td>
                            <x-table.td>
                                <x-nav-link class="text-nowrap" href="{{ route('instructorUsers.update') }}">
                                    lorem 05
                                </x-nav-link>
                            </x-table.td>
                            <x-table.td>lorem@gmail.com</x-table.td>
                            <x-table.td>0125487520</x-table.td>
                            <x-table.td>active</x-table.td>
                            <x-table.td>
                                {{-- dropdown component --}}
                                <x-dropdown width="25" align="left">
                                    <x-slot name="trigger">
                                        <button class="btn btn-sm  dropdown-toggle">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <x-dropdown-button>
                                            <i class="fas fa-edit me-2"></i>
                                            Edit
                                        </x-dropdown-button>

                                        <x-dropdown-button>
                                            <i class="fas fa-trash me-2"></i>
                                            Delete
                                        </x-dropdown-button>

                                        <x-dropdown-button>
                                            <i class="fas fa-lock me-2"></i>
                                            Block
                                        </x-dropdown-button>

                                        <x-dropdown-button>
                                            <i class="fas fa-info me-2"></i>
                                            Info
                                        </x-dropdown-button>

                                    </x-slot>

                                </x-dropdown>
                            </x-table.td>
                        </tr>

                        <tr class="bg-light border-bottom ">
                            <x-table.td>01</x-table.td>
                            <x-table.td>
                                <x-nav-link class="text-nowrap" href="{{ route('instructorUsers.update') }}">
                                    lorem 05
                                </x-nav-link>
                            </x-table.td>
                            <x-table.td>lorem@gmail.com</x-table.td>
                            <x-table.td>0125487520</x-table.td>
                            <x-table.td>active</x-table.td>
                            <x-table.td class="">

                                {{-- dropdown component --}}
                                <x-dropdown width="25" align="left">

                                    <x-slot name="trigger">
                                        <button class="btn btn-sm  dropdown-toggle">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <button class="px-4 py-2  ">
                                            <i class="fas fa-edit me-2"></i>
                                            Edit
                                        </button>

                                        <button class="px-4 py-2  ">
                                            <i class="fas fa-trash me-2"></i>
                                            Delete
                                        </button>

                                        <button class="px-4 py-2  ">
                                            <i class="fas fa-lock me-2"></i>
                                            Block
                                        </button>

                                        <button class="px-4 py-2  ">
                                            <i class="fas fa-info me-2"></i>
                                            Info
                                        </button>

                                    </x-slot>

                                </x-dropdown>
                            </x-table.td>
                        </tr>

                        <tr class="bg-light border-bottom">
                            <x-table.td>01</x-table.td>
                            <x-table.td>
                                <x-nav-link class="text-nowrap" href="{{ route('instructorUsers.update') }}">
                                    lorem 05
                                </x-nav-link>
                            </x-table.td>
                            <x-table.td>lorem@gmail.com</x-table.td>
                            <x-table.td>0125487520</x-table.td>
                            <x-table.td>active</x-table.td>
                            <x-table.td>
                                {{-- dropdown component --}}
                                <x-dropdown width="25" align="left">
                                    <x-slot name="trigger">
                                        <button class="btn btn-sm  dropdown-toggle">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </x-slot>


                                    <x-slot name="content">
                                        <x-dropdown-button wire:click="test">
                                            <i class="fas fa-edit me-2"></i>
                                            Edit
                                        </x-dropdown-button>

                                        <x-dropdown-button>
                                            <i class="fas fa-trash me-2"></i>
                                            Delete
                                        </x-dropdown-button>

                                        <x-dropdown-button>
                                            <i class="fas fa-lock me-2"></i>
                                            Block
                                        </x-dropdown-button>

                                        <x-dropdown-button>
                                            <i class="fas fa-info me-2"></i>
                                            Info
                                        </x-dropdown-button>

                                    </x-slot>

                                </x-dropdown>
                            </x-table.td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </section>
    </x-dashboard>

</div>
