@extends('layout')
@section('title')
    Cấu hình điểm câu hỏi
@endsection
@section('main-content')
<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                @if (isset($cauHinhApp))
                    action="{{ route('cau-hinh-app.xu-ly-cap-nhat', ['id' => $cauHinhApp->id]) }}" method="POST">
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
                        <label>Cơ hội sai<span class="text-danger">*</span></label>
                        <input type="text" name="co_hoi_sai" placeholder="Nhập cơ hội sai" class="form-control">
                    </div>
                    <div class="form-group">
                            <label>Thời gian trả lời sai<span class="text-danger">*</span></label>
                            <input type="text" name="thoi_gian_tra_loi" placeholder="Nhập thời gian trả lời" class="form-control">
                        </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="{{ route('cau-hinh-app.danh-sach') }}" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection