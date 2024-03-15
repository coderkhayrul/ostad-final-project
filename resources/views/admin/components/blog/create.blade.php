@extends('admin.layouts.app')
@section('title', 'Blogs')
@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Create A blog</h3>
                <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-long-arrow-alt-left m-2"></i>Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.blogs.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="img" class="form-label">Image</label>
                                <input type="file" id="img" class="form-control " name="img">
                                @error('img')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input name="title" type="text" class="form-control" id="title"
                                    placeholder="Enter Type Title">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="body" class="form-label">description</label>
                        <textarea name="body" class="form-control" id="summernote" placeholder="Enter description"></textarea>
                        @error('body')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <style>
        .note-editable {
            background: silver !important;
        }

        .note-dropdown-menu {
            padding: 0px !important;
        }

        .note-modal-footer {
            margin-bottom: 15px !important;
        }
    </style>
@endpush
@push('scripts')
    <script>
        $('#summernote').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 250
        });
    </script>
@endpush
