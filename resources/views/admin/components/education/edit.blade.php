@extends('admin.layouts.app')
@section('title', 'Skill Manage')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Skill</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.skill.update', $skill) }}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input value="{{ $skill->name }}" name="name" type="text" class="form-control"
                                id="name" placeholder="Enter Type Name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="percentage" class="form-label">Percentage</label>
                            <textarea name="percentage" class="form-control" id="percentage" rows="3" placeholder="Enter percentage">{{ $skill->percentage }}</textarea>
                            @error('percentage')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">color</label>
                            <input value="{{ $skill->name }}" name="color" type="text" class="form-control"
                                id="color" placeholder="Enter Type color">
                            @error('color')
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
