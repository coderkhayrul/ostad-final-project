@extends('admin.layouts.app')
@section('title', 'Position Manage')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Position</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.position.update', $position) }}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input value="{{ $position->name }}" name="name" type="text" class="form-control"
                                id="name" placeholder="Enter Type Name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="remarks" class="form-label">Remarks</label>
                            <textarea name="remarks" class="form-control" id="remarks" rows="3" placeholder="Enter Remarks">{{ $position->remarks }}</textarea>
                            @error('remarks')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-md"> <i class="bx bx-sync me-2"></i> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
