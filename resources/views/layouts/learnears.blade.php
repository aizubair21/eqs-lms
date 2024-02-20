<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net"> --}}
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @stack('style')
        @livewireStyles
    </head>
    <body  class="hold-transition sidebar-mini layout-fixed text-sm">

        <div class="wrapper">
            {{-- NavBar --}}
                <div class="d-flex jusfity-content-between bg-light py-3 px-5 ">
                    <div>

                        <img src="" alt="Logo">
                    </div>

                    <div class="d-flex">
                        <a href="">Cart</a>
                        <img src="" alt="">
                    </div>
                </div>            
            {{-- SideBar --}}
            
            {{-- row start  --}}
            <div class="row m-0 p-5">
                <div class="col-lg-3">
                    {{-- Student sidebar Start --}}
                    @include('components.student.sidebar')
                    {{-- Student sidebar end --}}
                </div>
                <div class="col-lg-9 p-3 bg-light rounded">

                    @yield('content')
                </div>
            </div>
            {{-- row end  --}}

            
        </div>

        @livewireScripts
        @stack('script')
    </body>
</html>
