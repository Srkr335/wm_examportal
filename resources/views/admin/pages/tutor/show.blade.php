@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class="col-xl-3 col-md-4 theiaStickySidebar"
                style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px; transform: none;">


                <div class="theiaStickySidebar"
                    style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none; overflow: visible; box-sizing: border-box; min-height: 1px;">


                    <div class="theiaStickySidebar"
                        style="padding-top: 1px; padding-bottom: 1px; position: relative; transform: none;">
                        <div class=" dash-profile mt-4">
                            <div class="settings-menu p-0">
                                <div class="profile-bg">
                                    <img src="{{ asset('img/profile-bg.jpg') }}" alt="">
                                    <div class="profile-img">
                                        {{-- <a href="{{ url('admin/tutorshow') }}"> --}}
                                            {{-- <a href="#">

                                            <img class="img-fluid" alt=""
                                                src="{{ asset('/images/tutor/' . $tutor->image) }}">
                                        </a> --}}
                                    </div>
                                </div>
                                <div class="profile-group">
                                    <div class="profile-name text-center">
                                        <h4><a href="student-profile.html">{{ $tutor->first_name }}
                                                {{ $tutor->last_name }}</a></h4>
                                        <p class="mb-1">{{ $tutor->email }}
                                        </p>
                                        <p class="mb-1">{{ $tutor->mobile_no }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-sensor"
                            style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div class="resize-sensor-expand"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div
                                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 295px; height: 1291px;">
                                </div>
                            </div>
                            <div class="resize-sensor-shrink"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                </div>
                            </div>
                        </div>
                        <div class="resize-sensor"
                            style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div class="resize-sensor-expand"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div
                                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 271px; height: 342px;">
                                </div>
                            </div>
                            <div class="resize-sensor-shrink"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                </div>
                            </div>
                        </div>
                        <div class="resize-sensor"
                            style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div class="resize-sensor-expand"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div
                                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 271px; height: 342px;">
                                </div>
                            </div>
                            <div class="resize-sensor-shrink"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-9 col-md-8">
                <div class=" profile-details">
                    <div class="settings-menu p-0">
                        {{-- <div class="profile-heading">
                            <h3>Profile Details</h3>
                            <p>You have full control to manage your own account setting.</p>
                        </div> --}}
                        {{-- <div class="course-group mb-0 d-flex">
                            <div class="course-group-img d-flex align-items-center">
                                <a href="student-profile.html"><img src="assets/img/user/user11.jpg" alt=""
                                        class="img-fluid"></a>
                                <div class="course-name">
                                    <h4><a href="student-profile.html">Your avatar</a></h4>
                                    <p>PNG or JPG no bigger than 800px wide and tall.</p>
                                </div>
                            </div>
                            <div class="profile-share d-flex align-items-center justify-content-center">
                                <a href="javascript:;" class="btn btn-success">Update</a>
                                <a href="javascript:;" class="btn btn-danger">Delete</a>
                            </div>
                        </div> --}}
                        <div class="checkout-form personal-address add-course-info ">
                            <div class="personal-info-head">
                                <h4>Personal Details</h4>
                                {{-- <p>Edit your personal information and address.</p> --}}
                            </div>
                            <form action="{{ route('admin.tutor.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="user_id" value="{{ $tutor->user_id }}">
                                    <input type="hidden" name="tutor_id" value="{{ $tutor->id }}">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your first Name"
                                                name="f_name" value="{{ $tutor->first_name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your last Name"
                                                name="l_name" value="{{ $tutor->last_name }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Phone</label>
                                            <input type="text" class="form-control" placeholder="Enter your Phone"
                                                name="phone" value="{{ $tutor->mobile_no }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Email</label>
                                            <input type="text" class="form-control" placeholder="Enter your Email"
                                                name="email" value="{{ $tutor->email }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Birthday</label>
                                            <input type="text" class="form-control" placeholder="Birth of Date"
                                                name="b_day" value="{{ $tutor->dob }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="country" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="3">Select country</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}"
                                                        @if ($tutor->country_id == $country->id) selected @endif>
                                                        {{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Address Line 1</label>
                                            <input type="text" class="form-control" placeholder="Address Line 1"
                                                value="{{ $tutor->address_1 }}" name="address_1">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Address Line 2 (Optional)</label>
                                            <input type="text" class="form-control" placeholder="Address Line 2"
                                                value="{{ $tutor->address_2 }}" name="address_2">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">City</label>
                                            <input type="text" class="form-control" placeholder="Enter your City"
                                                name="city" value="{{ $tutor->city }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">ZipCode</label>
                                            <input type="text" class="form-control" placeholder="Enter your Zipcode"
                                                name="zipcode" value="{{ $tutor->pincode }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Image</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                    </div>
                                    <div class="update-profile profile-share d-flex align-items-end justify-content-end">
                                        <button type="submit" class="btn btn-success">Update Profile</button>
                                        </div>
                                </div>
                            </form>

                            <form action="{{ route('admin.tutor.destroy', $tutor->id) }}" method="POST" 
                                onsubmit="return confirm('Are you sure you want to temporary deactivate this tutor?');">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger ms-2">Deactivate Profile</button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
