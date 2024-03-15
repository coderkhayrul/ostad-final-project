@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.company.company-nav')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box table-responsive pb-4 mb-0">
                        <table class="table manage-candidates-top mb-0">
                            <thead>
                                <tr>
                                    <th>Candidate Name</th>
                                    <th>Job Name</th>
                                    <th class="text-center">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applies as $apply)
                                    <tr class="candidates-list">
                                        <td class="title">
                                            <div class="thumb">
                                                <img class="img-fluid" src="{{ asset('frontend') }}/images/avatar/06.jpg"
                                                    alt="">
                                            </div>
                                            <div class="candidate-list-details">
                                                <div class="candidate-list-info">
                                                    <div class="candidate-list-title">
                                                        <h5 class="mb-0"><a href="#">{{ $apply->user->name }}</a>
                                                        </h5>
                                                    </div>
                                                    <div class="candidate-list-option">
                                                        <ul class="list-unstyled">
                                                            <li><i
                                                                    class="fas fa-filter pe-1"></i>{{ $apply?->job?->category?->name }}
                                                            </li>
                                                            <li><i
                                                                    class="fas fa-map-marker-alt pe-1"></i>{{ $apply?->user?->profile?->address }}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="candidate-list-favourite-time text-center">
                                            <span class="candidate-list-time order-1">{{ $apply->job->title }}</span>
                                        </td>
                                        <td class="candidate-list-favourite-time text-center">
                                            <span class="candidate-list-time order-1">{{ $apply->status }}</span>
                                        </td>

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-12 text-center mt-3 mb-4 mt-sm-3">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span>
                                    </li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1 </span>
                                        <span class="sr-only">(current)</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">25</a></li>
                                    <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
                                                                                                                                                      Manage Candidates -->
@endsection
