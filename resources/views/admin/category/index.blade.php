@extends('admin.layout')

@section('title')
    <title>Danh mục</title>
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
                <h4 class="mb-0 font-size-18">Danh mục</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Danh mục</li>
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
                        <p>Danh mục</p>
                        <a href="{{ route('admin.category.add') }}" class="btn btn-sm btn-primary mb-2">Thêm mới</a>
                    </div>
                    <table id="data-table" class="table table-hover dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Slug</th>
                            <th>Danh mục cha</th>
                            <th>Mô tả</th>
                            <th class="text-right">Trạng thái</th>
                            <th class="text-right">Ngày tạo</th>
                            <th class="text-right">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ $item->fa_category == '' ? '': $item->category->name}}</td>
                                    <td>{{ $item->description }}</td>
                                    @if($item->status == 1)
                                        <td><span class="badge badge-pill badge-success float-right">Active</span></td>
                                    @else
                                        <td><span class="badge badge-pill badge-danger float-right">Inactive</span></td>
                                    @endif
                                    <td class="text-right">{{ $item->created_at }}</td>
                                    <td class="text-right pt-1">
                                        <form id="form-{{ $item->id }}" method="post" action="{{ route('admin.category.delete', [$item->id]) }}">
                                            @csrf
                                            <a href="{{ route('admin.category.edit', [$item->id]) }}" class="btn btn-success btn-sm">Sửa</a>
                                            <input type="hidden" name="status" value="{{ $item->status == 1 ? 0 : 1 }}">
                                            @if($item->status == 1)
                                                <button type="submit" itemId="{{ $item->id }}" class="btn btn-danger btn-sm btn-delete">Deactive</button>
                                            @else
                                                <button type="submit" itemId="{{ $item->id }}" class="btn btn-success btn-sm btn-delete">Active</button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
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
    </script>

    <script>
        $(document).ready(function () {
            $('#data-table').DataTable();
        });
    </script>


@endsection
