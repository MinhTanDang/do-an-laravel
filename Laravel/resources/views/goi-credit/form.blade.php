@extends('layout')
@section('title')
@if (isset($linhVuc))
    Cập nhật gói credit
@else
    Thêm mới gói credit
@endif
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                @if (!isset($goiCredit))
                    <h4 class="page-title">Thêm mới gói credit</h4>
                @else
                    <h4 class="page-title">Cập nhật gói credit</h4>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    @if (isset($goiCredit))
                        action="{{ route('goi-credit.xu-ly-cap-nhat', ['id' => $goiCredit->id]) }}" method="POST">
                        @method('PUT')
                    @else
                        action="{{ route('goi-credit.xu-ly-them-moi') }}" method="POST">
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
                        <label>Tên gói<span class="text-danger">*</span></label>
                        <input type="text" name="ten_goi" placeholder="Nhập tên gói" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Credit<span class="text-danger">*</span></label>
                        <input type="text" name="credit" placeholder="Nhập credit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Số tiền<span class="text-danger">*</span></label>
                        <input type="text" name="so_tien" placeholder="Nhập số tiền" class="form-control">
                    </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="{{ route('goi-credit.danh-sach') }}" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection