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

        
        {{-- 
            # this section is only for authenticate  user.  
            # with this section  you can hide some components or pages from unauthenticated users.
            # components are authorized with the help of laravel-permission.
        --}}
        @auth
            {{-- if authorize for administrator tasks             --}}
            {{-- @role('administrator') --}}
            <div class="wrapper">
            
                @yield('content')
                
            </div>
            




            {{-- if loged user authorize for instractor tasks --}}
            <div class="wrapper">
                
                @yield('content')
                
            </div>




            {{-- if loged user authorize for student tasks --}}
            <div class="wrapper">
            
                @yield('content')
                
            </div>
        @endauth

        @guest
        <div class="wrapper">
            
            @yield('content')
            
        </div>
        @endguest
       

        @livewireScripts
        @stack('script')
    </body>
</html>
