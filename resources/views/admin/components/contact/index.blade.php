@extends('admin.layouts.app')
@section('title', 'Users Manage')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Total {{ count($contacts) }} contact</h3>
                </div>

                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive wrap w-100  dataTable" role="grid"
                        aria-describedby="datatable_info" style="width: 1048px;">
                        <thead>
                            <tr class="text-primary" role="row">
                                <th width="10%"> Id</th>
                                <th width="20%">Name</th>
                                <th width="15%">Phone</th>
                                <th width="20%"> Subject</th>
                                <th class="text-center" width="10%"> Created At</th>
                                <th width="10%" class="text-center text-dark">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->firstName }}{{ $contact->lastName }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ Str::limit($contact->subject, 30, '...') ?? 'N/A' }}</td>
                                    <td> {{ $contact->created_at->format('d-M-Y') }}</td>
                                    <td><a href="">
                                            <i class="far fa-eye"></i> View
                                        </a></td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
