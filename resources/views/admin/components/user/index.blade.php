@extends('admin.layouts.app')
@section('title', 'User Manage')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Total {{ count($users) }} User</h4>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable" role="grid"
                            aria-describedby="datatable_info" style="width: 1048px;">
                            <thead class="table-light">
                                <tr class="text-primary" role="row">
                                    <th width="10%">Image</th>
                                    <th width="10%">Name</th>
                                    <th width="20%">Email</th>
                                    <th width="20%">Google Id</th>
                                    <th width="10%">Role</th>
                                    <th width="10%">Status</th>
                                    <th class="text-center" width="10%"> Created At</th>
                                    <th width="10%" class="text-center text-dark">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>Image</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->google_id }}</td>
                                        <td>
                                            {{ roleName($user->role) }}
                                        </td>
                                        <td>{{ $user->status }}</td>
                                        <td class="text-center">
                                            {{ $user->created_at->format('d-M-Y') }}
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-sm btn-primary waves-effect dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-grid-alt font-size-15 align-middle me-2"> </i>
                                                    Manage
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="{{ route('admin.user.edit', $user->id) }}"
                                                        class="dropdown-item">
                                                        <i class="bx bx-edit align-middle me-2"></i> Edit
                                                    </a>
                                                    <button onclick="userDelete()" class="dropdown-item" href="#">
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
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function userDelete(id) {
            let url = "";
            url = url.replace(':id', id);

            Swal.fire({
                title: 'Are you sure?',
                text: "You want to delete this user!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#2f4cdd',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    event.preventDefault();
                    let url = "{{ route('admin.user.destroy', ':id') }}";
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
                                    'award has been deleted.',
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
