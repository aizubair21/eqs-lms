<aside class=" main-sidebar  mt-1 shadow-none relative">

    <div id="sidebar-close-btn" class=" d-none absolute right-0 top-0 p-2  text-red m-1" onclick="pushmenu()">
        <i class="far fa-times-circle"></i>
    </div>

    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" wire:navigate class="brand-link" class="margin: 0 auto">
        <img src="{{ asset('media/studysync-hub.jpg') }}" alt="Brand Logo" class="brand-image img-circle block"
            style="opacity: .8">
        <p class="brand-text font-weight-light">StudySync-hub</p>
    </a>

    {{-- sidebar --}}
    <div class="sidebar p-0">

        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" wire:navigate ="" class="d-block">{{ Auth::user()->name ?? '' }}</a>
            </div>
        </div> --}}


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                {{-- dashboard --}}
                <x-lms.nav-item directRoute="dashboard" route="dashboard" title="Dashboard"
                    icon="fas fa-tachometer-alt"></x-lms.nav-item>
                {{-- <li class="nav-item">
                    <a href="" wire:navigate @class([
                        'nav-link',
                        'bordere border-info' => request()->routeIs('dashboard'),
                    ])>
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li> --}}


                {{-- member management --}}
                <x-lms.nav-item route="instructorUsers.*" title="User" icon="fas fa-user">
                    <x-lms.nav-link content="All" route="instructorUsers.index"></x-lms.nav-link>
                    <x-lms.nav-link content="Create" route="instructorUsers.create"></x-lms.nav-link>
                </x-lms.nav-item>


                {{-- course management --}}
                <x-lms.nav-item route="instructorCourse.*" title="Courses" icon="fas fa-list">
                    <x-lms.nav-link content="All" route="instructorCourse.index"></x-lms.nav-link>
                    <x-lms.nav-link content="Create" route="instructorCourse.create"></x-lms.nav-link>
                </x-lms.nav-item>

                {{-- settings --}}
                <x-lms.nav-item route="" title="Settings" icon="fas fa-wheel">
                    <x-lms.nav-link route="" content="Site"></x-lms.nav-link>
                    <x-lms.nav-link route="" content="Global"></x-lms.nav-link>
                    <x-lms.nav-link route="" content="Header"></x-lms.nav-link>
                    <x-lms.nav-link route="" content="Footer"></x-lms.nav-link>
                    <x-lms.nav-link route="" content="SEO"></x-lms.nav-link>
                </x-lms.nav-item>

                {{-- test and debug --}}
                <x-lms.nav-item route="text.*" title="Test" icon="fas fa-bell">
                    <x-lms.nav-link content="Blade Test" route="test.blade"></x-lms.nav-link>
                </x-lms.nav-item>





            </ul>
        </nav>
        <!-- /.sidebar-menu -->

        {{-- <section id="asside_nav" class="mt-2">
            <div x-data="{ isShow: false }">

                <div class="d-flex justify-content-start align-items-center nav_item w-full px-3 py-2">
                    <div class="w-3 h-3 rounded-full bg_dark me-2"></div>
                    <div class="d-flex justify-content-between align-items-center w-full">
                        <p class="m-0 ">
                            Users
                        </p>
                        <i class="right fas fa-angle-right"></i>
                    </div>
                </div>

                <div class="nav_content">
                    <a href="" wire:navigate class=" border-start border-light p-2">
                        All Users
                    </a>
                </div>

            </div>
        </section> --}}

    </div>

</aside>
