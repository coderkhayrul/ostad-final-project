@extends('frontend.layouts.app')
@section('frontend_content')
    <div class="header-inner bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{ $blog->title }}</h2>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i>
                            <span>{{ $blog->title }}</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-detail">
                        <div class="blog-post">
                            <div class="blog-post-title">
                                <div class="blog-post-footer border-0 justify-content-start">
                                    <div class="blog-post-time">
                                        <a href="#"> <i
                                                class="far fa-clock"></i>{{ $blog->created_at->diffForHumans() }}</a>
                                    </div>
                                    <div class="blog-post-author">
                                        <span> By <a href="#"> <img class="img-fluid"
                                                    src="{{ asset($blog?->user?->profile?->profileImage) }}"
                                                    alt="">{{ $blog->user->name }}</a> </span>
                                    </div>
                                </div>
                                <div class="blog-post-image">
                                    <img class="img-fluid" src="{{ asset($blog->img) }}" alt="">
                                </div>
                                <div class="blog-post-content mt-4">
                                    {!! $blog->body !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="feature-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
                        <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
                            <i class="flaticon-team"></i>
                        </div>
                        <div class="feature-info-content text-white ps-sm-4 ps-0">
                            <p>Jobseeker</p>
                            <h5 class="text-white">Looking For Job?</h5>
                        </div>
                        <a class="ms-auto align-self-center" href="#">Apply now<i
                                class="fas fa-long-arrow-alt-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-info feature-info-02 p-4 p-lg-5 bg-dark">
                        <div class="feature-info-icon mb-3 mb-sm-0 text-primary">
                            <i class="flaticon-job-3"></i>
                        </div>
                        <div class="feature-info-content text-white ps-sm-4 ps-0">
                            <p>Recruiter</p>
                            <h5 class="text-white">Are You Recruiting?</h5>
                        </div>
                        <a class="ms-auto align-self-center" href="#">Post a job<i
                                class="fas fa-long-arrow-alt-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $('#summernote').summernote({
            placeholder: 'Description',
            tabsize: 2,
            height: 250
        });
    </script>
@endpush
