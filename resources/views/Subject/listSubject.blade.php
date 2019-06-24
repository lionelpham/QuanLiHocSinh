@extends('layouts.admin')
@section('header')

@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Danh sách Môn học</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/admin">Admin</a>
            </li>
            <li>
                <a href="/admin-homepage">Trang chủ</a>
            </li>
            <li class="active">
                <strong>Danh sách Môn học</strong>
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
                    <h5>Danh sách Môn học</h5>
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
                                                <th>Tên Môn học</th>
                                                <th>Điểm tối thiểu của Môn học</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($subjectList as $listSubj)
                                            <tr>
                                                <td>{{$listSubj->id}}</td>
                                                <td>{{$listSubj->nameObject}}</td>
                                                <td>{{$listSubj->score_passed}}</td>
                                                <td>
                                                    <a style="margin: 5px;" href="list-subject/edit-subject/{{$listSubj->id}}" class="btn btn-warning btn-custom">Cập nhật</a>
                                                    <button class="btn btn-danger btn-custom btn-delete" data-id="{{$listSubj->id}}">Xóa</button>
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
                    text: "Sau khi xóa sẽ không hồi phục lại được.",
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
                        swal("Đã xóa!", "Đã được xóa.", "success");
                        window.location.href = "/list-subject/delete/" + id;
                    } else {
                        swal("Đã hủy", "Đã được giữ lại", "error");
                    }
                });
        });
    </script>
    @endsection
