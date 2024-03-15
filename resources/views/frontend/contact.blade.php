@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- inner banner -->
    <div class="header-inner bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary">Contact Us</h2>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('web.home') }}"> Home </a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Contact us </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- inner banner -->

    <!-- feature-info -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="feature-info feature-info-border p-4 text-center">
                        <div class="feature-info-icon mb-3">
                            <i class="flaticon-placeholder"></i>
                        </div>
                        <div class="feature-info-content">
                            <h5 class="text-black">Address</h5>
                            <span class="d-block">{{ setting()->site_address }}</span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="feature-info feature-info-border p-4 text-center">
                        <div class="feature-info-icon mb-3">
                            <i class="flaticon-contact fa-flip-horizontal"></i>
                        </div>
                        <div class="feature-info-content">
                            <h5 class="text-black">Phone Number</h5>
                            <span class="d-block">{{ setting()->site_phone }}</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <div class="feature-info feature-info-border p-4 text-center">
                        <div class="feature-info-icon mb-3">
                            <i class="flaticon-approval"></i>
                        </div>
                        <div class="feature-info-content">
                            <h5 class="text-black">Email</h5>
                            <span class="d-block">{{ setting()->site_email }}</span>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-info feature-info-border p-4 text-center">
                        <div class="feature-info-icon mb-3">
                            <i class="flaticon-curriculum"></i>
                        </div>
                        <div class="feature-info-content">
                            <h5 class="text-black">Fax</h5>
                            <span class="d-block">{{ setting()->site_fax }}</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-info -->

    <!-- Let’s Get In Touch -->
    <section class="space-ptb pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-02 text-center">
                        <h2>Let’s Get In Touch!</h2>
                        <p>We have completed over a 1000+ projects for five hundred clients. Give us your next project.</p>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('web.contactStore') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <input type="text" class="form-control" id="firstName" placeholder="Enter Your Fast Name"
                            name="firstName">
                        @error('firstName')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <input type="text" class="form-control" id="lastName" placeholder="Enter Your Last Name"
                            name="lastName">
                        @error('lastName')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <input type="email" class="form-control" id="email" placeholder="Enter Your Email Address"
                            name="email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <input type="text" class="form-control" id="phone" placeholder="Enter Your Phone Number"
                            name="phone">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-12 mb-0">
                        <textarea rows="5" class="form-control" id="subject" placeholder="Subject" name="subject"></textarea>
                        @error('subject')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-12 mt-2">
                        <button type="submit" class="btn btn-primary btn-md">Send your message</button>
                    </div>

                </div>
            </form>
        </div>
    </section>

    <section class="space-ptb pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-md-0 mb-4">
                        <i class="font-xlll text-primary flaticon-hand-shake"></i>
                        <div class="feature-info-content ps-4">
                            <h5>Chat To Us Online</h5>
                            <p class="mb-0">Chat to us online if you have any question.</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-md-0 mb-4">
                        <i class="font-xlll text-primary flaticon-profiles"></i>
                        <div class="feature-info-content ps-4">
                            <h5>Call Us</h5>
                            <p class="mb-0">Our support agent will work with you to meet your lending needs.</p>
                            <h5 class="mt-2 mb-0">{{ setting()->site_phone }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <i class="font-xlll text-primary flaticon-conversation-1"></i>
                        <div class="feature-info-content ps-4">
                            <h5>Read our latest news</h5>
                            <p class="mb-0">Visit our Blog page and know more about news and career tips</p>
                            <a class="mt-2 mb-0 d-block" href="{{ route('web.blogs') }}">Read Blog post </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Let’s Get In Touch -->
@endsection
