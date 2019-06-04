@extends('layouts.admin')
@section('header')

@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Cập nhật thông tin cá nhân</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="/admin">Admin</a>
                </li>
                <li>
                    <a href="/admin-homepage">Role</a>
                </li>
                <li class="active">
                    <strong>Thêm Role</strong>
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
                        <h5>Thêm Role</h5>
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
                            <div class="form-group">
                                <div>
                                  <label for="tenRole" class="control-label">Tên Role</label>
                                  <select id="tenRole" class="chosen-select" tabindex="4" name="tenRole">
                                      <option value="">Chọn</option>
                                      <option value="0">Hiệu Trưởng</option>
                                      <option value="1">Giáo Viên</option>
                                      <option value="2">Giáo Vụ</option>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group form-inline">
                              <div>
                                <label for="maGV" class="control-label">Mã Giáo Viên</label>
                                <select id="maGV" class="chosen-select" tabindex="4" name="maGV">
                                    <option value="">Chọn</option>
                                    <option value="0">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                </select>
                              </div>
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
