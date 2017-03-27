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
<body>
<!-- Aside Start-->
<aside class="left-panel">
    <!-- brand -->
    <div class="logo">
        <a href="index.html" class="logo-expanded">
            <i class="ion-ionic"></i>
            <span class="nav-label">VinPearl</span>
        </a>
    </div>
    <!-- / brand -->
    <!-- Navbar Start -->
    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="active"><a href="{{route('backend')}}"><i class="ion-home"></i> <span
                            class="nav-label">Bảng điều khiển</span></a></li>
            <li class="has-submenu">
                <a href="#">
                    <i class="ion-android-apps"></i>
                    <span class="nav-label">Tin tức</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="#">
                    <i class="ion-settings"></i>
                    <span class="nav-label">Câu chuyên khách hàng</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="#"><i class="ion-compose"></i>
                    <span class="nav-label">Dự án tiêu biểu</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="#">
                    <i class="ion-grid"></i>
                    <span class="nav-label">Câu hỏi thường gặp</span>
                </a>
            </li>
            <li class="has-submenu">
                <a href="#">
                    <i class="ion-stats-bars"></i>
                    <span class="nav-label">Video</span>
                </a>
            </li>

            <li class="has-submenu">
                <a href="#">
                    <i class="ion-email"></i>
                    <span class="nav-label">Quảng cáo</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
<section class="content">
    <header class="top-head container-fluid">
        <button type="button" class="navbar-toggle pull-left">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Left navbar -->
        <nav class="navbar-default" role="navigation">
            <!-- Right navbar -->
            <ul class="nav navbar-nav navbar-right top-menu top-right-menu">
                <!-- user login dropdown start-->
                <li class="dropdown text-center">
                    @if (Auth::guest())
                        <a href="{{ route('backend.login') }}">Login</a>
                    @else
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{asset('themes/backend/img/avatar-2.jpg')}}"
                                 class="img-circle profile-img thumb-sm">
                            <span class="username">{{ Auth::user()->name }}</span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003"
                            style="overflow: hidden; outline: none;">
                            <li>
                                <a href="{{ route('backend.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Thoát</a>
                            </li>
                            <form id="logout-form" action="{{ route('backend.logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    @endif
                </li>
            </ul>
        </nav>

    </header>

    <div class="wraper container-fluid">
        @yield('content')
    </div>
    <!-- Page Content Ends -->
    <!-- Footer Start -->
    <footer class="footer">
        2017@BioCMS
    </footer>
    <!-- Footer Ends -->
</section>

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