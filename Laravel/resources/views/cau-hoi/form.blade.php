@extends('layout')
@section('title')
@if (isset($cauHoi))
    Cập nhật câu hỏi
@else
    Thêm mới câu hỏi
@endif
@endsection
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                @if (!isset($cauHoi))
                    <h4 class="page-title">Thêm mới câu hỏi</h4>
                @else
                    <h4 class="page-title">Cập nhật câu hỏi</h4>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <form
                    @if (isset($cauHoi))
                        action="{{ route('cau-hoi.xu-ly-cap-nhat', ['id' => $cauHoi->id]) }}" method="POST">
                        @method('PUT')
                    @else
                        action="{{ route('cau-hoi.xu-ly-them-moi') }}" method="POST">
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
                        <label>Nội dung<span class="text-danger">*</span></label>
                        <textarea type="text" name="noi_dung" placeholder="Nhập nội dung" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Lĩnh vực<span class="text-danger">*</span></label>
                        <select name="linh_vuc" id="linh_vuc" class="form-control">
                            @if (isset($linhVucs))
                                @foreach ($linhVucs as $linhVuc)
                                    <option value="{{ $linhVuc->id }}">{{ $linhVuc->ten_linh_vuc }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Phương án A<span class="text-danger">*</span></label>
                        <input type="text" name="phuong_an_a" placeholder="Nhập phương án A" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phương án B<span class="text-danger">*</span></label>
                        <input type="text" name="phuong_an_b" placeholder="Nhập phương án B" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phương án C<span class="text-danger">*</span></label>
                        <input type="text" name="phuong_an_c" placeholder="Nhập phương án C" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phương án D<span class="text-danger">*</span></label>
                        <input type="text" name="phuong_an_d" placeholder="Nhập phương án D" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Đáp án<span class="text-danger">*</span></label>
                        <select name="dap_an" id="dap_an" class="form-control">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                    <div class="form-group text-left mb-0">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                        <a href="{{ route('cau-hoi.danh-sach') }}" class="btn btn-purple waves-effect waves-light">Hủy</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection