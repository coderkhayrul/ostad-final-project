@extends('admin.layouts.app')
@section('title', 'General Setting')
@section('content')
    <div class="col-md-12 col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Create A Category</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.general-setting.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="site_logo" class="form-label">Logo</label>
                                <input name="site_logo" type="file"
                                    class="form-control @error('site_logo') is-invalid @enderror" id="site_logo"
                                    placeholder="Enter Title">
                                @error('site_logo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div class="mb-3">
                                <img width="100px" src="{{ asset($setting->site_logo) }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="site_favicon" class="form-label">Favicon</label>
                                <input name="site_favicon" type="file"
                                    class="form-control @error('site_favicon') is-invalid @enderror" id="site_favicon"
                                    placeholder="Enter Email">
                                @error('site_favicon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center">
                            <div class="mb-3">
                                <img width="75px" src="{{ asset($setting->site_favicon) }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_title" class="form-label">Site Title</label>
                                <input name="site_title" type="text"
                                    class="form-control @error('site_title') is-invalid @enderror" id="site_title"
                                    placeholder="Enter Title" value="{{ $setting->site_title }}">
                                @error('site_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_email" class="form-label">Site Email</label>
                                <input name="site_email" type="text"
                                    class="form-control @error('site_email') is-invalid @enderror" id="site_email"
                                    placeholder="Enter Email" value="{{ $setting->site_email }}">
                                @error('site_email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_phone" class="form-label">Phone</label>
                                <input name="site_phone" type="text"
                                    class="form-control @error('site_phone') is-invalid @enderror" id="site_phone"
                                    placeholder="Enter Phone" value="{{ $setting->site_phone }}">
                                @error('site_phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_fax" class="form-label">Fax</label>
                                <input name="site_fax" type="text"
                                    class="form-control @error('site_fax') is-invalid @enderror" id="site_fax"
                                    placeholder="Enter Fax" value="{{ $setting->site_fax }}">
                                @error('site_fax')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_url" class="form-label">Url</label>
                                <input name="site_url" type="text"
                                    class="form-control @error('site_url') is-invalid @enderror" id="site_url"
                                    placeholder="Enter Url" value="{{ $setting->site_url }}">
                                @error('site_url')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_author" class="form-label">Author</label>
                                <input name="site_author" type="text"
                                    class="form-control @error('site_author') is-invalid @enderror" id="site_author"
                                    placeholder="Enter Author Name" value="{{ $setting->site_author }}">
                                @error('site_author')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_footer" class="form-label">Footer</label>
                                <textarea name="site_footer" id="" class="form-control">{{ $setting->site_footer }}</textarea>
                                @error('site_footer')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="site_address" class="form-label">Address</label>
                                <textarea name="site_address" id="" class="form-control">{{ $setting->site_address }}</textarea>
                                @error('site_address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="site_description" class="form-label">Description</label>
                                <textarea name="site_description" id="" class="form-control">{{ $setting->site_description }}</textarea>
                                @error('site_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-md"> <i class="bx bx-sync"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
