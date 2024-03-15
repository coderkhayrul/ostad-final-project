@extends('admin.layouts.app')
@section('title', 'subscribes Manage')
@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Total {{ count($subscribes) }} subscribe</h3>

            </div>
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable" role="grid"
                    aria-describedby="datatable_info" style="width: 1048px;">
                    <thead>
                        <tr class="text-primary" role="row">
                            <th width="10%"> Id</th>
                            <th width="90%"> Email</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subscribes as $subscribe)
                            <tr>
                                <td>{{ $subscribe->id }}</td>
                                <td>{{ $subscribe->email }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
