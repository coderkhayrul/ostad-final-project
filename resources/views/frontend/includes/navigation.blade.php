<header class="header bg-dark">
    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
        <div class="container-fluid">
            <button id="nav-icon4" type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target=".navbar-collapse">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand" href="{{ route('web.home') }}">
                <img class="img-fluid" src="{{ asset(setting()->site_logo) }}" alt="logo">
            </a>
            {{-- <div class="navbar-collapse collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown {{ Request::is('web/home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('web.home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('web/jobs') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('web.jobs') }}">Jobs</a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('web/blogs') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('web.blogs') }}">Blog</a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('web/about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('web.about') }}">About</a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is('web/contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('web.contact') }}">Contact</a>
                    </li>
                </ul>
            </div> --}}
            <div class="navbar-collapse collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown  {{ routeMatch('web.home') }}">
                        <a class="nav-link" href="{{ route('web.home') }} ">Home</a>
                    </li>
                    <li class="nav-item dropdown {{ routeMatch('web.jobs') }}">
                        <a class="nav-link" href="{{ route('web.jobs') }}">Jobs</a>
                    </li>
                    <li class="nav-item dropdown {{ routeMatch('web.blogs') }}">
                        <a class="nav-link" href="{{ route('web.blogs') }}">Blog</a>
                    </li>
                    {{-- <li class="nav-item dropdown {{ routeMatch('web.about') }}">
                        <a class="nav-link" href="{{ route('web.about') }}">About</a>
                    </li> --}}
                    <li class="nav-item dropdown {{ routeMatch('web.contact') }}">
                        <a class="nav-link" href="{{ route('web.contact') }}">Contact</a>
                    </li>
                </ul>
            </div>

            @guest
                <div class="add-listing">
                    <div class="login d-inline-block me-4">
                        <a href="{{ route('login') }}"><i class="far fa-user pe-2"></i>Sign in</a>
                    </div>
                    <a class="btn btn-white btn-md" href="{{ route('register') }}"> <i
                            class="fas fa-plus-circle"></i>Register</a>
                </div>
            @endguest
            @auth
                <div class="add-listing">
                    <div class="login d-inline-block me-4">
                        <a
                            href="{{ Auth::user()->role == 2 ? route('company.dashboard') : (Auth::user()->role == 1 ? route('admin.dashboard') : route('candidate.dashboard')) }}"><i
                                class="{{ Auth::user()->role == 1 ? 'fas fa-tachometer-alt' : 'far fa-user' }} pe-2"></i>{{ Auth::user()->role == 1 ? 'Dashboard' : 'My Account' }}</a>
                    </div>
                    @if (Auth::user()->role == 2)
                        <a class="btn btn-white btn-md" href="{{ route('company.job-post') }}"> <i
                                class="fas fa-sign-out-alt"></i>Post Job</a>
                    @else
                        <a class="btn btn-white btn-md" href="{{ route('web.sign-out') }}"> <i
                                class="fas fa-sign-out-alt"></i>Logout</a>
                    @endif
                </div>
            @endauth
        </div>
    </nav>
</header>
