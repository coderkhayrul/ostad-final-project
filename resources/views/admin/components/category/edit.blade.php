@extends('admin.layouts.app')
@section('title', 'category Manage')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit category</h3>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data"
                        action="{{ route('admin.categories.update', $category) }}">
                        @csrf

                        @method('PUT')
                        <div class="mb-3">
                            <label for="img" class="form-label">Preview Image</label>
                            <img src="" id="categoryImg" style="width:100px" name="old_Img"
                                value="{{ $category->img }}">

                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Photo</label>
                            <input id="img" name="img" type="file"
                                class="form-control @error('img') is-invalid @enderror" id="img">
                            @error('img')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="categoryName" name="name" type="text" value="{{ $category->name }}"
                                class="form-control @error('name') is-invalid @enderror" id="name"
                                placeholder="Enter Type Name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="remarks" class="form-label">Remarks</label>
                            <textarea id="categoryRemarks" value="{{ $category->remarks }}" name="remarks"
                                class="form-control @error('remarks') is-invalid @enderror" id="remarks" rows="3"
                                placeholder="Enter Remarks"></textarea>
                            @error('remarks')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"> <i class="bx bx-sync"></i> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
