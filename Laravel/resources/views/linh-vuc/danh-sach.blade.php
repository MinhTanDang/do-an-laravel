@extends('layout')
@section('title')
    Danh sách lĩnh vực
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
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Lĩnh vực</a></li>
                    <li class="breadcrumb-item active">Danh sách lĩnh vực</li>
                </ol>
            </div>
            <h4 class="page-title">Danh sách lĩnh vực</h4>
            <a href="{{ route('linh-vuc.them-moi') }}" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a><br>
            @if ( isset($linhVucs))
                <a href="{{ route('linh-vuc.thung-rac') }}" style="margin-bottom:10px;" class="btn btn-info waves-effect waves-light">Xem lĩnh vực đã xóa</a>
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
                            <th>Tên lĩnh vực</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($linhVucs))
                            @foreach ($linhVucs as $linhVuc)
                                <tr>
                                    <td>{{ $linhVuc->id }}</td>
                                    <td>{{ $linhVuc->ten_linh_vuc }}</td>
                                    <td>
                                        <a href="{{ route('linh-vuc.cap-nhat', ['id' => $linhVuc->id]) }}" class="btn btn-warning waves-effect waves-light">Cập nhật</a>
                                        <a href="{{ route('linh-vuc.xoa', ['id' => $linhVuc->id]) }}" class="btn btn-danger waves-effect waves-light">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            @foreach ($onlyTrasheds as $linhVuc)
                                <tr>
                                    <td>{{ $linhVuc->id }}</td>
                                    <td>{{ $linhVuc->ten_linh_vuc }}</td>
                                    <td>
                                        <a href="{{ route('linh-vuc.khoi-phuc', ['id' => $linhVuc->id]) }}" class="btn btn-purple waves-effect waves-light">Khôi phục</a>
                                        <a href="{{ route('linh-vuc.xoa-bo', ['id' => $linhVuc->id]) }}" class="btn btn-danger waves-effect waves-light">Xóa</a>
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