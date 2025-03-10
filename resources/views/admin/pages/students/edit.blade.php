@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
            <form action="{{ route('admin.student.update',$student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="add-course-header pb-0">
                            <h2>Add New Student</h2>
                            <div class="add-course-btns">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ route('admin.student.index') }}" class="btn btn-black">Back to
                                            Students</a>
                                    </li>
                                    <li>
                                        <button type="submit" class="btn btn-success-dark">Save</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12">
                    <div class=" profile-details">
                        <div class="settings-menu p-0">
                            <div class="page-banner student-bg-blk bg-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-12 d-flex justify-content-center">
                                            {{-- <div class="profile-info-blk">
                                            <a href="javascript:;" class="profile-info-img">
                                                <img src="assets/img/students/profile-avatar.png" alt="Profile Avatar"
                                                    class="img-fluid">
                                            </a>
                                            <h4><a href="javascript:;">Gabriel Palmer</a><span>Beginner</span></h4>
                                            <p>Student</p>
                                            <ul class="list-unstyled inline-inline profile-info-social">
                                                <li class="list-inline-item">
                                                    <a href="javascript:;">
                                                        <i class="fa-brands fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:;">
                                                        <i class="fa-brands fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:;">
                                                        <i class="fa-brands fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:;">
                                                        <i class="fa-brands fa-linkedin"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> --}}
                                            <div class="course-name d-flex align-items-center">
                                                <div class="form-group">
                                                    <div class=" profile-image-circle">
                                                        <img id="ImagePreview" class="h-100 Profile-img" src="">
                                                    </div>
                                                </div>
                                                <div class=" upload-profile-icon">
                                                    {{-- <span id="fileName"><input type="text" class="border-0 bg-white"
                                                        disabled placeholder="No file choose"> </span> --}}
                                                    <label class="">
                                                        <img src="{{ asset('img/new-icons/upload.png') }}" alt="">
                                                        <input type="file" name="image" class="InputFile"
                                                            id="myFile"
                                                            onchange="document.getElementById('ImagePreview').src = window.URL.createObjectURL(this.files[0])">
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="checkout-form personal-address add-course-info ">
                                <div class="personal-info-head">
                                    <h4>Personal Details</h4>
                                    {{-- <p>Edit your personal information and address.</p> --}}
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Register No</label>
                                            <input type="text" class="form-control" placeholder="Enter register no"
                                                name="register_no" value="{{$student->reg_no}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Name"
                                                name="name" value="{{$student->user->name}}">
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your last Name"
                                                name="l_name">
                                        </div>
                                    </div> --}}
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Course</label>
                                            <select class="form-control" name="course" id="course">
                                                <option value="">Select Course</option>
                                                @foreach($courses as $course)
                                                <option value="{{ $course->id }}"{{$purchasedCousers->course_id == $course->id ? 'selected' : '' }}>{{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                            <input type="text" name="course_fee" value="{{@$purchasedCousers->coursedtls->fees}}">
                                            <input type="text" name="course_installment" value="{{@$purchasedCousers->coursedtls->installment}}">
                                        </div>
                                    </div><div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Batch</label>
                                            <select class="form-control" name="batch" id="batch">
                                                <option value="">Select Batch</option>
                                                @foreach($batches as $batch)
                                                <option value="{{ $batch->id }}"{{$student->batch_id == $batch->id ? 'selected' : '' }}>{{ $batch->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Phone</label>
                                            <input type="text" class="form-control" placeholder="Enter your Phone"
                                                name="phone" value="{{$student->mobile_no}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Email</label>
                                            <input type="text" class="form-control" placeholder="Enter your Email"
                                                name="email" value="{{$student->user->email}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Upload Image</label>
                                            <input type="file" class="form-control" name="image" >
                                        </div>
                                        <div>
                                        <img src="{{ asset('/images/student/' . $student->image) }}" alt="Uploaded Image" style="max-width: 50%; height: auto;">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Birthday</label>
                                            <input type="date" class="form-control" placeholder="Birth of Date"
                                                name="b_day" value = "{{$student->dob}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="country" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="3">Select country</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}"{{$student->country_id == $country->id ? 'selected' : ''}}>{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Address Line 1</label>
                                            <input type="text" class="form-control" placeholder="Address Line 1"
                                                name="address_1" value="{{$student->address_1}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Address Line 2 (Optional)</label>
                                            <input type="text" class="form-control" placeholder="Address Line 2"
                                                name="address_2" value="{{$student->address_2}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">City</label>
                                            <input type="text" class="form-control" placeholder="Enter your City"
                                                name="city" value="{{$student->city}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">ZipCode</label>
                                            <input type="text" class="form-control" placeholder="Enter your Zipcode"
                                                name="zipcode" value="{{$student->pincode}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Password</label>
                                            <input type="password" class="form-control" placeholder="Enter password"
                                                name="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="1" {{$student->status == 1 ? 'selected' : ''}}>Active</option>
                                                <option value="0" {{$student->status == 0 ? 'selected' : ''}}>In-Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Payment Status</label>
                                            <select class="form-select select" name="payment_status">
                                                <option value="0">Un Paid</option>
                                                <option value="1">Paid</option>

                                            </select>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Amount</label>
                                            <input type="text" class="form-control" placeholder="Enter Amount"
                                                name="payment_amount">
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
