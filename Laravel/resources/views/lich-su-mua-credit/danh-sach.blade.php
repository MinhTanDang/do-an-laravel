@extends('layout')
@section('title')
    Danh sách lịch sử mua credit
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
                <h4 class="page-title">Lịch sử mua credit</h4>
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
                                <th>Người mua</th>
                                <th>Tên gói</th>
                                <th>Credit</th>
                                <th>Số tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($lichSuMuaCredits))
                                @foreach ($lichSuMuaCredits as $lichSuMuaCredit)
                                    <tr>
                                        <td>{{ $lichSuMuaCredit->nguoiChoi->id }}</td>
                                        <td>{{ $lichSuMuaCredit->nguoiChoi->ten_dang_nhap }}</td>
                                        <td>{{ $lichSuMuaCredit->goiCredit->ten_goi }}</td>
                                        <td>{{ $lichSuMuaCredit->credit }}</td>
                                        <td>{{ $lichSuMuaCredit->so_tien }}</td>
                                    </tr>
                                @endforeach
                            @elseif(isset($lichSuMuaCreditsById))
                                @foreach ($lichSuMuaCreditsById as $lichSuMuaCredit)
                                    <tr>
                                        <td>{{ $lichSuMuaCredit->nguoiChoi->id }}</td>
                                        <td>{{ $lichSuMuaCredit->nguoiChoi->ten_dang_nhap }}</td>
                                        <td>{{ $lichSuMuaCredit->goiCredit->ten_goi }}</td>
                                        <td>{{ $lichSuMuaCredit->credit }}</td>
                                        <td>{{ $lichSuMuaCredit->so_tien }}</td>
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