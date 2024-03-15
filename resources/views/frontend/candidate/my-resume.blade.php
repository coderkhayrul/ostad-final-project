@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.candidate.candidate-nav')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title-02">
                        <h3>My Resume</h3>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-primary btn-md mb-4 mb-lg-0" href="{{ route('candidate.my-resume.preview') }}">Preview
                        My Resume</a>
                </div>

                <div class="col-12">
                    <div class="user-dashboard-info-box">
                        <form action="{{ route('candidate.coverLetter.update') }}" method="POST">
                            @csrf
                            <div class="form-group col-md-12 p-0">
                                <label for="coverLetter" class="form-label">Cover Letter</label>
                                <textarea class="form-control" rows="15" name="coverLetter" id="coverLetter">{{ Auth::user()?->profile?->coverLetter }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-md btn-primary mt-2">Update</button>
                        </form>
                    </div>
                    <!-- Education Section -->
                    <div class="user-dashboard-info-box">
                        <div class="dashboard-resume-title d-flex align-items-center">
                            <div class="section-title-02 mb-sm-0">
                                <h4 class="mb-0">Education</h4>
                            </div>
                        </div>
                        <div class="collapse show" id="dateposted-01">
                            <div class="bg-light p-3 mt-4">
                                <form action="{{ route('candidate.education.update') }}" method="POST">
                                    <div class="row">
                                        @csrf
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control"
                                                value="{{ Auth::user()?->education?->title }}" name="title"
                                                id="title">
                                        </div>
                                        <div class="mb-3 col-md-6 datetimepickers">
                                            <label class="form-label">From</label>
                                            <div class="input-group date" id="datetimepicker-01"
                                                data-target-input="nearest">
                                                <input name="start_date" type="text"
                                                    class="form-control datetimepicker-input"
                                                    value="{{ Auth::user()?->education?->start_date }}"
                                                    data-target="#datetimepicker-01">
                                                <div class="input-group-append d-flex" data-target="#datetimepicker-01"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                            <label for="end_date" class="form-label">end_date</label>
                                            <div class="input-group date" id="datetimepicker-02"
                                                data-target-input="nearest">
                                                <input name="end_date" type="text"
                                                    class="form-control datetimepicker-input"
                                                    value="{{ Auth::user()?->education?->end_date }}"
                                                    data-target="#datetimepicker-02" id="end_date">
                                                <div class="input-group-append d-flex" data-target="#datetimepicker-02"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="institute" class="form-label">Institute</label>
                                            <input name="institute" type="text" class="form-control"
                                                value="{{ Auth::user()?->education?->institute }}" id="institute">
                                        </div>
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control" rows="4" id="description">{{ Auth::user()?->education?->description }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-md btn-primary float-end">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- Education Section End -->
                    <!-- Work & Experience Section -->
                    <div class="user-dashboard-info-box">
                        <div class="dashboard-resume-title d-flex align-items-center">
                            <div class="section-title-02 mb-sm-0">
                                <h4 class="mb-0">Work & Experience</h4>
                            </div>
                        </div>
                        <div class="collapse show" id="dateposted-01">
                            <div class="bg-light p-3 mt-4">
                                <form action="{{ route('candidate.experience.update') }}" method="POST">
                                    <div class="row">
                                        @csrf
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control"
                                                value="{{ Auth::user()?->experience?->title }}" name="title"
                                                id="title">
                                        </div>
                                        <div class="mb-3 col-md-6 datetimepickers">
                                            <label class="form-label">From</label>
                                            <div class="input-group date" id="datetimepicker-05"
                                                data-target-input="nearest">
                                                <input name="start_date" type="text"
                                                    class="form-control datetimepicker-input"
                                                    value="{{ Auth::user()?->experience?->start_date }}"
                                                    data-target="#datetimepicker-05">
                                                <div class="input-group-append d-flex" data-target="#datetimepicker-05"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                                            <label for="end_date" class="form-label">end_date</label>
                                            <div class="input-group date" id="datetimepicker-06"
                                                data-target-input="nearest">
                                                <input name="end_date" type="text"
                                                    class="form-control datetimepicker-input"
                                                    value="{{ Auth::user()?->experience?->end_date }}"
                                                    data-target="#datetimepicker-06" id="end_date">
                                                <div class="input-group-append d-flex" data-target="#datetimepicker-06"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="institute" class="form-label">Company</label>
                                            <input name="company" type="text" class="form-control"
                                                value="{{ Auth::user()?->experience?->company }}" id="company">
                                        </div>
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control" rows="4" id="description">{{ Auth::user()?->experience?->description }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-md btn-primary float-end">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- Work & Experience Section End -->
                    <!-- Professional Skill -->
                    <div class="user-dashboard-info-box">
                        <div class="dashboard-resume-title d-flex align-items-center">
                            <div class="section-title-02 mb-sm-0">
                                <h4 class="mb-0">Professional Skill</h4>
                            </div>

                        </div>
                        <div class="collapse show" id="dateposted-11">
                            <div class="bg-light p-3 mt-4">
                                <div class="row align-items-center">
                                    <form action="{{ route('candidate.skills.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-3 col-md-10">
                                            <label for="skill_name" class="form-label">Name</label>
                                            <input class="form-control" type="text" data-role="tagsinput"
                                                name="skill_name" value="{{ Auth::user()?->skill?->skill_name }}">
                                        </div>
                                        <div class="form-group col-md-2 mb-0 pt-2">
                                            <button class="btn btn-md btn-primary" type="submit">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Professional Skill End -->
                    <!-- Awards -->
                    <div class="user-dashboard-info-box">
                        <div class="dashboard-resume-title d-flex align-items-center">
                            <div class="section-title-02 mb-sm-0">
                                <h4 class="mb-0">Awards</h4>
                            </div>

                        </div>
                        <div class="collapse show" id="dateposted-15">
                            <div class="bg-light p-3 mt-4">
                                <div class="row">
                                    <form action="{{ route('candidate.award.update') }}" method="POST">
                                        @csrf
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="title" class="form-label">Title</label>
                                            <input name="title" type="text" class="form-control"
                                                value="{{ Auth::user()?->award?->title }}" id="title">
                                        </div>
                                        <div class="form-group mb-3 col-md-12">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control" rows="4" id="description">{{ Auth::user()?->award?->description }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-md btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Awards End -->
                </div>
            </div>
        </div>
    </section>
@endsection


@push('frontend_styles')
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/datetimepicker/datetimepicker.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        rel="stylesheet" />

    <style>
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #FF8A00;
            padding: 4px 5px !important;
            border-radius: 3px;
        }

        .bootstrap-tagsinput {
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
@endpush

@push('frontend_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
    <script src="{{ asset('frontend') }}/js/datetimepicker/moment.min.js"></script>
    <script src="{{ asset('frontend') }}/js/datetimepicker/datetimepicker.min.js"></script>
@endpush
