@extends('admin.layout')

@section('title')
    <title>Bài viết</title>
@endsection

@section('stylesheet')
    <link href="{{ asset('assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Bài viết</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Bài viết</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <div class="d-flex justify-content-between">
                        <p>Tag</p>
                        <a href="{{ route('admin.post.add') }}" class="btn btn-sm btn-primary mb-2">Thêm mới</a>
                    </div>
                    <table id="data-table" class="table table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Slug</th>
                            <th>Tác giả</th>
                            <th>Chuyên mục</th>
                            <th class="text-right">Lượt xem</th>
                            <th class="text-right">Ngày tạo</th>
                            <th class="text-right">Trạng thái</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ $item->author_name->name }}</td>
                                    <td>{{ $item->category->name }}</td>
                                    <td class="text-right">{{ $item->view_count }}</td>
                                    <td class="text-right">{{ $item->created_at }}</td>
                                    @if($item->status == 1)
                                        <td><span class="badge badge-pill badge-success float-right">Active</span></td>
                                    @else
                                        <td><span class="badge badge-pill badge-danger float-right">Inactive</span></td>
                                    @endif
                                    <td class="text-right pt-1 d-inline-flex">
                                        <form id="form-{{ $item->id }}" method="post" action="{{ route('admin.post.update', [$item->id]) }}">
                                            @csrf
                                            <a href="{{ route('admin.post.edit', [$item->id]) }}" class="btn btn-success btn-sm">Sửa</a>
                                            <input type="hidden" name="status" value="{{ $item->status == 1 ? 0 : 1 }}">
                                            @if($item->status == 1)
                                                <button type="submit" itemId="{{ $item->id }}" class="btn btn-danger btn-sm btn-delete">Deactive</button>
                                            @else
                                                <button type="submit" itemId="{{ $item->id }}" class="btn btn-success btn-sm btn-delete">Active</button>
                                            @endif
                                        </form>

                                        <form class="ml-4" id="form-delete-{{ $item->id }}" method="post" action="{{ route('admin.post.delete', [$item->id]) }}">
                                            @csrf
                                            <button type="submit" itemDeleteId="{{ $item->id }}" class="btn btn-danger btn-sm btn-delete-force">Xóa</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        {{ $posts->links() }}
                        </tfoot>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')
    <!-- Required datatable js -->
    <script src="{{ asset('assets/admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("body").on("click", ".btn-delete", function(e){
            e.preventDefault();
            let id = $(this).attr('itemId');
            swal.fire({
                title: "Bạn có chắc không?",
                text: "Bạn sẽ không thể khôi phục lại thông tin này khi đã xóa!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Đúng! Tôi chắc chắn!",
                cancelButtonText: "Hủy",
                closeOnConfirm: false
            }).then((result) => {
                if (result.value) {
                    $('#form-' + id).submit();
                }
            });
        });

        $("body").on("click", ".btn-delete-force", function(e){
            e.preventDefault();
            let id = $(this).attr('itemDeleteId');
            swal.fire({
                title: "Bạn có chắc không?",
                text: "Bạn sẽ không thể khôi phục lại thông tin này khi đã xóa!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Đúng! Tôi chắc chắn!",
                cancelButtonText: "Hủy",
                closeOnConfirm: false
            }).then((result) => {
                if (result.value) {
                    $('#form-delete-' + id).submit();
                }
            });
        });
    </script>
    <script>
        // $(document).ready(function () {
        //     $('#data-table').DataTable();
        // });
    </script>
@endsection
