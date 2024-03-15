@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- inner banner -->
    <div class="header-inner bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary">Login</h2>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('web.home') }}"> Home </a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Login </span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- inner banner -->

    <!-- Signin -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12">
                    <div class="login-register">
                        <div class="section-title">
                            <h4 class="text-center">Login to Your Account</h4>
                        </div>
                        <form class="mt-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label class="form-label" for="Email2">Username / Email Address</label>
                                    <input name="email" type="text" class="form-control" id="Email22">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 col-12">
                                    <label class="form-label" for="password2">Password*</label>
                                    <input name="password" type="password" class="form-control" id="password32">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button class="btn btn-primary d-grid" type="submit">Sign In</button>
                                </div>

                                <div class="col-md-6">
                                    <div class="mt-3 mt-md-0 forgot-pass">
                                        <a href="">Forgot Password?</a>
                                        <p class="mt-1">Don't have account? <a href="{{ route('register') }}">Sign
                                                Up
                                                here</a></p>
                                    </div>
                                </div>

                            </div>
                        </form>
                        <div class="mt-4">
                            <fieldset>
                                <legend class="px-2">Login or Sign up with</legend>
                                <div class="social-login">
                                    <ul class="list-unstyled d-flex mb-0">
                                        <li class="google text-center">
                                            <a href="{{ route('google.login') }}"> <i class="fab fa-google me-4"></i>Login
                                                with Google</a>
                                        </li>
                                    </ul>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signin -->
@endsection
