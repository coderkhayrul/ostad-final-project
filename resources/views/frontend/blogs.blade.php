@extends('frontend.layouts.app')
@section('frontend_content')
    <div class="header-inner bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary">Blog</h2>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Blog</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog-post-content mt-4">
            <div class="m-2">
                <h5 class="mb-3">Related Post</h5>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            @foreach ($blogs as $blog)
                                <div class=" item col-6 p-3">
                                    <div class="blog-post text-center">
                                        <div class="blog-post-image">
                                            <img class="img-fluid" alt="" src="{{ asset($blog->img) }}"
                                                style="width:550px; height:350px">
                                        </div>
                                        <div class="blog-post-content">
                                            <div class="blog-post-details">
                                                <div class="blog-post-category">
                                                    <a class="mb-1" href="#"></a>
                                                </div>
                                                <div class="blog-post-title">
                                                    <h5><a
                                                            href="{{ route('web.blog.single', $blog->slug) }}">{{ $blog->title }}</a>
                                                    </h5>
                                                </div>
                                                <div class="blog-post-description mb-0">
                                                    <p class="mb-0">
                                                        {!! Str::limit($blog->body, 80, '...') !!}
                                                    </p>
                                                </div>
                                                <div class="blog-post-link justify-content-center d-flex">
                                                    <a class="btn btn-link p-0"
                                                        href={{ route('web.blog.single', $blog->slug) }}>Continue
                                                        read</a>
                                                </div>
                                            </div>
                                            <div class="blog-post-footer">
                                                <div class="blog-post-time">
                                                    <a href="#"> <i
                                                            class="far fa-clock"></i>{{ $blog->created_at->format('d-M-Y') }}</a>
                                                </div>
                                                <div class="blog-post-author">
                                                    <span> By <a href="#"> <img class="img-fluid"
                                                                src="{{ asset($blog->user->profileImage) }}"
                                                                alt="">{{ $blog->user->name }}</a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
