<section class="banner-bg-slider">
    <div id="bg-slider">
        <img src="{{ asset('frontend') }}/images/bg-slider/01.jpg" alt="">
        <img src="{{ asset('frontend') }}/images/bg-slider/02.jpg" alt="">
        <img src="{{ asset('frontend') }}/images/bg-slider/03.jpg" alt="">
    </div>
    <div class="banner-bg-slider-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-9 col-md-9 d-flex">
                    <div class="content text-center">
                        <h1 class="text-white mb-2">Drop <span class="text-primary"> Resume &amp; Get </span> Your
                            Desired Job</h1>
                        <p class="lead mb-4 fw-normal text-white">We've got monthly and daily plans that fit your
                            needs. You can always exchange out jobs, upgrade or scale down when you need to.</p>
                        <div class="job-search-field">
                            <div class="job-search-item">
                                <form method="GET" action="{{ route('web.search') }}">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-md-0 justify-content-center">
                                            <input type="text" class="form-control" name="job_title"
                                                placeholder="Job Title, Skill">
                                            <button type="submit" class="btn btn-primary btn-lg m-0"><i
                                                    class="fas fa-search"></i> Find Jobs</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
