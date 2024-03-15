@extends('frontend.layouts.app')
@section('frontend_content')
    <section class="header-inner header-inner-big bg-holder text-white"
        style="background-image: url({{ asset('frontend') }}/images/bg/banner-01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="job-search-field">
                        <div class="job-search-item">
                            <div class="form-group left-icon mb-3 ">
                                <h1 class="text-white">Browse Jobs</h1>
                                <h6 class="text-white">Create an account and access your saved settings on any device.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- job-grid -->
    <section class="space-ptb">
        <div class="container">
            <div class="section-title center">
                <h2 class="title">Find Jobs</h2>
                <p class="mb-0">What made each of these people so successful? Motivation.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- sidebar -->
                    <div class="row mb-4">
                        <div class="col-12">
                            <h6 class="mb-0">Showing 1-12 of <span class="text-primary">{{ count($jobs) }} Jobs</span>
                            </h6>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($jobs as $job)
                            <div class="col-md-6 col-lg-4">
                                <div class="job-list job-grid">
                                    <div class="job-list-logo">
                                        <img class="img-fluid" src="{{ asset($job?->user?->profile?->profileImage) }}"
                                            alt="">
                                    </div>
                                    <div class="job-list-details">
                                        <div class="job-list-info">
                                            <div class="job-list-title">
                                                <h5 class="mb-0"><a
                                                        href="{{ route('web.job.single', $job->slug) }}">{{ $job->title }}</a>
                                                </h5>
                                            </div>
                                            <div class="job-list-option">
                                                <ul class="list-unstyled">
                                                    <li> <span>by</span><span class="text-primary">
                                                            {{ $job?->user?->profile?->companyName }}</span>

                                                    </li>
                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>{{ $job->address }}</li>
                                                    <li><i class="fas fa-filter pe-1"></i>{{ $job->category->name }}</li>
                                                    <li><a class="freelance" href="#"><i
                                                                class="fas fa-suitcase pe-1"></i>{{ $job->jobType->name }}</a>
                                                    </li>
                                                    <li><span
                                                            class="job-list-time order-1">${{ $job->minSalary }}</span>-${{ $job->maxSalary }}/{{ $job->salaryType }}
                                                    </li>
                                                </ul>
                                                <div class="">

                                                    @if (Auth::user()?->role == 3)
                                                        @php
                                                            $apply = App\Models\Apply::where('job_id', $job->id)
                                                                ->where('user_id', Auth::id())
                                                                ->first();
                                                        @endphp
                                                        @if ($apply)
                                                            <a href="#"><span
                                                                    class="badge badge-lg bg-secondary">Applies</span></a>
                                                        @else
                                                            <a href="{{ route('web.applyStore', $job->slug) }}"><span
                                                                    class="badge badge-lg bg-primary">Apply</span></a>
                                                        @endif
                                                    @endif
                                                    <a href="{{ route('web.job.single', $job->slug) }}"><span
                                                            class="badge badge-lg bg-primary">View</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-list-favourite-time"> <a class="job-list-favourite order-2"
                                            href="#"><i class="fas fa-heart"></i></a> <span
                                            class="job-list-time order-1"><i
                                                class="far fa-clock pe-1"></i>{{ $job->created_at->diffForHumans() }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span
                                        class="sr-only">(current)</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">25</a></li>
                                <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- job-grid -->
@endsection
