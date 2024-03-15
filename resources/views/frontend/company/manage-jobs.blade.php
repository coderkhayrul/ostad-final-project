@extends('frontend.layouts.app')
@section('frontend_content')
    @include('frontend.company.company-nav')
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
                        </div>
                        <div class="user-dashboard-table table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Applications</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)
                                        <tr>
                                            <th scope="row">{{ $job->title }}
                                                <p class="mb-1 mt-2">Expiry:
                                                    {{ $job->expireDate }}</p>
                                                <p class="mb-0">Address: {{ $job->address }}</p>
                                            </th>
                                            <td>
                                                <a href="{{ route('company.manage-candidate', $job->id) }}"
                                                    class="text-primary" data-bs-toggle="tooltip" title="Show"><i
                                                        class="far fa-eye"></i>Applies User</a>
                                            </td>
                                            <td>
                                                <span class="badge bg-success">Active</span>
                                            </td>
                                            <td>
                                                <ul class="list-unstyled mb-0 d-flex">
                                                    <li><a href="{{ route('web.job.single', $job->slug) }}"
                                                            class="text-primary" data-bs-toggle="tooltip" title="view"><i
                                                                class="far fa-eye"></i></a></li>
                                                    <li><a href="{{ route('company.job-delete', $job) }}"
                                                            class="text-danger" data-bs-toggle="tooltip" title="Delete"><i
                                                                class="far fa-trash-alt"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                {{ $jobs->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
