@extends('layout')
@section('title')
@if (isset($linhVuc))
    Cập nhật cấu hình trợ giúp
@else
    Thêm mới cấu hình trợ giúp
@endif
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Cập nhật cấu hình trợ giúp</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    @if (isset($cauHinhTroGiup))
                        action="{{ route('cau-hinh-tro-giup.xu-ly-cap-nhat', ['id' => $cauHinhTroGiup->id]) }}" method="POST">
                        @method('PUT')
                    @endif
                    @csrf
                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <b>{{ $errors->first() }}</b>
                            </div>
                        @elseif(isset($msg))
                            <div class="alert alert-success">
                                <b>{{ $msg }}</b>
                            </div>
                        @endif
                        <label>Loại trợ giúp<span class="text-danger">*</span></label>
                        <input type="text" name="loai_tro_giup" placeholder="Nhập loại trợ giúp" class="form-control">
                        <label>Thứ tự<span class="text-danger">*</span></label>
                        <input type="text" name="thu_tu" placeholder="Nhập thứ tự" class="form-control">
                        <label>Credit<span class="text-danger">*</span></label>
                        <input type="text" name="credit" placeholder="Nhập credit" class="form-control">
                    </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="{{ route('cau-hinh-tro-giup.danh-sach') }}" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection