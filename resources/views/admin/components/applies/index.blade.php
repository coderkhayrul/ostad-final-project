@extends('admin.layouts.app')
@section('title', 'Users Manage')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Total {{ count($applies) }} Applies</h3>
                </div>

                <div class="card-body">


                    <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable" role="grid"
                        aria-describedby="datatable_info" style="width: 1048px;">
                        <thead>
                            <tr class="text-primary" role="row">
                                <th width="20%"> User</th>
                                <th width="20%"> Title</th>
                                <th width="15%"> Status</th>
                                <th class="text-center" width="10%"> Created At</th>
                                <th width="20%" class="text-center text-dark">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applies as $apply)
                                <tr>
                                    <td>{{ $apply->user->name }}</td>
                                    <td>{{ $apply->job->title }}</td>
                                    <td>{{ $apply->status }}</td>

                                    <td class="text-center">
                                        {{ $apply->created_at->format('d-M-Y') }}
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
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.applies.approve', $apply->id) }}">Approve</i>
                                                </a>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.applies.rejected', $apply->id) }}">Rejected</i>
                                                </a>
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
