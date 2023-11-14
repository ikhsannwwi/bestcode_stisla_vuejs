<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ template_stisla('modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ template_stisla('modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ template_stisla('modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ template_stisla('modules/weather-icon/css/weather-icons.min.css') }}">
    <link rel="stylesheet"
        href="{{ template_stisla('modules/weather-icon/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ template_stisla('modules/summernote/summernote-bs4.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ template_stisla('css/style.css') }}">
    <link rel="stylesheet" href="{{ template_stisla('css/components.css') }}">

    @stack('css')
    
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('admin.layouts.nav')
            
            @include('admin.layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
            
            @include('admin.layouts.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ template_stisla('modules/jquery.min.js') }}"></script>
    <script src="{{ template_stisla('modules/popper.js') }}"></script>
    <script src="{{ template_stisla('modules/tooltip.js') }}"></script>
    <script src="{{ template_stisla('modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ template_stisla('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ template_stisla('modules/moment.min.js') }}"></script>
    <script src="{{ template_stisla('js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ template_stisla('modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ template_stisla('modules/chart.min.js') }}"></script>
    <script src="{{ template_stisla('modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ template_stisla('modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ template_stisla('modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ template_stisla('modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ template_stisla('js/page/index-0.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ template_stisla('js/scripts.js') }}"></script>
    <script src="{{ template_stisla('js/custom.js') }}"></script>

    @stack('js')
</body>

</html>
