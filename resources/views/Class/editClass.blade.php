@extends('layouts.admin')
@section('header')

@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Thêm môn học và thành viên cho Lớp</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Admin</a>
            </li>
            <li>
                <a href="/list-class">Danh sách lớp</a>
            </li>
            <li class="active">
                <strong>Lớp {{$classrom->name_class}}</strong>
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
                    <h5>Thêm môn học và thành viên cho Lớp
                    </h5>
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
                    <form class="form-horizontal" method="POST" action="/edit-class/update-info-class/{{$classrom->id}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                        <div class="form-group"><label class="col-sm-2 control-label">Tên Lớp</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="name_class" value="{{$classrom->name_class}}" readonly></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Giáo viên chủ nhiệm</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="name_GVCN" value="{{$teacher->name_teacher}}" readonly></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Khối</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="name_grade" value="{{$grade->name_grade}}" readonly></div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Học kỳ</label>
                            <div class="col-sm-10"><input type="text" class="form-control" name="name_semester" value="{{$semester->name}}  {{$semester->year_from}} - {{$semester->year_to}}" readonly></div>


                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Sỉ số</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="totalStudent" value="{{count($studentOfClass)}}/{{$classrom->size_of_class}}" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Thành viên</label>

                            <div class="col-sm-10">
                                <select data-placeholder="Chọn..." id="all_Student" name="listStudent[]" class="chosen-select" multiple="multiple" style="width: 350px; display: none;" tabindex="-1">
                                    @foreach($student as $stu)
                                    <option value="{{$stu->id}}">{{$stu->nameStudent}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Môn học</label>

                            <div class="col-sm-10">
                                <select data-placeholder="Chọn..." name="listSubject[]" class="chosen-select" multiple="multiple" style="width: 350px; display: none;" tabindex="-1">
                                    @foreach($subject as $stu)
                                    <option value="{{$stu->id}}">{{$stu->nameObject}}</option>
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
