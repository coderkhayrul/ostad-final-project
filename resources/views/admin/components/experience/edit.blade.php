@extends('admin.layouts.app')
@section('title', 'experience Manage')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit experience</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.experience.update', $experience) }}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input value="{{ $experience->name }}" name="name" type="text" class="form-control"
                                id="name" placeholder="Enter Type Name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="company" class="form-label">company</label>
                            <textarea name="company" class="form-control" id="company" rows="3" placeholder="Enter company">{{ $experience->company }}</textarea>
                            @error('company')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="start_date" class="form-label">start_date</label>
                            <input value="{{ $experience->name }}" name="start_date" type="text" class="form-control"
                                id="start_date" placeholder="Enter Type start_date">
                            @error('start_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="end_date" class="form-label">end_date</label>
                            <input value="{{ $experience->name }}" name="end_date" type="text" class="form-control"
                                id="end_date" placeholder="Enter Type end_date">
                            @error('end_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">description</label>
                            <input value="{{ $experience->name }}" name="description" type="text" class="form-control"
                                id="description" placeholder="Enter Type description">
                            @error('description')
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
