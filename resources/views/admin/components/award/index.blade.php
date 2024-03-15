@extends('admin.layouts.app')
@section('title', 'Users Manage')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Total {{ count($awards) }} award</h3>
                    <button type="btn" class="btn btn-primary w-md">
                        <a href="{{ route('admin.award.create') }}" class="dropdown-item">
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
                                <th width="15%"> Date</th>
                                <th width="20%"> Description</th>
                                <th width="15%"> Link</th>
                                <th class="text-center" width="10%"> Created At</th>
                                <th width="20%" class="text-center text-dark">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($awards as $award)
                                <tr>
                                    <td>{{ $award->title }}</td>
                                    <td>{{ $award->date }}</td>
                                    <td>{{ $award->description }}</td>
                                    <td>{{ $award->link }}</td>

                                    <td class="text-center">
                                        {{ $award->created_at->format('d-M-Y') }}
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
                                                <a href="{{ route('admin.award.edit', $award) }}" class="dropdown-item">
                                                    <i class="bx bx-edit align-middle me-2"></i> Edit
                                                </a>
                                                <button onclick="awardDelete()" class="dropdown-item" href="#">
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
        function awardDelete(id) {
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
                    let url = "{{ route('admin.award.destroy', ':id') }}";
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
