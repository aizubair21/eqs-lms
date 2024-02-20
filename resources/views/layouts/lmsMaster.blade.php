<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{  Config::get('settings.name') }} | {{  Config::get('settings.description') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='icon' href='/favicon.ico' type='image/x-icon' >

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>
<body class="hold-transition sidebar-mini">

    <div class="wrapper " id="app">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link ">
                        <i class="nav-icon fas fa-home"></i> {{ __('Home') }}
                    </a>
                </li>

                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link  {{ is_active('stream') }}">
                        <i class="nav-icon fas fa-play"></i>
                        {{ __('Stream') }}
                        <span class="right badge badge-danger">New</span>
                    </a>
                </li> --}}
            </ul>

            <!-- SEARCH FORM -->
            {{-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> --}}


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name ?? "" }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item has-treeview ">
                            <a href="" class="nav-link ">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    {{ __('Home') }}
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="" class="nav-link  {{ is_active('stream') }}">
                                <i class="nav-icon fas fa-play"></i>
                                <p>
                                    {{ __('Stream') }}
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li> --}}
                        @can('view_admin')
                            <li class="nav-header">@lang('menus.administration')</li>
                            <li class="nav-item">
                                {{-- <a href="{{ route('roles.index') }}" class="nav-link"> --}}
                                    <i class="nav-icon fas fa-lock"></i>
                                    <p>
                                        @lang('roles.roles')
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                {{-- <a href="{{ route('courses.index') }}" class="nav-link"> --}}
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        @lang('course/fields.courses')
                                    </p>
                                </a>
                            </li>
                        @endcan
                        <li class="nav-header"></li>

                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-power-off red"></i>
                                <p>
                                    {{ __('Logout') }}
                                </p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- ./wrapper -->

@livewireScripts
</body>
</html>
