@extends('admin.layouts.app')
@section('title', 'Users Manage')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between">
                    <h3>User Information</h3>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.userProfile.store') }}">
                        @csrf
                        <div class="mb-3 row">
                            <label for="firstName" class="col-md-2 col-form-label">First Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" id="firstName">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="lastName" class="col-md-2 col-form-label">Last Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" id="lastName">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="title" class="col-md-2 col-form-label">Title</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" id="title">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="companyName" class="col-md-2 col-form-label">Company Name</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" id="companyName">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" value="bootstrap@example.com"
                                    placeholder="Enter Email" id="email">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-md-2 col-form-label">Password</label>
                            <div class="col-md-10">
                                <input class="form-control" type="password" value="" placeholder="Enter Password"
                                    id="password">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="number" class="col-md-2 col-form-label">Number</label>
                            <div class="col-md-10">
                                <input class="form-control" type="number" value="" placeholder="Enter Number"
                                    id="number">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="dateOfBirth" class="col-md-2 col-form-label">Date Of Birth</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="2019-08-19" id="dateOfBirth">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="companyType" class="col-md-2 col-form-label">Company Type</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" id="companyType">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="address" class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" id="address">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="country" class="col-md-2 col-form-label">Country</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" id="country">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="profileImage" class="col-md-2 col-form-label">Profile Image</label>
                            <div class="col-md-10">
                                <input class="form-control w-15" type="file" value="" id="profileImage">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="coverImage" class="col-md-2 col-form-label">Cover Image</label>
                            <div class="col-md-10">
                                <input class="form-control w-15" type="file" value="" id="coverImage">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Gender</label>
                            <div class="col-md-10">
                                <select class="form-select">
                                    <option value="">select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="website" class="col-md-2 col-form-label">Website</label>
                            <div class="col-md-10">
                                <input class="form-control" type="url" value="https://getbootstrap.com"
                                    placeholder="Enter URL" id="website">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="lang" class="col-md-2 col-form-label">Language</label>
                            <div class="col-md-10">
                                <input class="form-control" type="" value="" placeholder=""
                                    id="lang">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nationality" class="col-md-2 col-form-label">Nationality</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" id="nationality">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="salary" class="col-md-2 col-form-label">Salary</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" value="" id="salary">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="details" class="col-md-2 col-form-label">Details</label>
                            <div class="col-md-10">
                                <textarea class="form-control" type="text" value="" id="details" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="socialFacebook" class="col-md-2 col-form-label">Facebook</label>
                            <div class="col-md-10">
                                <input class="form-control" type="url" value="https://facebook.com"
                                    placeholder="Enter URL" id="socialFacebook">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="socialTwitter" class="col-md-2 col-form-label">Twitter</label>
                            <div class="col-md-10">
                                <input class="form-control" type="url" value="https://twitter.com"
                                    placeholder="Enter URL" id="socialTwitter">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="socialLinkedin" class="col-md-2 col-form-label">Linkedin</label>
                            <div class="col-md-10">
                                <input class="form-control" type="url" value="https://linkedin.com"
                                    placeholder="Enter URL" id="socialLinkedin">
                            </div>
                        </div>

                        <div class="">
                            <button type="button" class="btn btn-secondary">Edit</button>
                            <button type="submit" class="btn btn-primary w-md">
                                Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>



@endsection
