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
                                    <label class="control-label" for="tenRole">Tên Role</label>
                                    <input type="text" name="tenRole" class="form-control" id="tenRole" value="">
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
