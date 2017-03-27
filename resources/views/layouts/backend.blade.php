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
            <i class="ion-social-buffer"></i>
            <span class="nav-label">Velonic</span>
        </a>
    </div>
    <!-- / brand -->
    <!-- Navbar Start -->
    <nav class="navigation">
        <ul class="list-unstyled">
            <li class="active"><a href="index.html"><i class="ion-home"></i> <span
                            class="nav-label">Dashboard</span></a></li>
            <li class="has-submenu"><a href="#"><i class="ion-android-apps"></i> <span
                            class="nav-label">UI Elements</span></a>
                <ul class="list-unstyled">
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="panels.html">Panels</a></li>
                    <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="bootstrap-ui.html">BS Elements</a></li>
                    <li><a href="progressbars.html">Progress Bars</a></li>
                    <li><a href="notification.html">Notification</a></li>
                    <li><a href="sweet-alert.html">Sweet-Alert</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="ion-settings"></i> <span
                            class="nav-label">Components</span><span class="badge bg-success">New</span></a>
                <ul class="list-unstyled">
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="portlets.html">Portlets</a></li>
                    <li><a href="widgets.html">Widgets</a></li>
                    <li><a href="nestable-list.html">Nesteble</a></li>
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="ui-sliders.html">Range Slider</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="ion-compose"></i> <span class="nav-label">Forms</span></a>
                <ul class="list-unstyled">
                    <li><a href="form-elements.html">General Elements</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="form-advanced.html">Advanced Form</a></li>
                    <li><a href="form-wizard.html">Form Wizard</a></li>
                    <li><a href="form-editor.html">WYSIWYG Editor</a></li>
                    <li><a href="code-editor.html">Code Editors</a></li>
                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                    <li><a href="image-crop.html">Image Crop</a></li>
                    <li><a href="form-xeditable.html">X-Editable</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Data Tables</span></a>
                <ul class="list-unstyled">
                    <li><a href="tables.html">Basic Tables</a></li>
                    <li><a href="table-datatable.html">Data Table</a></li>
                    <li><a href="tables-editable.html">Editable Table</a></li>
                    <li><a href="responsive-table.html">Responsive Table</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="ion-stats-bars"></i> <span
                            class="nav-label">Charts</span><span class="badge bg-purple">1</span></a>
                <ul class="list-unstyled">
                    <li><a href="morris-chart.html">Morris Chart</a></li>
                    <li><a href="chartjs.html">Chartjs</a></li>
                    <li><a href="flot-chart.html">Flot Chart</a></li>
                    <li><a href="rickshaw-chart.html">Rickshaw Chart</a></li>
                    <li><a href="peity-chart.html">Peity Chart</a></li>
                    <li><a href="c3-chart.html">C3 Chart</a></li>
                    <li><a href="other-chart.html">Other Chart</a></li>
                </ul>
            </li>

            <li class="has-submenu"><a href="#"><i class="ion-email"></i> <span class="nav-label">Mail</span></a>
                <ul class="list-unstyled">
                    <li><a href="inbox.html">Inbox</a></li>
                    <li><a href="email-compose.html">Compose Mail</a></li>
                    <li><a href="email-read.html">View Mail</a></li>
                    <li><a href="email-templates.html">Email Templates</a></li>
                </ul>
            </li>

            <li class="has-submenu"><a href="#"><i class="ion-location"></i> <span class="nav-label">Maps</span></a>
                <ul class="list-unstyled">
                    <li><a href="gmap.html"> Google Map</a></li>
                    <li><a href="vector-map.html"> Vector Map</a></li>
                </ul>
            </li>
            <li class="has-submenu"><a href="#"><i class="ion-document"></i> <span class="nav-label">Pages</span><span
                            class="badge bg-pink">5</span></a>
                <ul class="list-unstyled">
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="contact.html">Contact-list</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="recoverpw.html">Recover Password</a></li>
                    <li><a href="lock-screen.html">Lock Screen</a></li>
                    <li><a href="blank.html">Blank Page</a></li>
                    <li><a href="404.html">404 Error</a></li>
                    <li><a href="404_alt.html">404 alt</a></li>
                    <li><a href="500.html">500 Error</a></li>
                </ul>
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
        <nav class=" navbar-default" role="navigation">
            <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">English <span class="caret"></span></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">German</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">Italian</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Right navbar -->
            <ul class="nav navbar-nav navbar-right top-menu top-right-menu">
                <!-- mesages -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o "></i>
                        <span class="badge badge-sm up bg-purple count">4</span>
                    </a>
                    <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                        <li>
                            <p>Messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><img src="{{asset('themes/backend/img/avatar-2.jpg')}}"
                                                             class="img-circle thumb-sm m-r-15" alt="img"></span>
                                <span class="block"><strong>John smith</strong></span>
                                <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><img src="{{asset('themes/backend/img/avatar-3.jpg')}}"
                                                             class="img-circle thumb-sm m-r-15" alt="img"></span>
                                <span class="block"><strong>John smith</strong></span>
                                <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><img src="{{asset('themes/backend/img/avatar-4.jpg')}}"
                                                             class="img-circle thumb-sm m-r-15" alt="img"></span>
                                <span class="block"><strong>John smith</strong></span>
                                <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <p><a href="inbox.html" class="text-right">See all Messages</a></p>
                        </li>
                    </ul>
                </li>
                <!-- /messages -->
                <!-- Notification -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge badge-sm up bg-pink count">3</span>
                    </a>
                    <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                        <li class="noti-header">
                            <p>Notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                            </a>
                        </li>

                        <li>
                            <p><a href="#" class="text-right">See all notifications</a></p>
                        </li>
                    </ul>
                </li>
                <!-- /Notification -->

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
                            <li><a href="profile.html"><i class="fa fa-briefcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="fa fa-bell"></i> Friends <span
                                            class="label label-info pull-right mail-info">5</span></a></li>
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
                <!-- user login dropdown end -->
            </ul>
            <!-- End right navbar -->
        </nav>

    </header>
    <!-- Header Ends -->
    <!-- Page Content Start -->
    <!-- ================== -->

    <div class="wraper container-fluid">
        <div class="page-title">
            <h3 class="title">Blank Page</h3>
        </div>
        <div class="row">
            <div class="panel panel-purple">
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Company</th>
                            <th>Last Trade</th>
                            <th>Trade Time</th>
                            <th>Change</th>
                            <th>Prev Close</th>
                            <th>Open</th>
                            <th>Bid</th>
                            <th>Ask</th>
                            <th>1y Target Est</th>
                            <th>Lorem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                            <td>597.74</td>
                            <td>12:12PM</td>
                            <td>14.81 (2.54%)</td>
                            <td>582.93</td>
                            <td>597.95</td>
                            <td>597.73 x 100</td>
                            <td>597.91 x 300</td>
                            <td>731.10</td>
                            <td>Spanning cell</td>
                        </tr>
                        <tr>
                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                            <td>597.74</td>
                            <td>12:12PM</td>
                            <td>14.81 (2.54%)</td>
                            <td>582.93</td>
                            <td>597.95</td>
                            <td>597.73 x 100</td>
                            <td>597.91 x 300</td>
                            <td>731.10</td>
                            <td>Spanning cell</td>
                        </tr>
                        <tr>
                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                            <td>597.74</td>
                            <td>12:12PM</td>
                            <td>14.81 (2.54%)</td>
                            <td>582.93</td>
                            <td>597.95</td>
                            <td>597.73 x 100</td>
                            <td>597.91 x 300</td>
                            <td>731.10</td>
                            <td>Spanning cell</td>
                        </tr>
                        <tr>
                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                            <td>597.74</td>
                            <td>12:12PM</td>
                            <td>14.81 (2.54%)</td>
                            <td>582.93</td>
                            <td>597.95</td>
                            <td>597.73 x 100</td>
                            <td>597.91 x 300</td>
                            <td>731.10</td>
                            <td>Spanning cell</td>
                        </tr>
                        <tr>
                            <th>GOOG <span class="co-name">Google Inc.</span></th>
                            <td>597.74</td>
                            <td>12:12PM</td>
                            <td>14.81 (2.54%)</td>
                            <td>582.93</td>
                            <td>597.95</td>
                            <td>597.73 x 100</td>
                            <td>597.91 x 300</td>
                            <td>731.10</td>
                            <td>Spanning cell</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


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