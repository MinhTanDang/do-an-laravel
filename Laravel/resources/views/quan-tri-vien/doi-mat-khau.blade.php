@extends('layout')
@section('title')
    Đổi mật khẩu
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Đổi mật khẩu</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    action="{{ route('quan-tri-vien.xu-ly-doi-mat-khau', ['id' => $quanTriVien->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <b>{{ $errors->first() }}</b>
                            </div>
                        @elseif(isset($msgSuccess))
                            <div class="alert alert-success">
                                <b>{{ $msgSuccess }}</b>
                            </div>
                        @elseif(isset($msgFail))
                            <div class="alert alert-danger">
                                <b>{{ $msgFail }}</b>
                            </div> 
                        @endif
                        <label>Mật khẩu cũ<span class="text-danger">*</span></label>
                        <input type="password" name="mat_khau_cu" placeholder="Nhập mật khẩu cũ" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu mới<span class="text-danger">*</span></label>
                        <input type="password" name="mat_khau_moi" placeholder="Nhập mật khẩu mới" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu mới<span class="text-danger">*</span></label>
                        <input type="password" name="mat_khau_moi_confirmation" placeholder="Nhập lại mật khẩu mới" class="form-control">
                    </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="{{ route('quan-tri-vien.trang-ca-nhan') }}" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection