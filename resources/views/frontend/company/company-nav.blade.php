<div class="header-inner bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="jobber-user-info">
                    <div class="profile-avatar">
                        <img class="img-fluid " src="{{ asset(Auth::user()?->profile?->profileImage) }}" alt="">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <div class="profile-avatar-info ms-4">
                        <h3>
                            {{ Auth::user()?->profile?->companyName }}
                        </h3>
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
                        <ul>
                            <li><a class="{{ routeMatch('company.dashboard') }}"
                                    href="{{ route('company.dashboard') }}">Dashboard</a></li>
                            <li><a class="{{ routeMatch('company.my-profile') }}"
                                    href="{{ route('company.my-profile') }}">My Profile</a></li>
                            <li><a class="{{ routeMatch('company.change-password-page') }}"
                                    href="{{ route('company.change-password-page') }}">Change Password</a></li>
                            {{-- <li><a class="{{ routeMatch('company.manage-candidate') }}"
                                    href="{{ route('company.manage-candidate') }}">Manage Candidates</a></li> --}}
                            <li><a class="{{ routeMatch('company.manage-jobs') }}"
                                    href="{{ route('company.manage-jobs') }}">Manage Jobs</a></li>
                            <li><a class="{{ routeMatch('company.job-post') }}"
                                    href="{{ route('company.job-post') }}">Post New Job</a></li>
                            <li><a href="{{ route('company.logout') }}">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
