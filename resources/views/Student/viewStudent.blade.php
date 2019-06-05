@extends('layouts.admin')
@section('header')

@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Học sinh</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Admin</a>
            </li>
            <li>
                <a href="/list-student">Danh sách học sinh</a>
            </li>
            <li class="active">
                <strong>Học sinh: IDSTUDENT</strong>
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
                        <h5>Thông tin học sinh</h5>
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
                        <form method="get" class="form-horizontal">
                            <div class="form-group"><label class="col-sm-2 control-label">Tên học sinh</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label">Giới tính <br>
                                </label>

                                <div class="col-sm-10">
                                    <label> <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">Nam</label>
                                    <label> <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">Nữ</label>
                                </div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Ngày sinh</label>

                                <div class="col-sm-10"><input type="date" class="form-control"></div>
                            </div>



                            <div class="hr-line-dashed"></div>

                            <div class="form-group"><label class="col-sm-2 control-label">Địa chỉ</label>
                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary pull-right">Cập nhật</button>
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