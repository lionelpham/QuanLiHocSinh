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
                    <a href="/admin-homepage">Trang chủ</a>
                </li>
                <li class="active">
                    <strong>Cập nhật account</strong>
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
                        <h5>Cập nhật Thông tin cá nhân</h5>
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
                                    <label class="control-label" for="maGV">Username</label>
                                    <input type="text" name="maGV" class="form-control" id="maGV" value="" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <label class="control-label" for="passwordGV">Password</label>
                                    <input type="password" name="passwordGV" class="form-control" id="passwordGV" value="">
                                </div>
                            </div>

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
