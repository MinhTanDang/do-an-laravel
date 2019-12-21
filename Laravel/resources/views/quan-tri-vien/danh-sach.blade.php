@extends('layout')
@section('title')
    Danh sách quản trị viên
@endsection
@section('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <!-- Sweet Alert2  css-->
    <link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('js')
    <!-- third party js -->
    <script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <!-- third party js ends -->

    <!-- Sweet Alert2 js-->
    <script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    
    <!-- Datatables init -->
    <script src="{{ asset('assets/js/pages/init/datatables.init.js') }}"></script>

    <!-- Sweet Alert2 QuanTriVien init js-->
    <script src="{{ asset('assets/js/pages/init/sweet-alerts-quan-tri-vien.init.js') }}"></script>
    
@endsection
@section('main-content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Quản trị viên</h4>
            <a href="{{ route('quan-tri-vien.them-moi') }}" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a><br>
            @if (isset($quanTriViens))
                <a href="{{ route('quan-tri-vien.thung-rac') }}" style="margin-bottom:10px;" class="btn btn-info waves-effect waves-light">Xem quản trị viên đã xóa</a>
            @endif
        </div>
    </div>
</div>
<!-- end page title --> 
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên đăng nhập</th>
                            <th>Họ tên</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($quanTriViens))
                            @foreach ($quanTriViens as $quanTriVien)
                                <tr>
                                    <td>{{ $quanTriVien->id }}</td>
                                    <td>{{ $quanTriVien->ten_dang_nhap }}</td>
                                    <td>{{ $quanTriVien->ho_ten }}</td>
                                    <td>
                                        <a href="{{ route('quan-tri-vien.khoi-phuc-mat-khau', ['id' => $quanTriVien->id]) }}" class="btn btn-purple waves-effect waves-light">Khôi phục mật khẩu</a>
                                        <a href="{{ route('quan-tri-vien.xoa', ['id' => $quanTriVien->id]) }}" class="btn btn-danger waves-effect waves-light">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            @foreach ($onlyTrasheds as $quanTriVien)
                                <tr>
                                    <td>{{ $quanTriVien->id }}</td>
                                    <td>{{ $quanTriVien->ten_dang_nhap }}</td>
                                    <td>{{ $quanTriVien->ho_ten }}</td>
                                    <td>
                                        <a href="{{ route('quan-tri-vien.khoi-phuc', ['id' => $quanTriVien->id]) }}" class="btn btn-purple waves-effect waves-light">Khôi phục</a>
                                        <button class="btn btn-danger waves-effect waves-light xoa_quan_tri_vien" data-href="{{ route('quan-tri-vien.xoa-bo', ['id' => $quanTriVien->id]) }}">Xóa</button>                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection