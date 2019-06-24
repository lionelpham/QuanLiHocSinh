@extends('layouts.admin')
@section('header')

@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Quản lý kỳ học</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Học kỳ</a>
            </li>
            <li class="active">
                <strong>Cập nhật học kỳ</strong>
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
                    <h5>Cập nhật học kỳ mới</h5>
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
                    <form class="form-horizontal" method="POST" action="/list-semester/edit-semester/{{$semester->id}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                        <div class="form-group"><label class="col-sm-2 control-label">Tên học kỳ</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_semester" value="{{$semester->name}}"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Thời gian</label>
                            <div class="col-sm-4"><input type="date" class="form-control" name="date_from" value="{{$semester->year_from}}"></div>
                            <span class="col-sm-2 text-center">-</span>
                            <div class="col-sm-4"><input type="date" class="form-control" name="date_to" value="{{$semester->year_to}}"></div>
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
