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
            <li class="active">
                <strong>Danh sách Lớp</strong>
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
                    <h5>Danh sách Lớp</h5>
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
                                                <th>Tên lớp</th>
                                                <th>Giáo viên</th>
                                                <th>Khối</th>
                                                <th>Học kỳ</th>
                                                <th>Số lượng học sinh</th>
                                                <th>Số lượng môn</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>10A3</td>
                                                <td>Lê Văn Tư</td>
                                                <td>Khối 10</td>
                                                <td>HK1-2018-2019</td>
                                                <td>43</td>
                                                <td>12</td>
                                                <td>
                                                    <a style="margin: 5px;" href="/view-class/IDCLASS" class="btn btn-info btn-custom">Chi tiết</a>
                                                    <a style="margin: 5px;" href="/edit-class/IDCLASS" class="btn btn-warning btn-custom">Cập nhật</a>
                                                    <button class="btn btn-danger btn-custom btn-delete" data-id="">Xóa</button>
                                                    <button style="margin: 5px;" class="btn btn-info btn-custom">Báo cáo TK Lớp</button>
                                                </td>
                                            </tr>

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