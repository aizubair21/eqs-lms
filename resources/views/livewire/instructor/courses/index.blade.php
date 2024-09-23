<div>
    @section('page-title')
        Courses
    @endsection

    {{-- @section('page-nav')
        <x-page-nav-item href="/" class='page_nav_active'>Active </x-page-nav-item>
        <x-page-nav-item href="/" class=''>Draft </x-page-nav-item>
        <x-page-nav-item href="/" class=''>Trash </x-page-nav-item>
    @endsection --}}


    <section class=" p-2 ">
        <h6 class="mb-3 test_black w-auto py-2 rounded flex align-items-center">


            {{-- <x-dropdown align="left" class=" mx-2">

                <x-slot name="trigger">
                    <button type="button" class="bg_dark px-3 py-2 rounded text_white ">
                        Running
                    </button>
                </x-slot>

                <x-slot name="content" class="px-1">
                    <x-dropdown-button type="button" class="my-1 bg_dark w-50 text_white mx-1">
                        <i class="fas fa-tasks me-2"></i> All
                    </x-dropdown-button>
                    <x-dropdown-button type="button" class="bg_dark w-50 text_white mx-1">
                        <i class="fas fa-trash me-2"></i> Trash
                    </x-dropdown-button>
                    <x-dropdown-button type="button" class="my-1 bg_dark w-50 text_white mx-1">
                        <i class="fas fa-info me-2"></i> Draft
                    </x-dropdown-button>
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
                            <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45"></div>
                        </td>
                        <td>20 Times</td>
                        <td>
                            <x-dropdown width="25" align="left">

                                <x-slot name="trigger">
                                    <button type="button" class="btn btn-sm dropdown-toggle">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content" class="px-1">
                                    <x-dropdown-button>
                                        <i class="fas fa-trash me-2"></i> Delete
                                    </x-dropdown-button>
                                    <x-dropdown-link
                                        href="{{ route('instructorCourse.edit', ['uid' => encrypt('2')]) }}">
                                        <i class="fas fa-info me-2"></i> Info
                                    </x-dropdown-link>
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
                            <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45"></div>
                        </td>
                        <td>20 Times</td>
                        <td>
                            <x-dropdown align="right" class="w-100">
                                <x-slot name="trigger">
                                    <button type="button" class="btn btn-sm dropdown-toggle">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content" class="px-1">
                                    <x-dropdown-button>
                                        <i class="fas fa-trash me-2"></i> Delete
                                    </x-dropdown-button>
                                    <x-dropdown-button>
                                        <i class="fas fa-info me-2"></i> Info
                                    </x-dropdown-button>
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
                            <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45 "></div>
                        </td>
                        <td>20 Times</td>
                        <td>

                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button type="button" class="btn btn-sm dropdown-toggle">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-button>
                                        <i class="fas fa-trash me-2"></i> Delete
                                    </x-dropdown-button>
                                    <x-dropdown-button>
                                        <i class="fas fa-info me-2"></i> Info
                                    </x-dropdown-button>
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
                            <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45 "></div>
                        </td>
                        <td>20 Times</td>
                        <td>
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button type="button" class="btn btn-sm dropdown-toggle">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content" class="px-1">
                                    <x-dropdown-button>
                                        <i class="fas fa-trash me-2"></i> Delete
                                    </x-dropdown-button>
                                    <x-dropdown-button>
                                        <i class="fas fa-info me-2"></i> Info
                                    </x-dropdown-button>
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
                            <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45 "></div>
                        </td>
                        <td>20 Times</td>
                        <td>
                            <x-dropdown>
                                <x-slot name="trigger">
                                    <button type="button" class="btn btn-sm dropdown-toggle">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content" class="px-1">
                                    <x-dropdown-button>
                                        <i class="fas fa-trash me-2"></i> Delete
                                    </x-dropdown-button>
                                    <x-dropdown-button>
                                        <i class="fas fa-info me-2"></i> Info
                                    </x-dropdown-button>
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
                            <div class="bg-green rounded px-2 py-1 text-white text-center w-25 h-45 "></div>
                        </td>
                        <td>20 Times</td>
                        <td>
                            <x-dropdown align="right" class="w-100">
                                <x-slot name="trigger">
                                    <button type="button" class="btn btn-sm dropdown-toggle">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                </x-slot>

                                <x-slot name="content" class="px-1">
                                    <x-dropdown-button>
                                        <i class="fas fa-trash me-2"></i> Delete
                                    </x-dropdown-button>
                                    <x-dropdown-button>
                                        <i class="fas fa-info me-2"></i> Info
                                    </x-dropdown-button>
                                </x-slot>
                            </x-dropdown>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </section>

</div>