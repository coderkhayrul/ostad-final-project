@extends('admin.layouts.app')
@section('title', 'Pages')
@section('content')

    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Edit A page</h3>
                <a href="{{ route('admin.pages.index') }}" class="btn btn-primary btn-sm">
                    <i class="fas fa-long-arrow-alt-left me-2"></i>Back</a>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.pages.update', $page->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="old_Img" id="" value="{{ $page->thumbnail }}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input name="title" type="text" class="form-control" id="title"
                                    placeholder="Enter Type title" value="{{ $page->title }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Thumbnail</label>
                                <input name="thumbnail" type="file" class="form-control" id="thumbnail">
                                @error('thumbnail')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <div class="mb-3">
                                <img width="150px" src="{{ asset($page->thumbnail) }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea name="content" class="form-control" id="summernote" placeholder="Enter content">{{ $page->content }}</textarea>
                        @error('content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary w-md"> <i class="bx bx-sync"></i> Update</button>
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
