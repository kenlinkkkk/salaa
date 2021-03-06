@extends('admin.layout')

@section('title')
    <title>Sửa thông tin sản phẩm</title>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Sửa thông tin sản phẩm</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item">Sản phẩm</li>
                        <li class="breadcrumb-item active">Sửa</li>
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
                    <form method="post" action="{{ route('admin.product.update', [$product->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="title" value="{{ $product->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Short tag</label>
                            <input type="text" class="form-control" name="short_tag" value="{{ $product->short_tag }}">
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-8">
                                <label>Ảnh nền</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="picture">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12 col-md-4">
                                <label>Trạng thái</label>
                                <div class="custom-file">
                                    <select name="status" class="custom-select">
                                        <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Inactive</option>
                                        <option value="2" {{ $product->status == 2 ? 'selected' : '' }}>Nháp</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <label>Mô tả ngắn <span class="text-danger">(*)</span></label>
                        <textarea id="elm2" name="short_description" required>{!! $product->short_description !!}</textarea>
                        <label>Nội dung <span class="text-danger">(*)</span></label>
                        <textarea id="elm1" name="content" required>{!! $product->content !!}</textarea>
                        <p class="text-danger">Trường (*) là bắt buộc</p>
                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" name="submit" class=" m-2 btn btn-sm btn-success">Cập nhật</button>
                            <a href="{{ route('admin.product.index') }}" class="m-2 btn btn-sm btn-warning">Trở về</a>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')
    <!--tinymce js-->
    <script src="{{ asset('assets/admin/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <!-- Summernote js -->
    {{--    <script src="{{ asset('assets/admin/libs/summernote/summernote-bs4.min.js') }}"></script>--}}

    <!-- init js -->
    <script src="{{ asset('assets/admin/js/pages/form-editor.init.js') }}"></script>
    <script>
        bsCustomFileInput.init();
    </script>
@endsection
