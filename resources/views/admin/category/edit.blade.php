@extends('admin.layout')

@section('title')
    <title>Chỉnh sửa danh mục</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Chỉnh sửa danh mục</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item">Danh mục</li>
                        <li class="breadcrumb-item active">Chỉnh sửa</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('admin.category.update', [1]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="name" required value="{{ $category->name }}">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ $category->slug }}" readonly>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-8">
                                <label>Ảnh nền <span class="text-danger">(*)</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="picture" required>
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label>Danh mục cha</label>
                                <div class="custom-file">
                                    <select name="status" class="custom-select">
                                        <option value="0" selected>Không có danh mục cha</option>
                                        @foreach($categories as $item)
                                            <option value="{{ $item->id }}" {{ $category->fa_category == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label>Mô tả <span class="text-danger">(*)</span></label>
                        <textarea class="form-control" name="short_description" required>{{ $category->description }}</textarea>
                        <p class="text-danger">Trường (*) là bắt buộc</p>
                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" name="submit" class=" m-2 btn btn-sm btn-success">Thêm mới</button>
                            <a href="{{ route('admin.category.index') }}" class="m-2 btn btn-sm btn-warning">Trở về</a>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')
@endsection
