<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>
        Emuna
    </title>

    <link rel="stylesheet" href="{{ asset('assets/client/css/fontawesome.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="{{ asset('assets/client/css/tagify.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/client/css/jquery-ui.css') }}" rel="stylesheet">


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/dashboard/images/logo-c.png') }}" />
    <!-- Pignose Calender -->
    <link href="{{ asset('assets/dashboard/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet" />
    <!-- Custom Stylesheet -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <link href="{{ asset('assets/dashboard/css/style.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/client/css/dashboard.css') }}" rel="stylesheet" />
</head>

<body>
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <span class="brand-title">
                        <img src="{{ asset('assets/client/images/logo.png') }}" alt="" />
                    </span>
                </a>
            </div>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="fas fa-angle-double-left"></i></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('dashboard.layout.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('dashboard.layout.navbar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('assets/dashboard/plugins/common/common.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/dashboard/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/settings.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/gleek.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/styleSwitcher.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/vc9y1hw2e4ll30xels1zg8fnbz0zp643mw1e8q55igd818h1/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="{{ asset('assets/dashboard/js/dashboard/dashboard-1.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="{{ asset('assets/dashboard/js/small-nav-click.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/add-chart.js') }}"></script>

    <script src="{{ asset('assets/dashboard/js/app.js') }}"></script>

    @yield('script')

</body>

</html>
