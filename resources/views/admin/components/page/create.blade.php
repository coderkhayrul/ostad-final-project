@extends('admin.layouts.app')
@section('title', 'Pages')
@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Create A page</h3>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-primary btn-sm"> <i class="bx bx-arrow-back"></i>
                    Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input name="title" type="text" class="form-control" id="title"
                                    placeholder="Enter Type title">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Thumbnail</label>
                                <input name="thumbnail" type="file" class="form-control" id="thumbnail">
                                @error('thumbnail')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" class="form-control" id="summernote" rows="3" placeholder="Enter content"></textarea>
                        @error('content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-md"> <i class="bx bx-save"></i> Submit</button>
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
