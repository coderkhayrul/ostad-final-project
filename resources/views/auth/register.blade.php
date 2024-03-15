{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('frontend.layouts.app')
@section('frontend_content')
    <!-- inner banner -->
    <div class="header-inner bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-primary">Register</h2>
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Register </span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- inner banner -->

    <!-- Register -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12">
                    <div class="login-register">
                        <div class="section-title">
                            <h4 class="text-center">Create Your Account</h4>
                        </div>
                        <fieldset>
                            <legend class="px-2">Choose your Account Type</legend>
                            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
                                <li class="nav-item me-4">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#candidate" role="tab">
                                        <div class="d-flex">
                                            <div class="tab-icon">
                                                <i class="flaticon-users"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0">Candidate</h6>
                                                <p class="mb-0">I want to discover companies.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item ms-auto">
                                    <a class="nav-link" data-bs-toggle="tab" href="#employer" role="tab">
                                        <div class="d-flex">
                                            <div class="tab-icon">
                                                <i class="flaticon-suitcase"></i>
                                            </div>
                                            <div class="ms-3">
                                                <h6 class="mb-0">Employer</h6>
                                                <p class="mb-0">I want to attract the best talent.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </fieldset>
                        <div class="tab-content">
                            <div class="tab-pane active" id="candidate" role="tabpanel">
                                <form class="mt-4">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="Username">Username *</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Email Address *</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Password *</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="password2">Confirm Password *</label>
                                            <input type="password" class="form-control">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label" for="phone">Phone:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="mb-3 col-md-12 select-border">
                                            <label class="form-label" for="sector">Select Sector:</label>
                                            <select class="form-control basic-select">
                                                <option value="value 01" selected="selected">Accountancy</option>
                                                <option value="value 02">Apprenticeships</option>
                                                <option value="value 03">Banking</option>
                                                <option value="value 04">Education</option>
                                                <option value="value 05">Engineering</option>
                                                <option value="value 06">Estate Agency</option>
                                                <option value="value 07">IT & Telecoms</option>
                                                <option value="value 08">Legal</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="Remember-02">
                                                <label class="form-check-label" for="Remember-02">
                                                    you accept our Terms and Conditions and Privacy Policy
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="btn btn-primary d-block" href="#">Sign up</a>
                                        </div>
                                        <div class="col-md-6 text-md-end mt-2 text-center">
                                            <p>Already registered? <a href="{{ route('login') }}"> Sign in here</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="employer" role="tabpanel">
                                <form class="mt-4">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Username *</label>
                                            <input type="text" class="form-control" id="Username">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Email Address *</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Password *</label>
                                            <input type="password" class="form-control" id="Password">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="password2">Confirm Password *</label>
                                            <input type="password" class="form-control" id="password2">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label" for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone">
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label class="form-label" for="sector">Select Sector</label>
                                            <input type="text" class="form-control" id="sector">
                                        </div>
                                        <div class="mb-3 col-12 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="accepts-02">
                                                <label class="form-check-label" for="accepts-02">
                                                    you accept our Terms and Conditions and Privacy Policy
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="btn btn-primary d-block" href="#">Sign up</a>
                                        </div>
                                        <div class="col-md-6 text-md-end mt-2 text-center">
                                            <a href="{{ route('login') }}">Already have an account?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-4">
                            <fieldset>
                                <legend class="px-2">Login or Sign up with</legend>
                                <div class="social-login">
                                    <ul class="list-unstyled d-flex mb-0">
                                        <li class="google text-center">
                                            <a href="#"> <i class="fab fa-google me-4"></i>Login with Google</a>
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
    <!-- Register -->
@endsection
