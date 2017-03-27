<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('themes/backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/backend/css/bootstrap-reset.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/backend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/backend/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/backend/css/helper.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset('themes/backend/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('themes/backend/js/respond.min.js') }}"></script>
    <![endif]-->
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="login">
<div class="wrapper-page animated fadeInDown">
    <div class="panel panel-color panel-primary">
        <div class="panel-heading">
            <h3 class="text-center m-t-10"><strong>Bio</strong>CMS</h3>
        </div>
        <div class="panel-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('themes/backend/js/jquery.min.js') }}"></script>
<script src="{{ asset('themes/backend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('themes/backend/js/pace.min.js') }}"></script>
<script src="{{ asset('themes/backend/js/modernizr.min.js') }}"></script>
<script src="{{ asset('themes/backend/js/wow.min.js') }}"></script>
<script src="{{ asset('themes/backend/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('themes/backend/js/app.js') }}"></script>
</body>
</html>
