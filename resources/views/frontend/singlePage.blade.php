@extends('frontend.layouts.app')
@section('frontend_content')
    <div class="header-inner bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary">{{ $page?->title }}</h2>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('web.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">
                            <i class="fas fa-chevron-right"></i>
                            <span>{{ $page?->title }}</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>{{ $page?->title }}</h2>
                    </div>
                    {!! $page?->content !!}
                </div>
            </div>
        </div>
    </section>
@endsection
