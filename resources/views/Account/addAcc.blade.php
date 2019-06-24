@extends('layouts.admin')
@section('header')

@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Thêm tài khoản</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Admin</a>
            </li>
            <li class="active">
                <strong>Thêm tài khoản</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">


            <div class="ibox float-e-margins">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Thêm mới một tài khoản cho cán bộ</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="POST" action="/add-account/newAcc" enctype="multipart/form-data" class="form-horizontal">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                            <div class="form-group"><label class="col-sm-2 control-label">Tên cán bộ</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="name_teacher" required></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Giới tính <br>
                                </label>
                                <div class="col-sm-10">
                                    <label> <input type="radio"  value="male" id="optionsRadios1" name="optionsRadios" required>Nam</label>
                                    <label> <input type="radio" value="female" id="optionsRadios2" name="optionsRadios" required>Nữ</label>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Ngày sinh</label>
                                <div class="col-sm-10"><input type="date" class="form-control" required name="dob"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">Địa chỉ</label>
                                <div class="col-sm-10"><input type="text" class="form-control" required name="address"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Số điện thoại liên lạc</label>
                                <div class="col-sm-10"><input type="text" class="form-control" required name="phone"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10"><input type="email" class="form-control" required name="email"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Role</label>

                                <div class="col-sm-10">
                                    <select data-placeholder="Choose a role..." name="select_role" class="chosen-select" style="display: none;">
                                        @foreach($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name_roles}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">Tên tài khoản</label>
                                <div class="col-sm-10"><input type="text" class="form-control" required name="username"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Mật khẩu</label>
                                <div class="col-sm-10"><input type="password" class="form-control" required name="password"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary pull-right">Khởi tạo</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>




            </div>
        </div>
    </div>
    @endsection

    @section('script')

    @endsection
