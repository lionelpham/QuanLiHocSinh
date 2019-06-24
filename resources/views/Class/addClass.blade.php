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
                    <form class="form-horizontal" method="POST" action="/add-class/new" enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                        <div class="form-group"><label class="col-sm-2 control-label">Tên Lớp</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="name_class"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Sĩ số tối đa</label>
                            <div class="col-sm-10"><input type="number" class="form-control" name="maxSize_class"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Giáo viên chủ nhiệm</label>
                            <div class="col-sm-10">
                                <select name="ma_GVCN" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" style="display: none;">
                                    @foreach($teacher as $teach)
                                    <option value="{{$teach->id}}">{{$teach->name_teacher}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Khối</label>
                            <div class="col-sm-10">
                                <select name="ma_grade" data-placeholder="Choose a Country..." class="chosen-select" tabindex="-1" style="display: none;">
                                    @foreach($grade as $gra)
                                    <option value="{{$gra->id}}">{{$gra->name_grade}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Học kỳ</label>

                            <div class="col-sm-10">
                                <select name="ma_semester" data-placeholder="Chọn..." class="chosen-select" tabindex="-1" style="display: none;">
                                    @foreach($semester as $seme)
                                    <option value="{{$seme->id}}">{{$seme->name}}: {{$seme->year_from}} - {{$seme->year_to}}</option>
                                    @endforeach
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
