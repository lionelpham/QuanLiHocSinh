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
            <li>
                <a href="/list-account">Danh sách tài khoản</a>
            </li>
            <li class="active">
                <strong>Chỉnh sửa tài khoản: IDACCOUNT</strong>
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
                        <h5>Chỉnh sửa</h5>
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
                            <div class="form-group"><label class="col-sm-2 control-label">Tên tài khoản</label>

                                <div class="col-sm-10"><input type="text" class="form-control"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-2 control-label">Mật khẩu</label>

                                <div class="col-sm-10"><input type="password" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Người dùng (optional)</label>

                                <div class="col-sm-10">
                                    <select data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" style="display: none;">
                                        <option value="">Chọn...</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
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