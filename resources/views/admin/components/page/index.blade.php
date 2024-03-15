@extends('admin.layouts.app')
@section('title', 'Page Manage')
@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Total {{ count($pages) }} Page</h3>
                <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i>Add Page</a>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable" role="grid"
                    aria-describedby="datatable_info" style="width: 1048px;">
                    <thead>
                        <tr class="text-primary" role="row">
                            <th width="10%"> Thumbnail</th>
                            <th width="20%"> Title</th>
                            <th class="text-center" width="10%"> Created At</th>
                            <th width="15%" class="text-center text-dark">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                            <tr>
                                <td>
                                    <img width="50px" src="{{ asset($page->thumbnail) }}" alt="">
                                </td>
                                <td>{{ $page->title }}</td>
                                <td class="text-center">
                                    {{ $page->created_at->format('d-M-Y') }}
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-primary waves-effect dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-grid-alt font-size-15 align-middle me-2"> </i>
                                            Manage
                                            <i class="mdi mdi-chevron-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('admin.pages.edit', $page->id) }}">
                                                <i class="bx bx-edit align-middle me-2"></i> Edit
                                            </a>

                                            <button onclick="pageDelete({{ $page->id }})" class="dropdown-item"
                                                href="">
                                                <i class="bx bx-trash-alt align-middle me-2"></i> Delete
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        function pageEdit(id) {
            var url = "{{ route('admin.pages.edit', ':id') }}";
            url = url.replace(':id', id);

            $.ajax({
                type: "GET",
                url: url,
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    $('#pagetitle').val(response.title);
                    $('#pageThumbnail').val(response.Thumbnail);
                    $('#pageEditModal form').attr('action', 'pages/' + response.id);
                    $('#pageEditModal').modal('show');
                }
            });
        }



        function pageDelete(id) {
            console.log(id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4b3e61',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    event.preventDefault();
                    let url = "{{ route('admin.pages.destroy', ':id') }}";
                    url = url.replace(':id', id);
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token: "{{ csrf_token() }}",
                        },
                        success: function(response) {

                            if (response.status) {
                                Swal.fire(
                                    'Deleted!',
                                    response.message,
                                    'success'
                                ).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                })
                            } else {
                                Swal.fire(
                                    'Deleted!',
                                    'User has not been deleted.',
                                    'error'
                                )
                            }
                        }
                    });
                }
            })
        }
    </script>
@endpush
