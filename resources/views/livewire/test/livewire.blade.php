<div>
    <div>

        @section('page-title')
            Test Livewire
        @endsection

        @section('page-nav')
            <x-page-nav-item class="" href="{{ route('test.blade') }}">Blade</x-page-nav-item>
            {{-- <x-page-nav-item class="" href="{{ route('test.blade') }}">Blade Components</x-page-nav-item> --}}
            <x-page-nav-item class="" href="{{ route('test.class') }}">Class and Objects</x-page-nav-item>
            <x-page-nav-item class="page_nav_active" href="{{ route('test.livewire') }}">Livewire Components</x-page-nav-item>
        @endsection



        <div class=" p-2 ">
            <h6 class="mb-3 test_black w-auto py-2 rounded flex align-items-center">


                {{-- <x-dropdown align="left" class=" mx-2">

                        <x-slot name="trigger">
                            <button type="button" class="bg_dark px-3 py-2 rounded text_white ">
                                Running
                            </button>
                        </x-slot>

                        <x-slot name="content" class="px-1">
                            <x-button type="button" class="my-1 bg_dark w-50 text_white mx-1">
                                <i class="fas fa-tasks me-2"></i> All
                            </x-button>
                            <x-button type="button" class="bg_dark w-50 text_white mx-1">
                                <i class="fas fa-trash me-2"></i> Trash
                            </x-button>
                            <x-button type="button" class="my-1 bg_dark w-50 text_white mx-1">
                                <i class="fas fa-info me-2"></i> Draft
                            </x-button>
                        </x-slot>

                    </x-dropdown> --}}

                <div class="px-3 py-2 rounded me-2 text_white bg_dark">
                    <i class="fas fa-bell"></i>
                </div>

                <div class="mx-2">
                    You have total 5 course running
                </div>
            </h6>
            <div class="overflow-x-scroll pb-5">

                <table class="table">
                    <thead>
                        <tr>
                            <x-table.th>#</x-table.th>
                            <x-table.th>Course</x-table.th>
                            <x-table.th>Module</x-table.th>
                            <x-table.th>Content</x-table.th>
                            <x-table.th>Instructor</x-table.th>
                            <x-table.th>Status</x-table.th>
                            <x-table.th>Inrolled</x-table.th>
                            <x-table.th>A/C</x-table.th>

                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>
                                <x-nav-link class="text_primary">
                                    Muallima Course
                                </x-nav-link>
                            </td>
                            <td>05</td>
                            <td>20</td>
                            <td>MD. Abdur Rahman</td>
                            <td>
                                <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45 rounded"></div>
                            </td>
                            <td>20 Times</td>
                            <td>
                                <x-dropdown align="right" class="w-100">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            <i class="fas fa-align-justify"></i>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content" class="px-1">
                                        <x-button type="button" class="bg_dark w-100 text_white mx-1">
                                            <i class="fas fa-trash me-2"></i> Delete
                                        </x-button>
                                        <x-button type="button" class="my-1 bg_dark w-100 text_white mx-1">
                                            <i class="fas fa-info me-2"></i> Info
                                        </x-button>
                                    </x-slot>
                                </x-dropdown>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>
                                <x-nav-link class="text_primary">
                                    Muallima Course
                                </x-nav-link>
                            </td>
                            <td>05</td>
                            <td>20</td>
                            <td>MD. Abdur Rahman</td>
                            <td>
                                <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45 rounded"></div>
                            </td>
                            <td>20 Times</td>
                            <td>
                                <x-dropdown align="right" class="w-100">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            <i class="fas fa-align-justify"></i>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content" class="px-1">
                                        <x-button type="button" class="bg_dark w-100 text_white mx-1">
                                            <i class="fas fa-trash me-2"></i> Delete
                                        </x-button>
                                        <x-button type="button" class="my-1 bg_dark w-100 text_white mx-1">
                                            <i class="fas fa-info me-2"></i> Info
                                        </x-button>
                                    </x-slot>
                                </x-dropdown>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>
                                <x-nav-link class="text_primary">
                                    Muallima Course
                                </x-nav-link>
                            </td>
                            <td>05</td>
                            <td>20</td>
                            <td>MD. Abdur Rahman</td>
                            <td>
                                <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45 rounded"></div>
                            </td>
                            <td>20 Times</td>
                            <td>
                                <x-dropdown align="right" class="w-100">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            <i class="fas fa-align-justify"></i>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content" class="px-1">
                                        <x-button type="button" class="bg_dark w-100 text_white mx-1">
                                            <i class="fas fa-trash me-2"></i> Delete
                                        </x-button>
                                        <x-button type="button" class="my-1 bg_dark w-100 text_white mx-1">
                                            <i class="fas fa-info me-2"></i> Info
                                        </x-button>
                                    </x-slot>
                                </x-dropdown>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>
                                <x-nav-link class="text_primary">
                                    Muallima Course
                                </x-nav-link>
                            </td>
                            <td>05</td>
                            <td>20</td>
                            <td>MD. Abdur Rahman</td>
                            <td>
                                <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45 rounded"></div>
                            </td>
                            <td>20 Times</td>
                            <td>
                                <x-dropdown align="right" class="w-100">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            <i class="fas fa-align-justify"></i>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content" class="px-1">
                                        <x-button type="button" class="bg_dark w-100 text_white mx-1">
                                            <i class="fas fa-trash me-2"></i> Delete
                                        </x-button>
                                        <x-button type="button" class="my-1 bg_dark w-100 text_white mx-1">
                                            <i class="fas fa-info me-2"></i> Info
                                        </x-button>
                                    </x-slot>
                                </x-dropdown>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>
                                <x-nav-link class="text_primary">
                                    Muallima Course
                                </x-nav-link>
                            </td>
                            <td>05</td>
                            <td>20</td>
                            <td>MD. Abdur Rahman</td>
                            <td>
                                <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45 rounded"></div>
                            </td>
                            <td>20 Times</td>
                            <td>
                                <x-dropdown align="right" class="w-80">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            <i class="fas fa-align-justify"></i>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content" class="px-1">
                                        <x-button type="button" class="bg_dark w-80 text_white mx-1">
                                            <i class="fas fa-trash me-2"></i> Delete
                                        </x-button>
                                        <x-button type="button" class="my-1 bg_dark w-80 text_white mx-1">
                                            <i class="fas fa-info me-2"></i> Info
                                        </x-button>
                                    </x-slot>
                                </x-dropdown>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>
                                <x-nav-link class="text_primary">
                                    Muallima Course
                                </x-nav-link>
                            </td>
                            <td>05</td>
                            <td>20</td>
                            <td>MD. Abdur Rahman</td>
                            <td>
                                <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45 rounded"></div>
                            </td>
                            <td>20 Times</td>
                            <td>
                                <x-dropdown align="right" class="w-100">
                                    <x-slot name="trigger">
                                        <button type="button"
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            <i class="fas fa-align-justify"></i>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content" class="px-1">
                                        <x-button type="button" class="bg_dark w-100 text_white mx-1">
                                            <i class="fas fa-trash me-2"></i> Delete
                                        </x-button>
                                        <x-button type="button" class="my-1 bg_dark w-100 text_white mx-1">
                                            <i class="fas fa-info me-2"></i> Info
                                        </x-button>
                                    </x-slot>
                                </x-dropdown>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="border-1 my-3"></div>

        <div>

        </div>

    </div>
</div>
