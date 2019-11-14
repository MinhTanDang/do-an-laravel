@extends('layout')
@section('title')
    Danh sách nguời chơi
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

    <!-- Sweet Alert2 NguoiChoi init js-->
    <script src="{{ asset('assets/js/pages/init/sweet-alerts-nguoi-choi.init.js') }}"></script>

@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Người chơi</h4>
                @if (isset($nguoiChois))
                    <a href="{{ route('nguoi-choi.thung-rac') }}" style="margin-bottom:10px;" class="btn btn-info waves-effect waves-light">Xem người chơi đã xóa</a>
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
                                <th>Tên đăng nhập</th>
                                <th>Email</th>
                                <th>Điểm cao nhất</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($nguoiChois))
                                @foreach ($nguoiChois as $nguoiChoi)
                                    <tr>
                                        <td>{{ $nguoiChoi->id }}</td>
                                        <td>{{ $nguoiChoi->ten_dang_nhap }}</td>
                                        <td>{{ $nguoiChoi->email }}</td>
                                        <td>{{ $nguoiChoi->diem_cao_nhat }}</td>
                                        <td>
                                            <a href="{{ route('nguoi-choi.lich-su-mua-credit-theo-id', ['id' => $nguoiChoi->id]) }}" class="btn btn-success waves-effect waves-light">Xem lịch sử mua credit</a>
                                            <a href="{{ route('nguoi-choi.luot-choi-theo-id', ['id' => $nguoiChoi->id]) }}" class="btn btn-primary waves-effect waves-light">Xem lượt chơi</a>
                                            <a href="{{ route('nguoi-choi.xoa', ['id' => $nguoiChoi->id]) }}" class="btn btn-danger waves-effect waves-light">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @foreach ($onlyTrasheds as $nguoiChoi)
                                    <tr>
                                            <td>{{ $nguoiChoi->id }}</td>
                                            <td>{{ $nguoiChoi->ten_dang_nhap }}</td>
                                            <td>{{ $nguoiChoi->email }}</td>
                                            <td>{{ $nguoiChoi->diem_cao_nhat }}</td>
                                        <td>
                                            <a href="{{ route('nguoi-choi.khoi-phuc', ['id' => $nguoiChoi->id]) }}" class="btn btn-purple waves-effect waves-light">Khôi phục</a>
                                            <button class="btn btn-danger waves-effect waves-light xoa_nguoi_choi" data-href="{{ route('nguoi-choi.xoa-bo', ['id' => $nguoiChoi->id]) }}">Xóa</button>
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