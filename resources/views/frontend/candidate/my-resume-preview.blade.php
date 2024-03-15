@include('frontend.includes.header')
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class=" text-lg-end">
                <a class="btn btn-primary btn-md mb-4 mb-lg-0" href="{{ route('candidate.my-resume.download') }}"><i
                        class="fa fa-download" aria-hidden="true"></i>
                    Download</a>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="resume-base bg-light user-dashboard-info-box">
                            <div class="profile">
                                <div class="jobber-user-info">
                                    <div class="profile-avatar ">
                                        <img class="img-fluid"
                                            src="public_path/uploads/profile{{ Auth::user()?->profile?->profileImage }}"
                                            alt="profile_image">
                                    </div>
                                    <div class="profile-avatar-info mt-3">
                                        <h5>{{ $user?->profile?->firstName }} {{ $user?->profile?->lastName }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="about-candidate border-top">
                                <div class="candidate-info">
                                    <h6>Name:</h6>
                                    <p> {{ $user?->profile?->firstName }} {{ $user?->profile?->lastName }}</p>
                                </div>
                                <div class="candidate-info">
                                    <h6>Email:</h6>
                                    <p>{{ $user?->email }}</p>
                                </div>
                                <div class="candidate-info">
                                    <h6>Phone:</h6>
                                    <p>{{ $user?->mobile }}</p>
                                </div>
                                <div class="candidate-info">
                                    <h6>Date Of Birth:</h6>
                                    <p>1993-12-28</p>
                                </div>
                                <div class="candidate-info">
                                    <h6>Address:</h6>
                                    <p>{{ $user?->profile?->address }}</p>
                                </div>
                                <div class="candidate-info">
                                    <h6>Gender:</h6>
                                    <p>{{ $user?->profile?->gender }}</p>
                                </div>
                                <div class="candidate-info">
                                    <h6>About Me:</h6>
                                    <p>{{ $user?->profile?->details }}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="resume-experience ps-0">
                            <div class="timeline-box">
                                <h5 class="resume-experience-title">Education:</h5>
                                <div class="jobber-candidate-timeline">
                                    <div class="jobber-timeline-item">
                                        <div class="jobber-timeline-cricle">
                                            <i class="far fa-circle"></i>
                                        </div>
                                        <div class="jobber-timeline-info">
                                            <div class="dashboard-timeline-info">
                                                <span class="jobber-timeline-time">
                                                    <p> {{ Auth::user()?->education?->start_date }} -
                                                        {{ Auth::user()?->education?->end_date }} </p>
                                                </span>
                                                <h6 class="mb-2">{{ Auth::user()?->education?->title }}</h6>
                                                <span> - {{ Auth::user()?->education?->institute }}</span>
                                                <p class="mt-2">{{ Auth::user()?->education?->description }}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="timeline-box mt-4">
                                <h5 class="resume-experience-title">Work &amp; Experience:</h5>
                                <div class="jobber-candidate-timeline">
                                    <div class="jobber-timeline-item">
                                        <div class="jobber-timeline-cricle">
                                            <i class="far fa-circle"></i>
                                        </div>
                                        <div class="jobber-timeline-info">
                                            <div class="dashboard-timeline-info">
                                                <span
                                                    class="jobber-timeline-time">{{ Auth::user()?->experience?->start_date }}
                                                    -
                                                    {{ Auth::user()?->experience?->end_date }}</span>
                                                <h6 class="mb-2">{{ Auth::user()?->experience?->title }}</h6>
                                                <span>- {{ Auth::user()?->experience?->company }}</span>
                                                <p class="mt-2">{{ Auth::user()?->experience?->description }}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="mt-4">
                                <h5>Professional Skill:</h5>


                                <div class="progress ">
                                    <div class="progress-bar dashboard-timeline-info" role="progressbar"
                                        style="width:85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar-title ">
                                            <h6 class="mb-2">{{ Auth::user()?->skill?->skill_name }}</h6>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="timeline-box mt-4">
                                <h5 class="resume-experience-title">Awards:</h5>
                                <div class="jobber-candidate-timeline">
                                    <div class="jobber-timeline-item">
                                        <div class="jobber-timeline-cricle">
                                            <i class="far fa-circle"></i>
                                        </div>
                                        <div class="jobber-timeline-info">
                                            <div class="dashboard-timeline-info">

                                                <h6 class="mb-2">{{ Auth::user()?->award?->title }}</h6>

                                                <p class="mt-2">{{ Auth::user()?->award?->description }}</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
