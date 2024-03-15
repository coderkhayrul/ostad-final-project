@extends('admin.layouts.app')
@section('title', 'user Manage')
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Edit user</h3>
                    <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.user.update', $user->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="firstName" class="col-md-2 col-form-label">First Name</label>
                                        <input name="firstName" class="form-control" type="text"
                                            value="{{ $user?->profile?->firstName }}" id="firstName">
                                        @error('firstName')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="lastName" class="col-md-2 col-form-label">Last Name</label>
                                        <input name="lastName" class="form-control" type="text"
                                            value="{{ $user?->profile?->lastName }}" id="firstName">
                                        @error('lastName')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="title" class="col-md-2 col-form-label">Title</label>
                                        <input name="title" class="form-control" type="text" value=""
                                            id="title" value="{{ $user?->profile?->title }}">
                                        @error('title')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="companyName" class="col-md-2 col-form-label">Company Name</label>
                                        <input name="companyName" class="form-control" type="text"
                                            value="{{ $user?->profile?->companyName }}" id="companyName">
                                        @error('companyName')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="col-md-2 col-form-label">Email</label>
                                        <input name="email" class="form-control" type="email"
                                            value="{{ $user->email }}" placeholder="Enter Email" id="email">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="mobile" class="col-md-2 col-form-label">Mobile</label>
                                        <input class="form-control" name="mobile" type="text"
                                            value="{{ $user->mobile }}" placeholder="Enter Mobile" id="mobile">
                                        @error('mobile')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="country" class="col-md-2 col-form-label">Country</label>
                                        <input name="country" class="form-control" type="text" id="country"
                                            value="{{ $user?->profile?->country }}">
                                        @error('country')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="dateOfFounded" class="col-md-2 col-form-label">Date Of Found</label>
                                        <input name="dateOfFounded" class="form-control" type="date"
                                            value="{{ $user?->profile?->dateOfFounded }}" id="dateOfFounded">
                                        @error('dateOfFounded')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="companyType" class="col-md-2 col-form-label">Company Type</label>
                                        <input name="companyType" class="form-control" type="text"
                                            value="{{ $user?->profile?->companyType }}" id="companyType">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="address" class="col-md-2 col-form-label">Address</label>
                                        <input class="form-control" type="text" name="address"
                                            value="{{ $user?->profile?->address }}" id="address">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="profileImage" class="col-md-2 col-form-label">Profile Image</label>
                                        <input class="form-control w-15" type="file" id="profileImage"
                                            name="profileImage">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="coverImage" class="col-md-2 col-form-label">Cover Image</label>
                                        <input class="form-control w-15" type="file" value="" id="coverImage"
                                            name="coverImage">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="col-md-2 col-form-label">Gender</label>
                                        <select name="gender" class="form-select">
                                            <option value="">select</option>
                                            <option value="male"
                                                {{ $user?->profile?->gener == 'male' ? 'selected' : '' }}>Male</option>
                                            <option value="female"
                                                {{ $user?->profile?->gener == 'female' ? 'selected' : '' }}>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="salary" class="col-md-2 col-form-label">Salary</label>
                                        <input class="form-control" type="text"
                                            value="{{ $user?->profile?->salary }}" id="salary" name="salary">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="website" class="col-md-2 col-form-label">Website</label>
                                        <input class="form-control" type="text"
                                            value="{{ $user?->profile?->website }}" name="website"
                                            placeholder="Enter URL" id="website">

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="language" class="col-md-2 col-form-label">Language</label>
                                        <input class="form-control" type="text" name="language"
                                            value="{{ $user?->profile?->language }}" placeholder="" id="language">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="nationality" class="col-md-2 col-form-label">Nationality</label>
                                        <input class="form-control" type="text" name="nationality"
                                            value="{{ $user?->profile?->nationality }}" id="nationality">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="socialFacebook" class="col-md-2 col-form-label">Facebook</label>
                                        <input class="form-control" type="text"
                                            value="{{ $user?->profile?->socialFacebook }}" placeholder="Enter URL"
                                            id="socialFacebook" name="socialFacebook">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="socialTwitter" class="col-md-2 col-form-label">Twitter</label>
                                        <input class="form-control" type="text" name="socialTwitter"
                                            value="{{ $user?->profile?->socialTwitter }}" placeholder="Enter URL"
                                            id="socialTwitter">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="socialLinkedin" class="col-md-2 col-form-label">Linkedin</label>
                                        <input class="form-control" type="text" name="socialLinkedin"
                                            value="{{ $user?->profile?->socialLinkedin }}" placeholder="Enter URL"
                                            id="socialLinkedin">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3">
                                    <label for="details" class="col-md-2 col-form-label">Details</label>
                                    <textarea name="details" class="form-control" type="text" rows="5"
                                        value="{{ $user?->profile?->details }}"></textarea>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
