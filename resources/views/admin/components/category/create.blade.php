@extends('admin.layouts.app')
@section('title', 'Categories Manage')
@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Create A Category</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="file" id="img" class="form-control " name="img">
                        @error('img')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Enter Type Name">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="remarks" class="form-label">Remarks</label>
                        <textarea name="remarks" class="form-control @error('remarks') is-invalid @enderror" id="remarks" rows="3"
                            placeholder="Enter Remarks"></textarea>
                        @error('remarks')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
