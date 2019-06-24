@extends('layouts.admin')
@section('header')

@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Danh sách Lớp</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/">Admin</a>
            </li>
            <li>
                <a href="/list-class">Danh sách lớp</a>
            </li>
            <li>
                <a href="/list-class">Lớp {{$classrom->name_class}}</a>
            </li>
            <li class="active">
                <strong>Môn {{$subject->nameObject}}</strong>
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
                    <h5>Bảng điểm môn {{$subject->nameObject}}</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content ">
                    <div>
                        <div class="ibox float-e-margins">
                            <form class="form-horizontal" method="POST" action="/view-class/update-score/{{$classrom->id}}/{{$subject->id}}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}">
                                <div class="ibox-content">
                                    <div class="table-responsive">
                                        <table class="table dataTables">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tên học sinh</th>
                                                    <th>Trung bình</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($scoreBoard as $score)
                                                <tr>
                                                    <td>{{$score->id}}</td>
                                                    <td>

                                                    {{App\student::where(['id'=>$score->maHS])->first()->nameStudent}}
                                                    </td>
                                                    <td>
                                                        <input type="number" name="{{$score->id}}" value="{{$score->score}}" min="0" step="0.01" max="10">
                                                    </td>
                                                    <td>
                                                        <!-- <a style="margin: 5px;" href="/view-student/IDSTUDENT" class="btn btn-info btn-custom" data-id="">Thông tin học sinh</a> -->
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Cập nhật điểm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div @endsection @section('script') <script>
$(document).ready(function() {
$('.dataTables').DataTable({
pageLength: 10,
responsive: true,
dom: '<"html5buttons"B>lTfgitp',
    buttons: [],
    stateSave: true //save the state before reload
    });

    });
    </script>
    <script>
        $('.dataTables').on('click', '.btn-delete', function() {
            var id = $(this).data('id');
            swal({
                    title: "Bạn có chắc chắn xóa không?",
                    text: "Dự án sau khi xóa sẽ không hồi phục lại được.",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Có",
                    cancelButtonText: "Không",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        swal("Đã xóa!", "Dự án đã được xóa.", "success");
                        window.location.href = "/admin-project-list/delete/" + id;
                    } else {
                        swal("Đã hủy", "Dự án đã được giữ lại", "error");
                    }
                });
        });
    </script>
    @endsection
