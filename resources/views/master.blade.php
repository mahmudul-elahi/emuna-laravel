<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/dashboard/images/logo-c.png') }}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/bootstrap.min.css') }}">
    <!-- Select2 CSS -->
    <link href="{{ asset('assets/client/css/select2.min.css') }}" rel="stylesheet" />
    <!-- Select2 Bootstrap Theme CSS -->
    <link href="{{ asset('assets/client/css/select2-bootstrap-5-theme.min.css') }}" rel="stylesheet" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/fontawesome.css') }}">
    <!-- Multistep -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/multistep.css') }}">
    <!-- DropImage -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/drop-image.css') }}">
    <!-- Common -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/common.css') }}">
    <!-- StyleSheet -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/style.css') }}">
    <!-- Responsive Sheet -->
    <link rel="stylesheet" href="{{ asset('assets/client/css/responsive.css') }}">
</head>

<body>

    {{-- Header-Section-Start --}}
    @include('layout.header')
    {{-- Header-Section-End --}}



    {{--  Navbar-Section-Start --}}
    @include('layout.navbar')
    {{-- Navbar-Section-End --}}



    {{--  Content-Section-Start --}}
    <main>
        @yield('content')
    </main>
    {{--  Content-Section-End --}}



    {{-- Footer-Section-End --}}
    @include('layout.footer')
    {{--   Footer-Section-End --}}


    {{--  Script-Section-Start --}}
    <script src="{{ asset('assets/client/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/ajax-request.js') }}"></script>
    <script src="{{ asset('assets/client/js/script.js') }}"></script>

    {{-- Script-Section-End --}}

</body>

</html>
