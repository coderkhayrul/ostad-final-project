@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.candidate.candidate-nav')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('candidate.my-profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-2 d-grid">
                                <h4>Basic Information</h4>
                            </div>
                            <div class="cover-photo-contact">
                                <div class="upload-file">
                                    <label for="profileImage" class="form-label">Upload Profile Photo</label>
                                    <input name="profileImage" class="form-control" type="file" id="profileImage"
                                        value="{{ $user?->profile?->profileImage }}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-md-3">
                                    <label class="form-label">First Name</label>
                                    <input name="firstName" type="text" class="form-control"
                                        value="{{ $user?->profile?->firstName }}">
                                    @error('firstName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 col-md-3">
                                    <label class="form-label">Last Name</label>
                                    <input name="lastName" type="text" class="form-control"
                                        value="{{ $user?->profile?->lastName }}">
                                    @error('lastName')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input disabled type="email" class="form-control" value="{{ $user->email }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 col-md-6 datetimepickers">
                                    <label class="form-label">Date of birth</label>
                                    <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                        <input name="dateOfBirth" type="text" class="form-control datetimepicker-input"
                                            value="{{ $user?->profile?->dateOfBirth }}" data-target="#datetimepicker-01">
                                        <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                    @error('dateOfBirth')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input name="mobile" type="text" class="form-control" value="{{ $user->mobile }}">
                                    @error('mobile')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 col-md-6">
                                    <label class="d-block mb-3">Gender</label>
                                    <div class="form-check form-check-inline">
                                        <input {{ $user?->profile?->gender == 'male' ? 'checked' : '' }}
                                            class="form-check-input" type="radio" name="gender" id="customRadio1"
                                            value="male">
                                        <label class="form-check-label" for="customRadio1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input {{ $user?->profile?->gender == 'female' ? 'checked' : '' }}
                                            class="form-check-input" type="radio" name="gender" id="customRadio2"
                                            value="female">
                                        <label class="form-check-label" for="customRadio2">Female</label>
                                    </div>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3 col-md-6">
                                    <label class="form-label">Job Title</label>
                                    <input name="title" type="text" class="form-control"
                                        value="{{ $user?->profile?->title }}">
                                </div>
                                <div class="form-group mb-3 col-md-6 select-border">
                                    <label class="form-label">Country</label>
                                    <select name="country" class="form-control basic-select">
                                        <option value="" selected="selected" disabled>Select Country</option>
                                        @foreach (countryList() as $country)
                                            <option value="{{ $country }}"
                                                {{ $country == $user?->profile?->country ? 'selected' : '' }}>
                                                {{ $country }}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3 col-md-6">
                                    <label class="form-label">Salary</label>
                                    <input name="salary" type="text" class="form-control"
                                        value="{{ $user?->profile?->salary }}">
                                    @error('salary')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mb-0 col-md-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="details" class="form-control" rows="5"
                                        placeholder="Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.">{{ $user?->profile?->details }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-3">
                                <h4>Social Links</h4>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-md-6">
                                    <label class="form-label">Facebook</label>
                                    <input name="socialFacebook" type="text" class="form-control"
                                        value="{{ $user?->profile?->socialFacebook }}">
                                </div>
                                <div class="form-group mb-3 col-md-6">
                                    <label class="form-label">Twitter</label>
                                    <input name="socialTwitter" type="text" class="form-control"
                                        value="{{ $user?->profile?->socialTwitter }}">
                                </div>
                                <div class="form-group mb-0 col-md-12">
                                    <label class="form-label">Linkedin</label>
                                    <input name="socialLinkedin" type="text" class="form-control"
                                        value="{{ $user?->profile?->socialLinkedin }}">
                                </div>
                            </div>
                        </div>
                        <div class="user-dashboard-info-box">
                            <div class="form-group mb-0">
                                <h4 class="mb-3">Address</h4>
                                <div class="form-group mb-3">
                                    <label class="form-label">Enter Your Location</label>
                                    <input name="address" type="text" class="form-control"
                                        value="{{ $user?->profile?->address }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="company-address-map">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin"
                                        height="400" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-md btn-primary" type="submit">Save Settings</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=================================  My Profile -->
@endsection
@push('frontend_styles')
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/datetimepicker/datetimepicker.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/select2/select2.css" />
@endpush
@push('frontend_scripts')
    <script src="{{ asset('frontend') }}/js/select2/select2.full.js"></script>
    <script src="{{ asset('frontend') }}/js/datetimepicker/moment.min.js"></script>
    <script src="{{ asset('frontend') }}/js/datetimepicker/datetimepicker.min.js"></script>
@endpush
