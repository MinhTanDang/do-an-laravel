@extends('layout')
@section('title')
    Danh sách câu hỏi
@endsection
@section('css')
    <!-- third party css -->
    <link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->
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

     <!-- Datatables init -->
     <script src="{{ asset('assets/js/pages/init/datatables.init.js') }}"></script>
@endsection
@section('main-content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Quản trị</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Câu hỏi</a></li>
                    <li class="breadcrumb-item active">Danh sách câu hỏi</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách câu hỏi</h4>
            <a href="{{ route('cau-hoi.them-moi') }}" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a><br>
            @if ( isset($cauHois))
                <a href="{{ route('cau-hoi.thung-rac') }}" style="margin-bottom:10px;" class="btn btn-info waves-effect waves-light">Xem câu hỏi đã xóa</a>
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
                            <th>Lĩnh vực</th>
                            <th>Nội dung</th>
                            <th>Phương án A</th>
                            <th>Phương án B</th>
                            <th>Phương án C</th>
                            <th>Phương án D</th>
                            <th>Đáp án</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($cauHois))
                            @foreach ($cauHois as $cauHoi)
                                <tr>
                                    <td>{{ $cauHoi->id }}</td>
                                    <td>{{ $cauHoi->linhVuc->ten_linh_vuc }}</td>
                                    <td>{{ $cauHoi->noi_dung }}</td>
                                    <td>{{ $cauHoi->phuong_an_a }}</td>
                                    <td>{{ $cauHoi->phuong_an_b }}</td>
                                    <td>{{ $cauHoi->phuong_an_c }}</td>
                                    <td>{{ $cauHoi->phuong_an_d }}</td>
                                    <td>{{ $cauHoi->dap_an }}</td>
                                    <td>
                                        <a href="{{ route('cau-hoi.cap-nhat', ['id' => $cauHoi->id]) }}" class="btn btn-warning waves-effect waves-light">Cập nhật</a>
                                        <a href="{{ route('cau-hoi.xoa', ['id' => $cauHoi->id]) }}" class="btn btn-danger waves-effect waves-light">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            @foreach ($onlyTrasheds as $cauHoi)
                                <tr>
                                    <td>{{ $cauHoi->id }}</td>
                                    <td>{{ $cauHoi->ten_linh_vuc }}</td>
                                    <td>{{ $cauHoi->noi_dung }}</td>
                                    <td>{{ $cauHoi->phuong_an_a }}</td>
                                    <td>{{ $cauHoi->phuong_an_b }}</td>
                                    <td>{{ $cauHoi->phuong_an_c }}</td>
                                    <td>{{ $cauHoi->phuong_an_d }}</td>
                                    <td>{{ $cauHoi->dap_an }}</td>
                                    <td>
                                        <a href="{{ route('cau-hoi.khoi-phuc', ['id' => $cauHoi->id]) }}" class="btn btn-purple waves-effect waves-light">Khôi phục</a>
                                        <a href="{{ route('cau-hoi.xoa-bo', ['id' => $cauHoi->id]) }}" class="btn btn-danger waves-effect waves-light">Xóa</a>
                                    </td>
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