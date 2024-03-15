@extends('admin.layouts.app')
@section('title', 'Users Manage')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Total {{ count($educations) }} education</h3>
                    <button type="btn" class="btn btn-primary w-md">
                        <a href="{{ route('admin.education.create') }}" class="dropdown-item">
                            Create
                        </a>
                    </button>
                </div>

                <div class="card-body">


                    <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable" role="grid"
                        aria-describedby="datatable_info" style="width: 1048px;">
                        <thead>
                            <tr class="text-primary" role="row">
                                <th width="20%"> Title</th>
                                <th width="20%"> institute</th>
                                <th width="15%"> start_date</th>
                                <th width="15%"> end_date</th>
                                <th width="20%"> description</th>
                                <th class="text-center" width="10%"> Created At</th>
                                <th width="10%" class="text-center text-dark">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($educations as $education)
                                <tr>
                                    <td>{{ $education->title }}</td>
                                    <td>{{ $education->institute }}</td>
                                    <td>{{ $education->start_date }}</td>
                                    <td>{{ $education->end_date }}</td>
                                    <td>{{ $education->description }}</td>
                                    <td class="text-center">
                                        {{ $education->created_at->format('d-M-Y') }}
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
                                                <a href="{{ route('admin.education.edit', $education) }}"
                                                    class="dropdown-item">
                                                    <i class="bx bx-edit align-middle me-2"></i> Edit
                                                </a>
                                                <button onclick="educationDelete()" class="dropdown-item" href="#">
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



@endsection
@push('scripts')
    <script>
        function educationDelete(id) {
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
                    let url = "{{ route('admin.education.destroy', ':id') }}";
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
                                    'education has been deleted.',
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
