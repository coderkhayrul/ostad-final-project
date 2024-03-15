<div class="header-inner bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="candidates-user-info">
                    <div class="jobber-user-info">
                        <div class="profile-avatar">
                            <img class="img-fluid " src="{{ asset(Auth::user()?->profile?->profileImage) }}"
                                alt="Profile">
                            {{-- <img class="img-fluid " src="{{ asset('frontend') }}/images/avatar/04.jpg" alt=""> --}}
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <div class="profile-avatar-info ms-4">
                            <h3>{{ Auth::user()->name }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sticky-top secondary-menu-sticky-top">
                    <div class="secondary-menu">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="{{ routeMatch('candidate.dashboard') }}"
                                    href="{{ route('candidate.dashboard') }}">Dashboard</a>
                            </li>
                            <li>
                                <a class="{{ routeMatch('candidate.my-profile') }}"
                                    href="{{ route('candidate.my-profile') }}">My Profile</a>
                            </li>
                            <li>
                                <a class="{{ routeMatch('candidate.change-password-page') }}"
                                    href="{{ route('candidate.change-password-page') }}">Change Password</a>
                            </li>
                            <li>
                                <a class="{{ routeMatch('candidate.my-resume') }}"
                                    href="{{ route('candidate.my-resume') }}">My Resume</a>
                            </li>
                            <li>
                                <a class="{{ routeMatch('candidate.manage-jobs') }}"
                                    href="{{ route('candidate.manage-jobs') }}">Manage Jobs</a>
                            </li>
                            <li>
                                <a href="{{ route('candidate.logout') }}">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
