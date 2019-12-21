@extends('layout')
@section('title')
    Cấu hình điểm câu hỏi
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
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Cấu hình</a></li>
                        <li class="breadcrumb-item active">
                            Cấu hình điểm câu hỏi hiện tại
                        </li>
                    </ol>
                </div>
                <h4 class="page-title">
                    Cấu hình điểm câu hỏi hiện tại
                </h4>
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
                                <th>Thứ tự</th>
                                <th>Điểm</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($cauHinhDiemCauHois))
                                @foreach ($cauHinhDiemCauHois as $cauHinhDiemCauHoi)
                                <tr>
                                    <td>{{ $cauHinhDiemCauHoi->id }}</td>
                                    <td>{{ $cauHinhDiemCauHoi->thu_tu }}</td>
                                    <td>{{ $cauHinhDiemCauHoi->diem }}</td>
                                    <td>
                                        <a href="{{ route('cau-hinh-diem-cau-hoi.cap-nhat', ['id' => $cauHinhDiemCauHoi->id]) }}" class="btn btn-success waves-effect waves-light">Cấu hình</a>
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