<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @stack('style')
        @livewireStyles
    </head>
    <body  class="hold-transition sidebar-mini layout-fixed text-sm">
        @auth 
            <div class="wrapper">
        
                <!-- Preloader -->
                {{-- <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
                </div> --}}
            
                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-white navbar-light navbar-fixed">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                        <a href="{{route('dashboard')}}" class="nav-link">Home</a>
                        </li>
                        {{-- <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                        </li> --}}
                    </ul>
            
                    <!-- Right navbar links -->
                    <ul class="navbar-nav ml-auto">
                    
                    
            
                        <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                        </li>
            
                        {{-- logout  --}}
                        <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn">
                            <i class="fas fa-sign-out"></i>
                            </button>
                        </form>
                        
                        </li>
                    </ul>
                </nav>
                <!-- /.navbar -->
            
                <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar user panel (optional) -->
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Admin</a>
                        </div>
                        </div>
                    
                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->
                            <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                User
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                <a href="{{route('adminUser.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Total User</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="{{ route('adminUser.create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Users</p>
                                </a>
                                </li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a href="{{ route('adminTeacher.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                Teacher or Institute Control
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            </li>
                            
                        </ul>
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
                </aside>
                    
                @yield('content')
                
                <!-- Control Sidebar -->
                {{-- <aside class="control-sidebar control-sidebar-dark"> --}}
                <!-- Control sidebar content goes here -->
                {{-- </aside> --}}
                <!-- /.control-sidebar -->
            </div>
            <!-- ./wrapper -->
        @endauth
        @guest
            <style>
                .spinner{
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    width: 100%;
                    height: 100vh;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    z-index: 99999;
                    background-color: lightgray;
                }
                .spin{
                    width: 50px;
                    height: 50px;
                    background-color: transparent;
                    border-style: solid;
                    border-width: 8px;
                    border-color: darkgray, darkgray, darkgray, transparent;
                    animation: spin  2s linear infinite;
                    /* border-radius: 50%; */
                }
                @keyframes spin {
                    100% {transform:rotate(360deg)}
                }
            </style>
            <div class="spinner">
                <div class="spin"></div>
            </div>
            @yield('content')
        @endguest
    
        @livewireScripts
        @stack('script')
    </body>
</html>
