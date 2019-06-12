@extends('layouts.admin')
@section('header')

@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Thêm học sinh</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Admin</a>
            </li>
            <li class="active">
                <strong>Thêm học sinh</strong>
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
                        <h5>Thêm mới học sinh</h5>
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
                        <form method="POST" class="form-horizontal" action="/add-student/new" enctype="multipart/form-data">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                            <div class="form-group"><label class="col-sm-2 control-label">Tên học sinh</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="nameStudent" required></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">Giới tính <br>
                                </label>
                                <div class="col-sm-10">
                                    <label> <input type="radio"  value="male" id="optionsRadios1" name="optionsRadios">Nam</label>
                                    <label> <input type="radio" value="female" id="optionsRadios2" name="optionsRadios">Nữ</label>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Ngày sinh</label>
                                <div class="col-sm-10"><input type="date" class="form-control" name="dob"required></div>
                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group"><label class="col-sm-2 control-label">Địa chỉ</label>
                                <div class="col-sm-10"><input type="text" class="form-control" name="address"required></div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary pull-right">Thêm</button>
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
