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

    <!-- Sweet Alert2 css-->
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

    <!-- Sweet Alert2 CauHoi init js-->
    <script src="{{ asset('assets/js/pages/init/sweet-alerts-cau-hoi.init.js') }}"></script>

@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Câu hỏi</h4>
                <a href="{{ route('cau-hoi.them-moi') }}" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a><br>
                @if (isset($cauHois))
                    <a href="{{ route('cau-hoi.thung-rac') }}" style="margin-bottom:10px;" class="btn btn-info waves-effect waves-light">Xem câu hỏi đã xóa</a>
                @endif
            </div>
        </div>
    </div>
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
                                        <td>{{ $cauHoi->linhVuc->ten_linh_vuc }}</td>
                                        <td>{{ $cauHoi->noi_dung }}</td>
                                        <td>
                                            <a href="{{ route('cau-hoi.khoi-phuc', ['id' => $cauHoi->id]) }}" class="btn btn-purple waves-effect waves-light">Khôi phục</a>
                                            <button class="btn btn-danger waves-effect waves-light xoa_cau_hoi" data-href="{{ route('cau-hoi.xoa-bo', ['id' => $cauHoi->id]) }}">Xóa</button>
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