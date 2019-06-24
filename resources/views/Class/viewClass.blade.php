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
                    <h5>Danh sách học sinh</h5>
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
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table dataTables">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tên học sinh</th>
                                                <th>Giới tính</th>
                                                <th>Ngày sinh</th>
                                                <th>Địa chỉ</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($listStudent as $stu)
                                            <tr>
                                                <td>{{$stu->id}}</td>
                                                <td>{{$stu->nameStudent}}</td>
                                                <td>{{$stu->sexual}}</td>
                                                <td>{{$stu->date_of_birth}}</td>
                                                <td>{{$stu->address}}</td>

                                                <td>
                                                    <!-- <a style="margin: 5px;" href="/view-student/{{$stu->id}}" class="btn btn-info btn-custom" data-id="{{$stu->id}}">Chi tiết</a> -->
                                                    <!-- <button class="btn btn-danger btn-custom btn-delete" data-id="">Xóa khỏi lớp</button> -->
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Danh sách môn học</h5>
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
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table dataTables">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Môn</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($listSubject as $subj)
                                            <tr>
                                                <td>{{$subj->id}}</td>
                                                <td>{{$subj->nameObject}}</td>
                                                <td>
                                                    <a style="margin: 5px;" href="/view-class/{{$classrom->id}}/{{$subj->id}}/input-score" class="btn btn-danger btn-custom" data-id="">Nhập điểm</a>
                                                    <a style="margin: 5px;" href="/view-class/{{$classrom->id}}/{{$subj->id}}" class="btn btn-info btn-custom" data-id="">Xem bảng điểm</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
