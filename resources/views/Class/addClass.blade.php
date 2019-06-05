@extends('layouts.admin')
@section('header')

@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Thêm lớp</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Admin</a>
            </li>
            <li class="active">
                <strong>Thêm Lớp</strong>
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
                <div class="ibox-title">
                    <h5>Thêm Lớp</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" method="POST" action="/" enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                        <div class="form-group"><label class="col-sm-2 control-label">Tên Lớp</label>
                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Giáo viên chủ nhiệm</label>

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
                            <label class="col-sm-2 control-label">Khối</label>

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
                            <label class="col-sm-2 control-label">Học kỳ</label>

                            <div class="col-sm-10">
                                <select data-placeholder="Chọn..." class="chosen-select" tabindex="-1" style="display: none;">
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
                            <label class="col-sm-2 control-label">Thành viên</label>

                            <div class="col-sm-10">
                                <select data-placeholder="Chọn..." class="chosen-select" multiple="" style="width: 350px; display: none;" tabindex="-1">
                                    <option value="">Select</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Môn học</label>
                            <div class="col-sm-10">
                                <select data-placeholder="Chọn..." class="chosen-select" multiple="" style="width: 350px; display: none;" tabindex="-1">
                                    <option value="">Select</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>

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