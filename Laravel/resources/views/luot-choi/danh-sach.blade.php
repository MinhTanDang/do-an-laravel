@extends('layout')
@section('title')
    Danh sách lượt chơi
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
                <h4 class="page-title">Lượt chơi</h4>
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
                                <th>Tên người chơi</th>
                                <th>Số câu</th>
                                <th>Điểm</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($luotChois))
                                @foreach ($luotChois as $luotChoi)
                                    <tr>
                                        <td>{{ $luotChoi->id }}</td>
                                        <td>{{ $luotChoi->nguoiChoi->ten_dang_nhap }}</td>
                                        <td>{{ $luotChoi->so_cau }}</td>
                                        <td>{{ $luotChoi->diem }}</td>
                                        <td>
                                            <a href="{{ route('luot-choi.chi-tiet-luot-choi-theo-id', ['luot_choi_id' => $luotChoi->id]) }}" class="btn btn-primary waves-effect waves-light">Xem chi tiết lượt chơi</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @elseif (isset($luotChoisById))
                                @foreach ($luotChoisById as $luotChoi)
                                    <tr>
                                        <td>{{ $luotChoi->id }}</td>
                                        <td>{{ $luotChoi->nguoiChoi->ten_dang_nhap }}</td>
                                        <td>{{ $luotChoi->so_cau }}</td>
                                        <td>{{ $luotChoi->diem }}</td>
                                        <td>
                                            <a href="{{ route('luot-choi.chi-tiet-luot-choi-theo-id', ['luot_choi_id' => $luotChoi->id]) }}" class="btn btn-primary waves-effect waves-light">Xem chi tiết lượt chơi</a>
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