<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>InfyOm Generator</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
                <b>Laravel Jobs</b>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="data:image/png;base64,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"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="data:image/png;base64,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"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {!! Auth::user()->name !!}
                                        <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Sign out
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © khanh && huy .</strong> All rights reserved.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{!! url('/') !!}">
                    Laravel Generator
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    @yield('scripts')
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dc6388aa7da39a4"></script>
    
</body>
</html>