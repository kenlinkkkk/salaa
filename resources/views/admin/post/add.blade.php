@extends('admin.layout')

@section('title')
    <title>Thêm mới bài viết</title>
@endsection

@section('stylesheet')

@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Thêm mới sản phẩm</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item">Sản phẩm</li>
                        <li class="breadcrumb-item active">Thêm mới</li>
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
                    <form method="post" action="{{ route('admin.post.create') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên <span class="text-danger">(*)</span></label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug">
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
                                <label>Trạng thái</label>
                                <div class="custom-file">
                                    <select name="category_id" class="custom-select">
                                        @foreach($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tag</label>
                            <input type="text" class="form-control" name="tag" required>
                        </div>
                        <label>Mô tả ngắn <span class="text-danger">(*)</span></label>
                        <textarea class="form-control" name="description" required></textarea>
                        <label>Nội dung <span class="text-danger">(*)</span></label>
                        <textarea id="elm1" name="content" required></textarea>
                        <p class="text-danger">Trường (*) là bắt buộc</p>
                        <div class="form-group d-flex justify-content-end">
                            <button type="submit" name="submit" class=" m-2 btn btn-sm btn-success">Thêm mới</button>
                            <a href="{{ route('admin.post.index') }}" class="m-2 btn btn-sm btn-warning">Trở về</a>
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

    <!-- init js -->
    <script src="{{ asset('assets/admin/js/pages/form-edi
tor.init.js') }}"></script>
    <script>
        bsCustomFileInput.init();
    </script>
@endsection
