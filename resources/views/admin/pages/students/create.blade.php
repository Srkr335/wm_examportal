@extends('admin.layouts.admin_app')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')
<div class="container" style="transform: none;">
    <div class="row" style="transform: none;">
        <form action="{{ route('admin.student.store') }}" method="POST" enctype="multipart/form-data">
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
                                                <label class="" style="cursor:pointer">
                                                    <img src="{{ asset('img/new-icons/upload.png') }}" alt="">
                                                    <input type="file" name="image" class="InputFile" id="myFile"
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
                                            name="register_no">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name"
                                            required>
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
                                        <label class="form-control-label">Scheme</label>
                                        <select class="form-control" name="scheme" id="scheme_id">
                                            <option value="">Select Scheme</option>
                                            @foreach($schemes as $scheme)
                                            <option value="{{ $scheme->id }}">{{ $scheme->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Category</label>
                                        <select name="category" id="category_id" class="form-control">
                                            <option value="">Choose Category</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Course</label>
                                        <select class="form-control" name="course" id="course_id">
                                            <option value="">Select Course</option>
                                        </select>
                                        <input type="hidden" name="course_fee" id="course_fee">
                                        <input type="hidden" name="course_installment" id="course_installment">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Centre</label>
                                        <select class="form-control" name="centre" id="centre_id">
                                            <option value="">Select Centre</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Batch</label>
                                        <select class="form-control" name="batch" id="batch_id">
                                            <option value="">Select Batch</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Phone</label>
                                        <input type="text" class="form-control" placeholder="Enter your Phone"
                                            name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <input type="text" class="form-control" placeholder="Enter your Email"
                                            name="email" required>
                                            <small class="text-warning">{{ $errors->first('email') }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Upload Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Birthday</label>
                                        <input type="date" class="form-control" placeholder="Birth of Date"
                                            name="b_day">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Country</label>
                                        <select class="form-select select country-select select2-hidden-accessible"
                                            name="country" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option data-select2-id="3">Select country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}" @if($country->name == 'India') selected @endif>
                                                    {{ $country->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Address Line 1</label>
                                        <input type="text" class="form-control" placeholder="Address Line 1"
                                            name="address_1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Address Line 2 (Optional)</label>
                                        <input type="text" class="form-control" placeholder="Address Line 2"
                                            name="address_2">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">City</label>
                                        <input type="text" class="form-control" placeholder="Enter your City"
                                            name="city">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">ZipCode</label>
                                        <input type="number" class="form-control" placeholder="Enter your Zipcode"
                                            name="zipcode">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter password" name="password" autocomplete="new-password">

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Status</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="1">Active</option>
                                            <option value="0">In-Active</option>
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
<script>
    $('#scheme_id').change(function() {
        getCategory();
    });
    $('#category_id').change(function() {
        getCourse();
    });
    $('#course_id').change(function() {
        getCentre();
    });
    $('#centre_id').change(function() {
        getBatch();
    });

    function getCategory() {
        var schemeId = $('#scheme_id').val();

        if (!schemeId) {
            // Clear the categories dropdown if no scheme is selected
            $('#category_id').html('<option value="">Choose Category</option>');
            return;
        }

        $.ajax({
            url: "{{ route('admin.student.select_category') }}",
            method: "get",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                scheme_id: schemeId,
            },
            success: function(res) {
                console.log(res);
                var options = '<option value="">-- Select --</option>';
                res.forEach(function(data) {
                    options += '<option value="' + data.category.id + '">' + data.category.name +
                        '</option>';
                });
                $('#category_id').html(options);
            },
            error: function(err) {
                console.error(err);
            }
        });
    }

    // function getCourse() {
    //     var catgoryId = $('#category_id').val();

    //     if (!catgoryId) {
    //         // Clear the categories dropdown if no scheme is selected
    //         $('#course_id').html('<option value="">Choose Course</option>');
    //         return;
    //     }

    //     $.ajax({
    //         url: "{{ route('admin.student.select_course') }}",
    //         method: "get",
    //         headers: {
    //             'X-CSRF-TOKEN': '{{ csrf_token() }}'
    //         },
    //         data: {
    //             cat_id: catgoryId,
    //         },
    //         success: function(res) {
    //             console.log(res);
    //             var options = '<option value="">-- Select --</option>';
    //             res.forEach(function(data) {
    //                 options += '<option value="' + data.course.id + '">' + data.course.title +
    //                     '</option>';
    //             });
    //             $('#course_id').html(options);
    //         },
    //         error: function(err) {
    //             console.error(err);
    //         }
    //     });
    // }
    function getCourse() {
        var catgoryId = $('#category_id').val();

        if (!catgoryId) {
            // Clear the courses dropdown if no category is selected
            $('#course_id').html('<option value="">Choose Course</option>');
            $('#course_fee').val(''); // Clear course_fee field
            $('#course_installment').val(''); // Clear course_installment field
            return;
        }

        $.ajax({
            url: "{{ route('admin.student.select_course') }}",
            method: "get",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                cat_id: catgoryId,
            },
            success: function(res) {
                console.log(res);
                var options = '<option value="">-- Select --</option>';
                res.forEach(function(data) {
                    options += '<option value="' + data.course.id + '">' + data.course.title +
                        '</option>';
                });
                $('#course_id').html(options);

                // Event listener for course selection to update fee and installment
                $('#course_id').on('change', function() {
                    var selectedCourseId = $(this).val();
                    var selectedCourse = res.find(function(data) {
                        return data.course.id == selectedCourseId;
                    });

                    if (selectedCourse) {
                        $('#course_fee').val(selectedCourse.course.fees); // Set course fee
                        $('#course_installment').val(selectedCourse.course
                            .installment); // Set installment
                    } else {
                        $('#course_fee').val(''); // Clear if no course is selected
                        $('#course_installment').val('');
                    }
                });
            },
            error: function(err) {
                console.error(err);
            }
        });
    }


    function getCentre() {
        var role = {!! auth()->user()->roles[0]->id !!};

        var courseId = $('#course_id').val();
        if (!courseId) {
            // Clear the categories dropdown if no scheme is selected
            $('#centre_id').html('<option value="">Choose Course</option>');
            return;
        }

        $.ajax({
            url: "{{ route('admin.student.select_centre') }}",
            method: "get",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                course_id: courseId,
            },
            success: function(res) {
                console.log(res);
                var options = '<option value="">-- Select --</option>';
                if (role == 2) {

                    res.forEach(function(data) {
                        var centreId = {!! auth()->user()->centre ? auth()->user()->centre->id : 0 !!};
                        if (centreId == data.centre.id) {
                            options += '<option value="' + data.centre.id + '">' + data.centre.name +
                                '</option>';
                            console.log(options);
                        }

                    });
                } else {

                    res.forEach(function(data) {
                        options += '<option value="' + data.centre.id + '">' + data.centre.name +
                            '</option>';
                    });
                }
                $('#centre_id').html(options);

            },
            error: function(err) {
                console.error(err);
            }
        });
    }

    function getBatch() {
        var centreId = $('#centre_id').val();

        if (!centreId) {
            // Clear the categories dropdown if no scheme is selected
            $('#batch_id').html('<option value="">Choose Course</option>');
            return;
        }

        $.ajax({
            url: "{{ route('admin.student.select_batch') }}",
            method: "get",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            data: {
                centre_id: centreId,
            },
            success: function(res) {
                console.log(res);
                var options = '<option value="">-- Select --</option>';
                res.forEach(function(data) {
                    options += '<option value="' + data.id + '">' + data.name + '</option>';
                });
                $('#batch_id').html(options);
            },
            error: function(err) {
                console.error(err);
            }
        });
    }
</script>


@endsection