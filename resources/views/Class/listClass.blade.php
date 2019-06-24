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
                                                <th>Giáo viên chủ nhiệm</th>
                                                <th>Khối</th>
                                                <th>Học kỳ</th>
                                                <th>Số lượng học sinh</th>
                                                <th>Số lượng tối đa</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($classrom as $class)
                                            <tr>
                                                <td>{{$class->id}}</td>
                                                <td>{{$class->name_class}}</td>
                                                <td>

                                                    {{App\teacher::where(['id'=>$class->maGV])->first()->name_teacher}}

                                                </td>
                                                <td>
                                                    {{App\grade::where(['id'=>$class->maKhoi])->first()->name_grade}}

                                                </td>
                                                <td>
                                                    {{App\semester::where(['id'=>$class->maHK])->first()->year_from}}
                                                    -
                                                    {{App\semester::where(['id'=>$class->maHK])->first()->year_to}}
                                                </td>
                                                <td>
                                                    {{count(App\student::where(['maLop'=>$class->id])->get())}}
                                                </td>
                                                <td>{{$class->size_of_class}}</td>
                                                <td>
                                                    <a style="margin: 5px;" href="/view-list-class/{{$class->id}}" class="btn btn-info btn-custom">Danh sách lớp & Danh sách môn học</a>
                                                    <a style="margin: 5px;" href="/edit-class/{{$class->id}}" class="btn btn-warning btn-custom">Chi tiết & Thêm thành viên & Môn học</a>
                                                    <!-- <button class="btn btn-danger btn-custom btn-delete" data-id="{{$class->id}}">Xóa</button> -->
                                                    <!-- <a style="margin: 5px;" href="/edit-class/{{$class->id}}" class="btn btn-primary btn-custom">Báo cáo tổng kết</a> -->

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
                        window.location.href = "/delete-class/" + id;
                    } else {
                        swal("Đã hủy", "Đã được giữ lại", "error");
                    }
                });
        });
    </script>
    @endsection
