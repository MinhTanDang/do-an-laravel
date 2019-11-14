@extends('layout')
@section('title')
    Danh sách chi tiết lượt chơi
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
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Chi tiết luợt chơi</h4>
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
                                <th>Người chơi</th>
                                <th>Nội dung</th>
                                <th>Phương án</th>
                                <th>Đáp án</th>
                                <th>Điểm</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($chiTietLuotChois))
                                @foreach ($chiTietLuotChois as $chiTietLuotChoi)
                                    <tr>
                                        <td>{{ $chiTietLuotChoi->id }}</td>
                                        <td>{{ $chiTietLuotChoi->luotChoi->nguoiChoi->ten_dang_nhap }}</td>
                                        <td>{{ $chiTietLuotChoi->cauHoi->noi_dung }}</td>
                                        <td>{{ $chiTietLuotChoi->phuong_an }}</td>
                                        <td>{{ $chiTietLuotChoi->cauHoi->dap_an }}</td>
                                        <td>{{ $chiTietLuotChoi->diem }}</td>
                                    </tr>
                                @endforeach
                            @elseif(isset($chiTietLuotChoisById))
                                @foreach ($chiTietLuotChoisById as $chiTietLuotChoi)
                                    <tr>
                                        <td>{{ $chiTietLuotChoi->id }}</td>
                                        <td>{{ $chiTietLuotChoi->luotChoi->nguoiChoi->ten_dang_nhap }}</td>
                                        <td>{{ $chiTietLuotChoi->cauHoi->noi_dung }}</td>
                                        <td>{{ $chiTietLuotChoi->phuong_an }}</td>
                                        <td>{{ $chiTietLuotChoi->cauHoi->dap_an }}</td>
                                        <td>{{ $chiTietLuotChoi->diem }}</td>
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