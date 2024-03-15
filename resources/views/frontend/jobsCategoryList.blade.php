@extends('frontend.layouts.app')
@section('frontend_content')
    <section class="header-inner header-inner-big bg-holder text-white"
        style="background-image: url({{ asset('frontend') }}/images/bg/banner-01.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="job-search-field">
                        <div class="job-search-item">
                            <form class="form row">
                                <div class="col-lg-6">
                                    <h1 class="text-white">Listing Job</h1>
                                    <h6 class="text-white">Your next career move starts here. Choose Job from thousands of
                                        companies</h6>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="section-title mb-3 mb-lg-4">
                                <h6 class="mb-0">Showing 1-5 of <span class="text-primary"></span></h6>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        @foreach ($jobs as $job)
                            <div class="col-12">
                                <div class="job-list ">
                                    <div class="job-list-logo">
                                        <img class="img-fluid" src="images/svg/01.svg" alt="">
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
                                                    <li> <span>via</span> <a
                                                            href="">{{ $job?->user?->profile?->companyName }}</a>
                                                    </li>
                                                    <li><i class="fas fa-map-marker-alt pe-1"></i>{{ $job->address }}</li>
                                                    <li><i class="fas fa-filter pe-1"></i>{{ $job->category->name }}</li>
                                                    <li><a class="freelance" href=""><i
                                                                class="fas fa-suitcase pe-1"></i>{{ $job->jobType->name }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-list-favourite-time">
                                        <div class="">
                                            @if (Auth::user()->role == 3)
                                                @php
                                                    $apply = App\Models\Apply::where('job_id', $job->id)
                                                        ->where('user_id', Auth::id())
                                                        ->first();
                                                @endphp
                                                @if ($apply)
                                                    <a href="#"><span
                                                            class="badge bg-secondary p-2 mb-1">Applies</span></a>
                                                @else
                                                    <a href="{{ route('web.applyStore', $job->slug) }}"><span
                                                            class="badge bg-primary p-2 mb-1">Apply</span></a>
                                                @endif
                                            @endif
                                            <a href="{{ route('web.job.single', $job->slug) }}"><span
                                                    class="badge bg-primary p-2 ">View</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4 mt-md-5">
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
@endsection
