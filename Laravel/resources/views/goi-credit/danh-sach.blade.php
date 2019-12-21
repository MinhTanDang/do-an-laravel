@extends('layout')
@section('title')
    Danh sách gói credit
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

    <!-- Sweet Alert2 GoiCredit init js-->
    <script src="{{ asset('assets/js/pages/init/sweet-alerts-goi-credit.init.js') }}"></script>

@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Gói credit</h4>
                <a href="{{ route('goi-credit.them-moi') }}" style="margin-bottom:10px;" class="btn btn-primary waves-effect waves-light">Thêm mới</a><br>
                @if (isset($goiCredits))
                    <a href="{{ route('goi-credit.thung-rac') }}" style="margin-bottom:10px;" class="btn btn-info waves-effect waves-light">Xem gói credit đã xóa</a>
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
                                <th>Tên gói</th>
                                <th>Credit</th>
                                <th>Số tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($goiCredits))
                                @foreach ($goiCredits as $goiCredit)
                                    <tr>
                                        <td>{{ $goiCredit->id }}</td>
                                        <td>{{ $goiCredit->ten_goi }}</td>
                                        <td>{{ $goiCredit->credit }}</td>
                                        <td>{{ $goiCredit->so_tien }}</td>
                                        <td>
                                            <a href="{{ route('goi-credit.cap-nhat', ['id' => $goiCredit->id]) }}" class="btn btn-warning waves-effect waves-light">Cập nhật</a>
                                            <a href="{{ route('goi-credit.xoa', ['id' => $goiCredit->id]) }}" class="btn btn-danger waves-effect waves-light">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                @foreach ($onlyTrasheds as $goiCredit)
                                    <tr>
                                        <td>{{ $goiCredit->id }}</td>
                                        <td>{{ $goiCredit->ten_goi }}</td>
                                        <td>{{ $goiCredit->credit }}</td>
                                        <td>{{ $goiCredit->so_tien }}</td>
                                        <td>
                                            <a href="{{ route('goi-credit.khoi-phuc', ['id' => $goiCredit->id]) }}" class="btn btn-warning waves-effect waves-light">Khôi phục</a>
                                            <button class="btn btn-danger waves-effect waves-light xoa_goi_credit" data-href="{{ route('goi-credit.xoa-bo', ['id' => $goiCredit->id]) }}">Xóa</button>
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