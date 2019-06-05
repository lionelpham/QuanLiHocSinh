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
    <link href="{{ asset('frontend/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('frontend/css/plugins/summernote/summernote.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('frontend/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="{{ asset('frontend/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('homepage/imgs/index.png') }}" />

    <style>
        .note-editor {
            margin-top: 10px;
        }

        label {
            margin-top: 5px !important;
            margin-bottom: 10px !important;
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
                    <li class="{{($url == 'create-role' || $url == 'list-role' || $url == 'set-role' || $url == '') ? 'active' : ''}}">
                        <a href="/create-role"><i class="fa fa-star"></i> <span class="nav-label">Quản lí Role</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{($url == 'create-role' || $url == '') ? 'active' : ''}}"><a href="/create-role">Thêm Role</a></li>
                            <!-- <li class="{{($url == 'set-role' || $url == '') ? 'active' : ''}}"><a href="/set-role">Set Role</a></li> -->
                            <li class="{{($url == 'list-role' || $url == '') ? 'active' : ''}}">
                                <a href="/list-role">Danh sách Role</a></li>
                        </ul>
                    </li>
                    <li class="{{($url == 'add-student' || $url == 'list-student' || $url == '' || $url == '') ? 'active' : ''}}">
                        <a href="/"><i class="fa fa-user-secret"></i> <span class="nav-label">Quản lí Học sinh</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{($url == 'add-student' || $url == '') ? 'active' : ''}}"><a href="/add-student">Thêm học sinh</a></li>
                            <li class="{{($url == 'list-student' || $url == '') ? 'active' : ''}}">
                                <a href="/list-student">Danh sách Học sinh</a></li>
                        </ul>
                    </li>
                    <li class="{{($url == 'add-class' || $url == 'list-class' || $url == '' || $url == '') ? 'active' : ''}}">
                        <a href="/"><i class="fa fa-address-book"></i> <span class="nav-label">Quản lí Lớp</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{($url == 'add-class' || $url == '') ? 'active' : ''}}"><a href="/add-class">Thêm Lớp</a></li>
                            <li class="{{($url == 'list-class' || $url == '') ? 'active' : ''}}">
                                <a href="/list-class">Danh sách Lớp</a></li>
                        </ul>
                    </li>
                    <li class="{{($url == 'add-subject' || $url == 'list-subject' || $url == '' || $url == '') ? 'active' : ''}}">
                        <a href="/"><i class="fa fa-file"></i> <span class="nav-label">Quản lí Môn học</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{($url == 'add-subject' || $url == '') ? 'active' : ''}}"><a href="/add-subject">Thêm Môn học</a></li>
                            <li class="{{($url == 'list-subject' || $url == '') ? 'active' : ''}}">
                                <a href="/list-subject">Danh sách Môn học</a></li>
                        </ul>
                    </li>
                    <li class="{{($url == 'add-account' || $url == 'list-account') ? 'active' : ''}}">
                        <a href="/"><i class="fa fa-user"></i> <span class="nav-label">Quản lí Cán bộ</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{($url == 'add-account') ? 'active' : ''}}"><a href="/add-account">Thêm cán bộ</a></li>
                            <li class="{{($url == 'list-account') ? 'active' : ''}}">
                                <a href="/list-account">Danh sách cán bộ</a></li>
                        </ul>
                    </li>
                    <li class="{{($url == 'add-semester' || $url == 'list-semester' || $url == '' || $url == '') ? 'active' : ''}}">
                        <a href="/"><i class="fa fa-snowflake-o"></i> <span class="nav-label">Quản lí Học kì</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{($url == 'add-semester' || $url == '') ? 'active' : ''}}"><a href="/add-semester">Thêm học kì</a></li>
                            <li class="{{($url == 'list-semester' || $url == '') ? 'active' : ''}}">
                                <a href="/list-semester">Danh sách Học kì</a></li>
                        </ul>
                    </li>
                    <li class="{{($url == 'add-grade' || $url == 'list-grade' || $url == '' || $url == '') ? 'active' : ''}}">
                        <a href="/"><i class="fa fa-book"></i> <span class="nav-label">Quản lí Khối</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{($url == 'add-grade' || $url == '') ? 'active' : ''}}"><a href="/add-grade">Thêm Khối</a></li>
                            <li class="{{($url == 'list-grade' || $url == '') ? 'active' : ''}}">
                                <a href="/list-grade">Danh sách Khối</a></li>
                        </ul>
                    </li>
                    <li class="{{($url == 'update-profile' || $url == 'update-account' || $url == '' || $url == '') ? 'active' : ''}}">
                        <a href="/update-profile"><i class="fa fa-edit"></i> <span class="nav-label">Cập nhật thông tin</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{($url == 'update-profile') ? 'active' : ''}}"><a href="/update-profile">Cập nhật thông tin cá nhân</a></li>
                            <li class="{{($url == 'update-account') ? 'active' : ''}}">
                                <a href="/update-account">Cập nhật tài khoản</a></li>
                        </ul>
                    </li>
                    <!-- <li class="{{($url == 'add-super-user' || $url == 'list-super-user' || $url == '' || $url == '') ? 'active' : ''}}">
                        <a href="/"><i class="fa fa-address-card"></i> <span class="nav-label">Quản lí Cán Bộ</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{($url == 'add-super-user' || $url == '') ? 'active' : ''}}"><a href="/add-super-user">Thêm Cán Bộ</a></li>
                            <li class="{{($url == 'list-super-user' || $url == '') ? 'active' : ''}}">
                                <a href="/list-super-user">Danh sách Cán Bộ</a></li>
                        </ul>
                    </li> -->

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
    <script src="{{ asset('frontend/js/plugins/summernote/summernote.min.js')}}"></script>
    <script src="{{ asset('frontend/js/custom-link.js')}}"></script>
    <script src="{{ asset('frontend/js/custom-summernote.js')}}"></script>

    <!-- Chosen -->
    <script src="{{ asset('frontend/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins/chosen/chosen.jquery.js') }}"></script>
    <!-- btn-delete -->
    <script src="{{ asset('frontend/js/custom-link.js')}}"></script>
    <script src="{{ asset('frontend/js/plugins/sweetalert/sweetalert.min.js') }}"></script>

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
                toastr.success('{{session('
                    success_message ')}}', 'Admin');
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
                toastr.error('{{session('
                    danger_message ')}}', 'Admin');
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
                toastr.warning('{{session('
                    warning_message ')}}', 'Admin');
            }, 300);
            @endif
        });
    </script>
</body>

</html>