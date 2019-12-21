@extends('layout')
@section('title')
    Cấu hình điểm câu hỏi
@endsection
@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Cấu hình</a></li>
                    <li class="breadcrumb-item active">
                        Cấu hình điểm câu hỏi
                    </li>
                </ol>
            </div>
            <h4 class="page-title">
                Cấu hình điểm câu hỏi
            </h4>
        </div>
    </div>
</div>
<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                @if (isset($cauHinhDiemCauHoi))
                    action="{{ route('cau-hinh-diem-cau-hoi.xu-ly-cap-nhat', ['id' => $cauHinhDiemCauHoi->id]) }}" method="POST">
                    @method('PUT')
                @endif
                    @csrf
                    <div class="form-group">
                        <label>Thứ tự<span class="text-danger">*</span></label>
                        <input type="text" name="thu_tu" required placeholder="Nhập thứ tự" class="form-control">
                    </div>
                    <div class="form-group">
                            <label>Điểm<span class="text-danger">*</span></label>
                            <input type="text" name="diem" required placeholder="Nhập điểm" class="form-control">
                        </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="{{ route('cau-hinh-diem-cau-hoi.danh-sach') }}" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection