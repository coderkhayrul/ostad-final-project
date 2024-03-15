<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="">
            <a href="" class="waves-effect" aria-expanded="false">
                <i class="bx bx-home-circle"></i>
                <span key="t-dashboard">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="javascript: void(0);" class="waves-effect has-arrow" aria-expanded="false">
                <i class="bx bx-briefcase-alt"></i>
                <span key="t-jobs">Jobs</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('admin.jobs.index') }}" key="t-job-list"><span key="t-joblist">Job
                            List</span></a></li>
                <li><a href="{{ route('admin.categories.index') }}"><span key="t-category">Jobs Category</span></a></li>
                <li>
                    <a href="{{ route('admin.job-types.index') }}"><span key="t-job-type">Job Type</span></a>
                </li>
                <li>
                    <a href="{{ route('admin.skill.index') }}" class="waves-effect" aria-expanded="false">
                        {{-- <i class="bx bxs-brightness"></i> --}}
                        <span key="t-skills">Skills</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.applies.index') }}" class="waves-effect" aria-expanded="false">
                        <span key="t-educations">Applies</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.position.index') }}" class="waves-effect" aria-expanded="false">
                        {{-- <i class="bx bx-map"></i> --}}
                        <span key="t-positions">Positions</span>
                    </a>
                </li>

        </li>

    </ul>





    <li>
        <a href="{{ route('admin.blogs.index') }}" class="waves-effect" aria-expanded="false">
            <i class="bx bx-detail"></i>
            <span key="t-blogs">Blogs</span>
        </a>
    </li>



    <li>
        <a href="#" class="waves-effect has-arrow" aria-expanded="false">
            <i class="bx bx-user"></i>
            <span key="t-users">Users</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('admin.user.index') }}" key="t-user">All User</a></li>
            <li><a href="{{ route('admin.user.index') }}?role=2" key="t-company">Company</a></li>
            <li><a href="{{ route('admin.user.index') }}?role=3" key="t-candidate">Candidate</a></li>
        </ul>
    </li>


    <li>
        <a href="{{ route('admin.pages.index') }}" class="waves-effect" aria-expanded="false">
            <i class="bx bxs-badge-check"></i>
            <span key="t-pages">Pages</span>
        </a>
    </li>



    <li>
        <a href="javascript: void(0);" class="waves-effect has-arrow"">
            <i class="bx bx-cog"></i>
            <span key="t-setting">Setting</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('admin.general-setting') }}" key="t-genaral">General</a></li>
            <li><a href="#" key="t-banner">Banner</a></li>
        </ul>
    </li>
    <li>
        <a target="_blank" href="{{ route('web.home') }}" class="waves-effect text-danger">
            <i class="bx bx-planet"></i>
            <span key="t-educations">Website</span>
        </a>
    </li>

    <li>
        <a href="{{ route('admin.subscribe.index') }}" class="waves-effect" aria-expanded="false">
            <i class="bx bx-bell"></i>
            <span key="">Subscribes</span> </a>
        </a>
    </li>



</div>
