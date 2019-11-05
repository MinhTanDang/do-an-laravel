@extends('layout')
@section('title')
@if (isset($linhVuc))
    Cập nhật lĩnh vực
@else
    Thêm mới lĩnh vực
@endif
@endsection
@section('main-content')
<div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Quản trị</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Lĩnh vực</a></li>
                        <li class="breadcrumb-item active">
                            @if (isset($linhVuc))
                                Cập nhật lĩnh vực
                            @else
                                Thêm mới lĩnh vực
                            @endif
                        </li>
                    </ol>
                </div>
                <h4 class="page-title">
                    @if (isset($linhVuc))
                        Cập nhật lĩnh vực
                    @else
                        Thêm mới lĩnh vực
                    @endif
                </h4>
            </div>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <form
                        @if (isset($linhVuc))
                            action="{{ route('linh-vuc.xu-ly-cap-nhat', ['id' => $linhVuc->id]) }}" method="POST">
                            @method('PUT')
                        @else
                            action="{{ route('linh-vuc.xu-ly-them-moi') }}" method="POST">
                        @endif
                        @csrf
                        <div class="form-group">
                            <label>Tên lĩnh vực<span class="text-danger">*</span></label>
                            <input type="text" name="ten_linh_vuc" required placeholder="Nhập tên lĩnh vực" class="form-control">
                        </div>
                        <div class="form-group text-left mb-0">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Lưu</button>
                            <a href="{{ route('linh-vuc.danh-sach') }}" class="btn btn-purple waves-effect waves-light">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection