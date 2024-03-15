@extends('frontend.layouts.app')
@section('frontend_content')
    <div class="header-inner bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary">All Categories</h2>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('web.home') }}"> Home </a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Browse
                                Categories</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="space-ptb">
        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-lg-4 col-md-6">
                        <div class="category-style-02">
                            <a href="{{ route('web.jobCategoryList', $category->slug) }}">
                                <h6 class="category-title">{{ $category->name }}</h6> <span
                                    class="category-count">{{ count($category->jobs) }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--category -->
@endsection
