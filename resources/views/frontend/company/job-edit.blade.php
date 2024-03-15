@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.company.company-nav')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="#" method="POST">
                        @csrf
                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-4 d-inline-block">
                                <h4>Post a New Job</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group mt-0 mb-3 col-md-12">
                                            <label class="form-label">Job Title</label>
                                            <input name="title" type="text" class="form-control"
                                                value="{{ old('title') }}">
                                            @error('title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 mb-3 col-md-12">
                                            <label class="form-label">Job Description</label>
                                            <textarea name="description" id="summernote" class="form-control">{{ old('description') }}</textarea>
                                            @error('description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 mb-3 col-md-6 datetimepickers">
                                            <label class="form-label">Job Expire Date</label>
                                            <div class="input-group date" id="datetimepicker-01"
                                                data-target-input="nearest">
                                                <input value="{{ old('expireDate') }}" name="expireDate" type="text"
                                                    class="form-control datetimepicker-input" placeholder="Date"
                                                    data-target="#datetimepicker-01">
                                                <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                                </div>
                                            </div>
                                            @error('expireDate')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 mb-3 col-md-6 select-border">
                                            <label class="form-label">Job Type</label>
                                            <select name="job_type_id" class="form-control basic-select">
                                                <option value="" selected disabled>Select Type</option>
                                                @if ($job->jobTypes)
                                                    @foreach ($job_type as $jobType)
                                                        <option value="{{ $jobType->id }}">{{ $jobType->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('job_type_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 mb-3 col-md-6 select-border">
                                            <label class="form-label">Job Category</label>
                                            <select name="category_id" class="form-control basic-select">
                                                <option value="" selected disabled>Select Category</option>
                                                @if ($categories)
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 mb-3 col-md-6 select-border">
                                            <label class="form-label">Job Position</label>
                                            <select name="position_id" class="form-control basic-select">
                                                <option value="" selected disabled>Select Position</option>
                                                @if ($positions)
                                                    @foreach ($positions as $position)
                                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @error('position_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 mb-3 col-md-6 select-border">
                                            <label class="form-label">Salary Type</label>
                                            <select name="salaryType" class="form-control basic-select">
                                                <option value="" disabled selected>Select Type</option>
                                                @foreach (salaryType() as $salaryType)
                                                    <option value="{{ $salaryType }}">{{ $salaryType }}</option>
                                                @endforeach
                                            </select>
                                            @error('salaryType')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 mb-3 col-md-6">
                                            <label class="form-label">Salary Min.</label>
                                            <input name="minSalary" type="text" class="form-control"
                                                value="{{ old('minSalary') }}">
                                            @error('minSalary')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 col-md-6 mb-3 mb-md-0">
                                            <label class="form-label">Salary Max</label>
                                            <input name="maxSalary" type="text" class="form-control"
                                                value="{{ old('maxSalary') }}">
                                            @error('maxSalary')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 mb-3 col-md-6 select-border">
                                            <label class="form-label">Salary Currency</label>
                                            <select name="currency" class="form-control basic-select">
                                                <option value="" disabled selected>Select Currency</option>
                                                @foreach (currencyList() as $currency)
                                                    <option value="{{ $currency }}">{{ $currency }}</option>
                                                @endforeach
                                            </select>
                                            @error('currency')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-dashboard-info-box">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group mt-0 mb-3 col-md-6">
                                            <label class="form-label">Qualification</label>
                                            <input name="qualification" type="text" class="form-control"
                                                value="{{ old('qualification') }}">
                                            @error('qualification')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 col-md-6 mb-0">
                                            <label class="form-label">Experience</label>
                                            <input name="experience" type="text" class="form-control"
                                                value="{{ old('experience') }}">
                                            @error('experience')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 col-md-6 mb-3 mb-md-0">
                                            <label class="form-label">Gender</label>
                                            <select name="gender" class="form-control basic-select">
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-0 col-md-6 mb-3 mb-md-0">
                                            <label class="form-label">Country</label>
                                            <select name="country" class="form-control basic-select">
                                                <option value="" disabled selected>Select Country</option>
                                                @foreach (countryList() as $country)
                                                    <option value="{{ $country }}">{{ $country }}</option>
                                                @endforeach
                                            </select>
                                            @error('country')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="user-dashboard-info-box">
                            <div class="form-group mb-0">
                                <h4 class="mb-4">Address</h4>
                                <div class="form-group mb-3">
                                    <label class="form-label">Enter Your Location</label>
                                    <input name="address" type="text" class="form-control"
                                        value="{{ old('address') }}" placeholder="Enter Your location">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-lg btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('frontend_styles')
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/datetimepicker/datetimepicker.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/select2/select2.css" />

    <style>
        .note-editable {
            background: whitesmoke !important;
        }

        .note-dropdown-menu {
            padding: 0px !important;
        }

        .note-modal-footer {
            margin-bottom: 15px !important;
        }
    </style>
@endpush
@push('frontend_scripts')
    <script src="{{ asset('frontend') }}/js/select2/select2.full.js"></script>
    <script src="{{ asset('frontend') }}/js/datetimepicker/moment.min.js"></script>
    <script src="{{ asset('frontend') }}/js/datetimepicker/datetimepicker.min.js"></script>
@endpush
