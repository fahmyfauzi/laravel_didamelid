<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>


<body data-anm=".anm">

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->


        <header class="main-header header-style-four -type-16">
            <!--Navbar -->

            @include('layouts.navbar')

            <!--End Navbar -->
        </header>
        @if( Request::is('job*') )
        <span class="header-span"></span>
        <header class="main-header header-style-four -type-16">
            <!--Navbar -->
            @include('layouts.navbar')
            <!--End Navbar -->
        </header>
        @endif
        <!--End Main Header -->

        <!-- content -->
        @yield('content')
        <!--End content -->

        <!-- Main Footer -->
        @include('layouts.footer')
        <!-- End Main Footer -->


    </div><!-- End Page Wrapper -->


    <script src=" js/jquery.js">
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/chosen.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.modal.min.js"></script>
    <script src="js/mmenu.polyfills.js"></script>
    <script src="js/mmenu.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/anm.min.js"></script>
    <script src="js/ScrollMagic.min.js"></script>
    <script src="js/rellax.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/script.js"></script>

</body>

</html>