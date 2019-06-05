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
                <strong>Lớp IDCLASS</strong>
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
                    <h5>Thông tin chung</h5>
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
                        <div class="form-group"><label class="col-sm-2 control-label">Tên Lớp</label>
                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Giáo viên chủ nhiệm</label>
                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Khối</label>
                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-2 control-label">Học kỳ</label>
                            <div class="col-sm-10"><input type="text" class="form-control"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-warning pull-right" style="margin-left: 10px">Chỉnh sửa</button>
                                <button type="submit" class="btn btn-info pull-right">Xuất báo cáo tổng kết lớp</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
                                                <th>Email</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>Phạm Hữu Hoàng Việt</td>
                                                <td>Bê Đê</td>
                                                <td>13 Cầu thị nghè</td>
                                                <td>12-3-2019</td>
                                                <td>viethonag123@gmail.com</td>
                                                <td>
                                                    <a style="margin: 5px;" href="/view-student/IDSTUDENT" class="btn btn-info btn-custom" data-id="">Chi tiết</a>
                                                    <button class="btn btn-danger btn-custom btn-delete" data-id="">Xóa khỏi lớp</button>
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
                                                <th>Tỉ lệ đạt</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>Toán</td>
                                                <td>-</td>
                                                <td>
                                                    <button style="margin: 5px;" href="/" class="btn btn-info btn-custom" data-id="">Báo cáo tổng kết môn</button>
                                                    <a style="margin: 5px;" href="/view-class/IDCLASS/IDSUBJECT" class="btn btn-info btn-custom" data-id="">Xem bảng điểm</a>
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