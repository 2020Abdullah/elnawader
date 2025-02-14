<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('page-title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
        
        <!-- swiper library js -->
        <link rel="stylesheet" href="{{ asset('fronted/css/swiper.css') }}" />

        <!-- fontasome  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('fronted/css/bootstrap.rtl.min.css') }}" />

        <!-- mystyle -->
        <link rel="stylesheet" href="{{ asset('fronted/css/style.css') }}" />

    </head>
    <body>
        <!-- header section -->
        <x-Header-section />

        <!-- footer section -->
        <x-Footer-section />
        
        <!-- All scripts -->
        <script src="{{ asset('fronted/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('fronted/js/swiper.js') }}"></script>
        <script src="{{ asset('fronted/js/scripts.js') }}"></script>
    </body>
</html>
