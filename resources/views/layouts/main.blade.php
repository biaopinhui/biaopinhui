<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">

        <title>@yield('title') - 标品汇</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{ env('BPH_CDN') }}assets/css/bootstrap.min.css">
        
        <!-- Customizable CSS -->
        <link rel="stylesheet" href="{{ env('BPH_CDN') }}assets/css/main.css">
        <link rel="stylesheet" href="{{ env('BPH_CDN') }}assets/css/green.css">
        <link rel="stylesheet" href="{{ env('BPH_CDN') }}assets/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ env('BPH_CDN') }}assets/css/owl.transitions.css">
        <link rel="stylesheet" href="{{ env('BPH_CDN') }}assets/css/animate.min.css">

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
        
        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="{{ env('BPH_CDN') }}assets/css/font-awesome.min.css">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
    
    <div class="wrapper">

        @include('partials.navigation.top-menu-bar')

        @include('partials.section.header')

        @yield('content')

        @include('partials.section.footer')

    </div><!-- /.wrapper -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="{{ env('BPH_CDN') }}assets/js/jquery-1.10.2.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/bootstrap.min.js"></script>
    <!-- <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script> -->
    <script src="{{ env('BPH_CDN') }}assets/js/gmap3.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/owl.carousel.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/css_browser_selector.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/echo.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/jquery.easing-1.3.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/bootstrap-slider.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/jquery.raty.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/jquery.customSelect.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/wow.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/scripts.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/bph.js"></script>

    <!-- <script src="http://w.sharethis.com/button/buttons.js"></script> -->

</body>
</html>