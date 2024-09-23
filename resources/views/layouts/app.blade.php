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

    <link rel="stylesheet" href="{{ asset('fs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('dist/css/main_style.css') }}"> --}}
    <!-- Styles -->

    @livewireStyles

</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed text-sm bg_brand_gray">


    {{-- spinner --}}
    <x-spinner></x-spinner>
    {{-- spinner --}}

    @auth
        <div class="wrapper">

            {{-- aside  --}}
            @include('layouts.partial.asside')
            {{-- aside  --}}

            {{-- nav --}}
            @include('layouts.partial.nav')
            <!-- /.navbar -->

            {{-- wrapper div --}}
            <div class="content-wrapper bg_brand_gray">

                {{-- <div class="px-3 py-2 font-bold text-info">
                    @env('local')
                    <i class="fas fa-bell me-2"></i> Your are in Local Development.
                    @endenv
                </div> --}}

                {{-- page title --}}
                {{-- @hasSection('page-title')
                    <div class="page_title bg-light text_black px-3 pt-3 pb-0 fw-bold">
                        @yield('page-title')
                    </div>
                @endif --}}
                {{-- page title --}}

                {{-- breadcrumb --}}
                {{-- @hasSection('breadcrumb')
                    <div class="breadcrumb pt-0 bg-light border-0">
                        <x-nav-link class="breadcrumb-item p-0" href="{{ URL::to('/') }}">
                            <i class="fas fa-home me-2"></i> Dash
                        </x-nav-link>
                        @yield('breadcrumb')
                    </div>
                @endif --}}
                {{-- breadcrumb --}}

                {{-- page nav --}}
                {{-- @hasSection('page-nav')
                    <div class="bg_brand_lightgray text_black">
                        <div class="inline-flex">
                            @yield('page-nav')
                        </div>
                    </div>
                @endif --}}
                {{-- page nav --}}

                {{-- content --}}
                <div>

                    {{ $slot }}

                </div>
                {{--  content --}}

            </div>
            {{-- wrapper div --}}

        </div>
        {{-- content wrapper --}}
    @else
        @yield('content')
    @endauth




    <script src="{{ asset('fs.min.js') }}"></script>

    {{-- <script src="{{ asset('dist/js/jquery.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('dist/js/adminlte.min.js') }}"></script> --}}
    <script src="{{ asset('dist/js/main_script.js') }}"></script>
    @stack('script')
    @livewireScripts
</body>

</html>
