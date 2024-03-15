@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.candidate.candidate-nav')
    <!--=================================
                                                                                                                                                                      Dashboard Nav -->

    <!--=================================
                                                                                                                                                                      Manage Jobs -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box mb-0">
                        <div class="row mb-4">
                            <div class="col-md-7 col-sm-5 d-flex align-items-center">
                                <div class="section-title-02 mb-0 ">
                                    <h4 class="mb-0">Manage Jobs</h4>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-7 mt-3 mt-sm-0">
                                <div class="search">
                                    <i class="fas fa-search"></i>
                                    <input type="text" class="form-control" placeholder="Search....">
                                </div>
                            </div>
                        </div>
                        <div class="user-dashboard-table table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Applications</th>
                                        <th scope="col">Status</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appliedJobs as $applies)
                                        <tr>
                                            <th scope="row">{{ $applies?->job?->title }}
                                                <p class="mb-1 mt-2">Expiry: {{ $applies?->job?->expireDate }}</p>
                                                <p class="mb-0">{{ $applies?->job?->address }}</p>
                                            </th>
                                            <td>
                                                {{ $applies?->job?->user?->profile?->companyName }}
                                            </td>
                                            <td>
                                                {{ $applies->status }}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <ul class="pagination mt-3">
                                    <li class="page-item disabled me-auto">
                                        <span class="page-link b-radius-none">Prev</span>
                                    </li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1 </span>
                                        <span class="sr-only">(current)</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item ms-auto">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
