@extends('layouts.admin')
@section('header')

@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Danh sách Học kì</h2>
        <ol class="breadcrumb">
            <li>
                <a href="/admin">Admin</a>
            </li>
            <li>
                <a href="/admin-homepage">Trang chủ</a>
            </li>
            <li class="active">
                <strong>Danh sách Học kì</strong>
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
                    <h5>Danh sách Học kì</h5>
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
                                                <th>Tên học kỳ</th>
                                                <th>Bắt đầu</th>
                                                <th>Kết thúc</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($listSemester as $lsemester)
                                            <tr>

                                                <td>{{$lsemester->id}}</td>
                                                <td>{{$lsemester->name}}</td>
                                                <td>{{$lsemester->year_from}}</td>
                                                <td>{{$lsemester->year_to}}</td>
                                                <td>
                                                    <a style="margin: 5px;" href="/list-semester/edit-semester/{{$lsemester->id}}" class="btn btn-warning btn-custom">Cập nhật</a>
                                                    <button class="btn btn-danger btn-custom btn-delete" data-id="{{$lsemester->id}}">Xóa</button>
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
                        window.location.href = "/list-semester/delete/" + id;
                    } else {
                        swal("Đã hủy", "Đã được giữ lại", "error");
                    }
                });
        });
    </script>
    @endsection
