<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VT team| Admin Page</title>

    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('frontend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="https://miengthamthucpham.vn/homepage/img/logo.png" type="image/x-icon"/> -->
    <meta property="og:image" content="https://yt3.ggpht.com/a-/ACSszfG6SiS4096AdxOv4vjhBXJphsGQuBWBBwkLww=s900-mo-c-c0xffffffff-rj-k-no" />
    <meta property="og:image:secure_url" content="https://yt3.ggpht.com/a-/ACSszfG6SiS4096AdxOv4vjhBXJphsGQuBWBBwkLww=s900-mo-c-c0xffffffff-rj-k-no" />

    <link rel="icon" href="{{ asset('homepage/imgs/index.png') }}" />

    <style>

    .note-editor{
        margin-top:10px;
    }
    label{
        margin-top:5px !important;
        margin-bottom:10px !important;
    }
    </style>
    @yield('header')
</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <img alt="image" class="img-circle" src="{{ asset('frontend/img/user-profile.png') }}" style="width: 50px;" />
                            </span>
                            <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong></span>
                        </div>
                    </li>
                    <!-- menu -->
                    <li class="{{($url == 'admin-project' || $url == 'admin-project-edit' || $url == 'admin-project-list-edit' || $url == 'admin-project-list') ? 'active' : ''}}">
                        <a href="/admin-project"><i class="fa fa-edit"></i> <span class="nav-label">Quản lí dự án</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{($url == 'admin-project' || $url == 'admin-project-edit') ? 'active' : ''}}"><a href="/admin-project">Thêm dự án</a></li>
                            <li class="{{($url == 'admin-project-list' || $url == 'admin-project-list-edit') ? 'active' : ''}}">
                                <a href="/admin-project-list/">Danh sách dự án</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>

                </nav>
            </div>
            @yield('content')
            <div class="footer">
                <div>
                    <strong>Copyright</strong> <a href="">VT team</a> &copy; {{date('Y')}}
                </div>
            </div>
        </div>
    </div>


    <!-- Mainly scripts -->
    <script src="{{ asset('frontend/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('frontend/js/inspinia.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/pace/pace.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('frontend/js/plugins/toastr/toastr.min.js') }}"></script>

    @yield('script')
    <script>
        $(document).ready(function() {
            @if(session('success_message'))
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 2000
                };
                toastr.success('{{session('success_message')}}', 'Fanscom Admin');
            }, 300);
            @endif
            @if(session('danger_message'))
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 2000
                };
                toastr.error('{{session('danger_message')}}', 'Fanscom Admin');
            }, 300);
            @endif
            @if(session('warning_message'))
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 1200
                };
                toastr.warning('{{session('warning_message')}}', 'Fanscom Admin');
            }, 300);
            @endif
        });
    </script>
</body>

</html>
