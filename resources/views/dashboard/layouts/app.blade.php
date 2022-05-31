<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard</title>

    <!-- Stylesheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">



    <link rel="shortcut icon" href="{{ asset('images/title-didamelid.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/title-didamelid.png') }}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    {{-- trix --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body>
    <div class="page-wrapper dashboard ">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Header Span -->
        <span class="header-span"></span>

        <!-- Main Header-->
        @include('dashboard.layouts.navbar')
        <!--End Main Header -->

        <!-- Sidebar Backdrop -->
        <div class="sidebar-backdrop"></div>

        <!-- User Sidebar -->
        @include('dashboard.layouts.sidebar')
        <!-- End User Sidebar -->

        <!-- Dashboard -->
        @yield('content')
        <!-- End Dashboard -->

        <!-- Copyright -->
        <div class="copyright-text">
            &copy;
            <?php echo date('Y') ?> didamel.id All Right Reserved.
        </div>

    </div><!-- End Page Wrapper -->


    <script src="{{ asset( 'js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/chosen.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/jquery.modal.min.js') }}"></script>
    <script src="{{ asset('js/mmenu.polyfills.js') }}"></script>
    <script src="{{ asset('js/mmenu.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/anm.min.js') }}"></script>
    <script src="{{ asset('js/ScrollMagic.min.js') }}"></script>
    <script src="{{ asset('js/rellax.min.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyDaaCBm4FEmgKs5cfVrh3JYue3Chj1kJMw&#038;ver=5.2.4">
    </script>
    <script src="{{ asset('js/map-script.js') }}"></script>
    <!--End Google Map APi-->

    {{-- js --}}
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>