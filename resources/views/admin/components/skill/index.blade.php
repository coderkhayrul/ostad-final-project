@extends('admin.layouts.app')
@section('title', 'Users Manage')
@section('content')
    <div class="col-md-8 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Total {{ count($skills) }} Skill</h3>
            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable" role="grid"
                    aria-describedby="datatable_info" style="width: 1048px;">
                    <thead>
                        <tr class="text-primary" role="row">
                            <th width="80%"> Name</th>

                            <th class="text-center" width="10%"> Created At</th>
                            <th width="10%" class="text-center text-dark">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill)
                            <tr>
                                <td>{{ $skill->skill_name }}</td>


                                <td class="text-center">
                                    {{ $skill->created_at->format('d-M-Y') }}
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
                                            <a href="{{ route('admin.skill.edit', $skill) }}" class="dropdown-item">
                                                <i class="bx bx-edit align-middle me-2"></i> Edit
                                            </a>
                                            <button onclick="skillDelete({{ $skill->id }})" class="dropdown-item"
                                                href="#">
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
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Create A Skill</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.skill.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control" id="name"
                            placeholder="Enter Type Name">
                    </div>
                    <div class="mb-3">
                        <label for="percentage" class="form-label">percentage</label>
                        <textarea name="percentage" class="form-control" id="percentage" rows="3" placeholder="Enter percentage"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Color</label>
                        <textarea name="color" class="form-control" id="color" rows="3" placeholder="Enter color"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
@push('scripts')
    <script>
        function skillDelete(id) {
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
                    let url = "{{ route('admin.skill.destroy', ':id') }}";
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
                                    'skill has been deleted.',
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
