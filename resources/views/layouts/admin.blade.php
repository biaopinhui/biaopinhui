<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>标品会</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ env('BPH_CDN') }}assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ env('BPH_CDN') }}assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ env('BPH_CDN') }}assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ env('BPH_CDN') }}assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ env('BPH_CDN') }}assets/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ env('BPH_CDN') }}assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('css')
</head>

<body>
    @if (session('status'))
    <div class="row">
        <div
            class="alert alert-{{ session('status.type') }} alert-dismissable col-md-6 col-md-offset-3"
            style="position: fixed; z-index: 1001;"
        >
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ session('status.message') }}
        </div>
    </div>
    @endif

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            @include('admin.header')
            @include('admin.side-menu')
        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ env('BPH_CDN') }}assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ env('BPH_CDN') }}assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ env('BPH_CDN') }}assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!--
    <script src="{{ env('BPH_CDN') }}assets/bower_components/raphael/raphael-min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/bower_components/morrisjs/morris.min.js"></script>
    <script src="{{ env('BPH_CDN') }}assets/js/morris-data.js"></script>
    -->

    <!-- Custom Theme JavaScript -->
    <script src="{{ env('BPH_CDN') }}assets/dist/js/sb-admin-2.js"></script>

    @yield('js')

</body>

</html>
