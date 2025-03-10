@extends('user.layouts.app')

@section('content')
    <div class="main-wrapper" style="padding: 80px 0 30px;">


        <div class="page-banner instructor-bg-blk">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="profile-info-blk">
                            <a href="javascript:;" class="profile-info-img">
                                <img src="{{asset('img/instructor/profile-avatar.jpg')}}" alt="" class="img-fluid">
                            </a>
                            <h4><a href="javascript:;">Jenny Wilson</a><span>Beginner</span></h4>
                            <p>Instructor</p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="page-content course-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">

                        <div class="card overview-sec">
                            <div class="card-body">
                                <h5 class="subs-title">About Me</h5>
                                <p>Very well thought out and articulate communication. Clear milestones, deadlines and fast
                                    work. Patience. Infinite patience. No shortcuts. Even if the client is being careless.
                                    Some quick example text to build on the card title and bulk the card's content Moltin
                                    gives you platform.</p>
                                <p class="mb-0">As a highly skilled and successfull product development and design
                                    specialist with more than 4 Years of My experience lies in successfully conceptualizing,
                                    designing, and modifying consumer products specific to interior design and home
                                    furnishings.</p>
                            </div>
                        </div>


                        <div class="card education-sec">
                            <div class="card-body">
                                <h5 class="subs-title">Education</h5>
                                <div class="edu-wrap">
                                    <div class="edu-name">
                                        <span>B</span>
                                    </div>
                                    <div class="edu-detail">
                                        <h6>BCA - Bachelor of Computer Applications</h6>
                                        <p class="edu-duration">International University - (2004 - 2010)</p>
                                        <p>There are many variations of passages of available, but the majority alteration
                                            in some form. As a highly skilled and successfull product development and design
                                            specialist with more than 4 Years of My experience.</p>
                                    </div>
                                </div>
                                <div class="edu-wrap">
                                    <div class="edu-name">
                                        <span>M</span>
                                    </div>
                                    <div class="edu-detail">
                                        <h6>MCA - Master of Computer Application</h6>
                                        <p class="edu-duration">International University - (2010 - 2012)</p>
                                        <p>There are many variations of passages of available, but the majority alteration
                                            in some form. As a highly skilled and successfull product development and design
                                            specialist with more than 4 Years of My experience.</p>
                                    </div>
                                </div>
                                <div class="edu-wrap">
                                    <div class="edu-name">
                                        <span>D</span>
                                    </div>
                                    <div class="edu-detail">
                                        <h6>Design Communication Visual</h6>
                                        <p class="edu-duration">International University - (2012-2015)</p>
                                        <p>There are many variations of passages of available, but the majority alteration
                                            in some form. As a highly skilled and successfull product development and design
                                            specialist with more than 4 Years of My experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card education-sec">
                            <div class="card-body">
                                <h5 class="subs-title">Experience</h5>
                                <div class="edu-wrap">
                                    <div class="edu-name">
                                        <span>B</span>
                                    </div>
                                    <div class="edu-detail">
                                        <h6>Web Design &amp; Development Team Leader</h6>
                                        <p class="edu-duration">Creative Agency - (2013 - 2016)</p>
                                        <p>There are many variations of passages of available, but the majority alteration
                                            in some form. As a highly skilled and successfull product development and design
                                            specialist with more than 4 Years of My experience.</p>
                                    </div>
                                </div>
                                <div class="edu-wrap">
                                    <div class="edu-name">
                                        <span>M</span>
                                    </div>
                                    <div class="edu-detail">
                                        <h6>Project Manager</h6>
                                        <p class="edu-duration">Jobcy Technology Pvt.Ltd - (Pressent)</p>
                                        <p>There are many variations of passages of available, but the majority alteration
                                            in some form. As a highly skilled and successfull product development and design
                                            specialist with more than 4 Years of My experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card review-sec">
                            <div class="card-body">
                                <h5 class="subs-title">Reviews</h5>
                                <div class="review-item">
                                    <div class="instructor-wrap border-0 m-0">
                                        <div class="about-instructor">
                                            <div class="abt-instructor-img">
                                                <a href="instructor-profile.html">
                                                    <img src="{{asset('img/user/user1.jpg')}}" alt="img"
                                                        class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="instructor-detail">
                                                <h5><a href="{{url('instructor_profile')}}">Nicole Brown</a></h5>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="rev-info">“ This is the second Photoshop course I have completed with
                                        Cristian. Worth every penny and recommend it highly. To get the most out of this
                                        course, its best to to take the Beginner to Advanced course first. The sound and
                                        video quality is of a good standard. Thank you Cristian. “</p>
                                    <a href="javascript:;" class="btn btn-reply"><i class="feather-corner-up-left"></i>
                                        Reply</a>
                                </div>
                             
                            </div>
                        </div>


                        <div class="card comment-sec">
                            <div class="card-body">
                                <h5 class="subs-title">Add a review</h5>
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="4" class="form-control" placeholder="Your Comments"></textarea>
                                    </div>
                                    <div class="submit-section">
                                        <button class="btn submit-btn" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">

                        <div class="card overview-sec">
                            <div class="card-body overview-sec-body">
                                <h5 class="subs-title">Professional Skills</h5>
                                <div class="sidebar-tag-labels">
                                    <ul class="list-unstyled">
                                        <li><a href="javascript:;" class="">User Interface Design</a></li>
                                        <li><a href="javascript:;">Web Development</a></li>
                                        <li><a href="javascript:;">Web Design</a></li>
                                        <li><a href="javascript:;">UI Design</a></li>
                                        <li><a href="javascript:;">Mobile App Design</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="card overview-sec">
                            <div class="card-body">
                                <h5 class="subs-title">Profile Overview</h5>
                                <div class="rating-grp">
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                    </div>
                                    <div class="course-share d-flex align-items-center justify-content-center">
                                        <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="profile-overview-list">
                                    <div class="list-grp-blk d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{asset('img/instructor/courses-icon.png')}}" alt="Courses">
                                        </div>
                                        <div class="list-content-blk flex-grow-1 ms-3">
                                            <h5>32</h5>
                                            <p>Courses</p>
                                        </div>
                                    </div>
                                    <div class="list-grp-blk d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{asset('img/instructor/ttl-stud-icon.png')}}" alt="Total Students">
                                        </div>
                                        <div class="list-content-blk flex-grow-1 ms-3">
                                            <h5>11,604</h5>
                                            <p>Total Students</p>
                                        </div>
                                    </div>
                                    <div class="list-grp-blk d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="{{asset('img/instructor/review-icon.png')}}" alt="Reviews">
                                        </div>
                                        <div class="list-content-blk flex-grow-1 ms-3">
                                            <h5>12,230</h5>
                                            <p>Reviews</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card overview-sec">
                            <div class="card-body">
                                <h5 class="subs-title">Contact Details</h5>
                                <div class="contact-info-list">
                                    <div class="edu-wrap">
                                        <div class="edu-name">
                                            <span><img src="{{asset('img/instructor/email-icon.png')}}" alt="Address"></span>
                                        </div>
                                        <div class="edu-detail">
                                            <h6>Email</h6>
                                            <p><a href="javascript:;"><span class="__cf_email__"
                                                        data-cfemail="b1dbd4dfdfc8c6d8ddc2dedff1d4c9d0dcc1ddd49fd2dedc">[email&nbsp;protected]</span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="edu-wrap">
                                        <div class="edu-name">
                                            <span><img src="{{asset('img/instructor/address-icon.png')}}" alt="Address"></span>
                                        </div>
                                        <div class="edu-detail">
                                            <h6>Address</h6>
                                            <p>877 Ferry Street, Huntsville, Alabama</p>
                                        </div>
                                    </div>
                                    <div class="edu-wrap">
                                        <div class="edu-name">
                                            <span><img src="{{asset('img/instructor/phone-icon.png')}}" alt="Address"></span>
                                        </div>
                                        <div class="edu-detail">
                                            <h6>Phone</h6>
                                            <p> <a href="javascript:;">+1(452) 125-6789</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
