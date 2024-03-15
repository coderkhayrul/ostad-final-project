@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.company.company-nav')
    <section>
        <div class="container">
            <div class="row">
                <form method="POST" action="{{ route('company.my-profile.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="oldImage" value="{{ $user?->profile?->profileImage }}">
                    <div class="col-md-12">
                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-4">
                                <h4>Basic Information</h4>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Profile Image</label>
                                    <input name="profileImage" type="file" class="form-control">
                                </div>
                                <div class="form-group col-md-6 mb-3 text-center">
                                    <img src="{{ asset($user?->profile?->profileImage) }}" alt="Profile Image">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Company Name</label>
                                    <input name="companyName" type="text" class="form-control"
                                        value="{{ $user?->profile?->companyName }}">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control" value="{{ $user->email }}">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">First Name</label>
                                    <input name="firstName" type="text" class="form-control"
                                        value="{{ $user?->profile?->firstName }}">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input name="lastName" type="text" class="form-control"
                                        value="{{ $user?->profile?->lastName }}">
                                </div>
                                <div class="form-group col-md-6 mb-3 datetimepickers">
                                    <label class="form-label">Date of Founded</label>
                                    <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                        <input name="dateOfFounded" type="text" class="form-control datetimepicker-input"
                                            value="{{ $user?->profile?->dateOfFounded }}" data-target="#datetimepicker-01">
                                        <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Phone</label>
                                    <input name="mobile" type="text" class="form-control" value="{{ $user->mobile }}">
                                </div>
                                <div class="form-group col-md-6 mb-3 select-border">
                                    <label class="form-label">Country</label>
                                    <select name="country" class="form-control basic-select">
                                        @foreach (countryList() as $country)
                                            <option value="{{ $country }}">{{ $country }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6 mb-3 mb-md-0">
                                    <label class="form-label">Website</label>
                                    <input name="website" type="text" class="form-control"
                                        value="{{ $user?->profile?->website }}">
                                </div>
                                <div class="form-group col-md-12 mb-0">
                                    <label class="form-label">Description</label>
                                    <textarea name="details" class="form-control" rows="5"
                                        placeholder="Use a past defeat as a motivator. Remind yourself you have nowhere to go except up as you have already been at the bottom">{{ $user?->profile?->details }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-3">
                                <h4>Social Links</h4>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Facebook</label>
                                    <input name="socialFacebook" type="text" class="form-control"
                                        value="{{ $user?->profile?->socialFacebook }}">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label">Twitter</label>
                                    <input name="socialTwitter" type="text" class="form-control"
                                        value="{{ $user?->profile?->socialTwitter }}">
                                </div>
                                <div class="form-group col-md-12 mb-0">
                                    <label class="form-label">Linkedin</label>
                                    <input name="socialLinkedin" type="text" class="form-control"
                                        value="{{ $user?->profile?->socialLinkedin }}">
                                </div>
                            </div>
                        </div>
                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-3">
                                <h4>Address</h4>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 mb-3">
                                    <label class="form-label">Enter Your location</label>
                                    <input name="address" type="text" class="form-control"
                                        value="{{ $user?->profile?->address }}" placeholder="Enter Your  location">
                                </div>
                            </div>
                            <div class="location-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3027.6199313908783!2d-74.09468078428908!3d40.63826305005958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s214+West+Arnold+St.+New+York%2C+NY+10002!5e0!3m2!1sen!2sin!4v1559195958100!5m2!1sen!2sin"
                                    height="370" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">Save Settings</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
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
