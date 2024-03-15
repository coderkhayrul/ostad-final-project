@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- banner -->
    @include('frontend.includes.banner')
    <!-- banner -->

    <!-- Action-box -->

    <section class="bg-primary py-4 py-lg-5 ">
        <div class="container">
            <div class="row align-items-center">
                @auth

                    @if (Auth::user()->role == 2)
                        <div class="col-md-3 text-lg-end">
                            <a class="btn btn-dark" href="{{ route('company.job-post') }}">Post Job</a>
                        </div>
                    @elseif (Auth::user()->role == 3)
                        <div class="col-md-3 text-lg-end">
                            <a class="btn btn-dark" href="{{ route('candidate.dashboard') }}"> DASHBOARD</a>
                        </div>
                    @else
                        <div class="col-md-3 text-lg-end">
                            <a class="btn btn-dark" href="{{ route('admin.dashboard') }}"> DASHBOARD</a>
                        </div>
                    @endif

                @endauth
            </div>
        </div>
    </section>


    <!-- Action-box -->
    <!-- Top Companies -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title center">
                        <h2 class="title">Top Companies</h2>
                        <p>Data trends and insights, tips for employers, product updates and best practices</p>
                    </div>
                    <div class="owl-carousel owl-nav-bottom-center" data-nav-arrow="true" data-nav-dots="true"
                        data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1"
                        data-space="15" data-autoheight="true">
                        @foreach ($jobs as $job)
                            <div class="item">
                                <div class="employers-grid mb-4 mb-lg-0">
                                    <div class="employers-list-logo">
                                        <img class="img-fluid" src="{{ asset($job->user->profile->profileImage) }}"
                                            alt="">
                                    </div>
                                    <div class="employers-list-details">
                                        <div class="employers-list-info">
                                            <div class="employers-list-title">
                                                <h5 class="mb-0"><span>By</span><span class="text-primary">
                                                        {{ $job?->user?->profile?->companyName }}</span>
                                                </h5>
                                            </div>
                                            <div class="employers-list-option">
                                                <ul class="list-unstyled">
                                                    <li><i
                                                            class="fas fa-map-marker-alt pe-1"></i>{{ $job?->user?->profile?->address }}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="employers-list-position">
                                        <a class="btn btn-sm btn-dark">30 Open position</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Companies -->

    <!-- Browse listing -->
    <section class="space-ptb bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title center">
                        <h2 class="title">Browse Listing</h2>
                        <p>Data trends and insights, tips for employers, product updates and best practices</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-12 order-lg-2 mb-3 mb-lg-0">
                    <div class="browse-job d-flex border-0">
                        <div class="style-01">
                            <ul class="nav nav-tabs justify-content-center d-flex mt-0" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link  active" id="profile-tab" data-bs-toggle="tab" href=""
                                        role="tab" aria-controls="profile" aria-selected="false"><i
                                            class="fas fa-filter pe-1"></i> Filter Job</a>
                                </li>

                            </ul>
                        </div>
                        <div class="job-found ms-auto">
                            <span class="badge badge-lg bg-primary p-2">{{ count($jobs) }}</span>
                            <span class="badge badge-lg bg-primary p-2">Recent Job</span>
                        </div>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row mt-4">
                                @foreach ($jobs as $job)
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="job-list job-grid">
                                            <div class="job-list-logo ">
                                                <img class="img-fluid"
                                                    src="{{ asset($job?->user?->profile?->profileImage) }}" alt="">
                                            </div>
                                            <div class="job-list-details">
                                                <div class="job-list-info">
                                                    <div class="job-list-title">
                                                        <h6><a
                                                                href="{{ route('web.job.single', $job->slug) }}">{{ $job->title }}</a>
                                                        </h6>
                                                    </div>
                                                    <div class="job-list-option">
                                                        <ul class="list-unstyled">
                                                            <li> <span>via</span><span class="text-primary">
                                                                    {{ $job?->user?->profile?->companyName }}</span>
                                                            </li>
                                                            <li><i class="fas fa-map-marker-alt pe-1"></i>
                                                                {{ $job->address }}
                                                            </li>
                                                            <li><i class="fas fa-filter pe-1"></i>
                                                                {{ $job->category->name }}
                                                            </li>
                                                            <li><a class="temporary" href="#"><i
                                                                        class="fas fa-suitcase pe-1"></i>
                                                                    {{ $job->jobType->name }}</a>
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
                                            <div class="job-list-favourite-time">
                                                <a class="job-list-favourite order-2" href="#"><i
                                                        class="far fa-heart"></i></a>
                                                <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>
                                                    {{ $job->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-12 justify-content-center d-flex mt-4">
                                <a class="btn btn-primary btn-lg" href="{{ route('web.jobs') }}">View More Jobs</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 order-lg-1">
                    <div class="sidebar mb-0">
                        <div class="widget bg-white p-4">
                            <div class="widget-title widget-collapse">
                                <h5>Specialism</h5>
                            </div>
                            <div class="collapse show" id="specialism">
                                <div class="widget-content">
                                    @foreach ($categories as $category)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="{{ $category->name }}" id="specialism1">
                                            <label class="form-check-label"
                                                for="specialism1">{{ $category->name }}</label>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse listing -->
@endsection
