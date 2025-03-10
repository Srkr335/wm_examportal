@extends('user.layouts.app')

@section('content')
    <div class="main-wrapper" style="transform: none; padding: 80px 0 30px;">

        <div class="page-banner student-bg-blk">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="profile-info-blk">
                            <a href="javascript:;" class="profile-info-img">
                                <img src="{{asset('img/students/profile-avatar.png')}}" alt="Profile Avatar" class="img-fluid">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="page-content course-sec" style="transform: none;">
            <div class="container" style="transform: none;">
                <div class="row" style="transform: none;">
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
                            <div class="card-body pb-0">
                                <h5 class="subs-title">Courses</h5>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 d-flex">
                                        <div class="course-box course-design d-flex ">
                                            <div class="product">
                                                <div class="product-img">
                                                    <a href="course-details.html">
                                                        <img class="img-fluid" alt=""
                                                            src="assets/img/course/course-10.jpg">
                                                    </a>
                                                    <div class="price">
                                                        <h3>$300 <span>$99.00</span></h3>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="course-group d-flex">
                                                        <div class="course-group-img d-flex">
                                                            <a href="{{url('/instructor_profile')}}"><img
                                                                    src="{{asset('img/user/user1.jpg')}}" alt=""
                                                                    class="img-fluid"></a>
                                                            <div class="course-name">
                                                                <h4><a href="{{url('/instructor_profile')}}">Rolands R</a></h4>
                                                                <p>Instructor</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="title product-content-title"><a
                                                            href="{{url('/productShow')}}">Information About UI/UX Design
                                                            Degree</a></h3>
                                                    <div class="course-info d-flex align-items-center border-0 m-0">
                                                        <div class="rating-img d-flex align-items-center">
                                                            <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                            <p>12+ Lesson</p>
                                                        </div>
                                                        <div class="course-view d-flex align-items-center">
                                                            <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                                            <p>9hr 30min</p>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="d-inline-block average-rating"><span>4.0</span>
                                                            (15)</span>
                                                    </div>
                                                    <div class="all-btn d-flex align-items-center">
                                                        <a href="{{url('/productcheckout')}}" class="btn btn-primary buynow">BUY NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 d-flex">
                                        <div class="course-box course-design d-flex ">
                                            <div class="product">
                                                <div class="product-img">
                                                    <a href="course-details.html">
                                                        <img class="img-fluid" alt=""
                                                            src="assets/img/course/course-10.jpg">
                                                    </a>
                                                    <div class="price">
                                                        <h3>$300 <span>$99.00</span></h3>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="course-group d-flex">
                                                        <div class="course-group-img d-flex">
                                                            <a href="{{url('/instructor_profile')}}"><img
                                                                    src="{{asset('img/user/user1.jpg')}}" alt=""
                                                                    class="img-fluid"></a>
                                                            <div class="course-name">
                                                                <h4><a href="{{url('/instructor_profile')}}">Rolands R</a></h4>
                                                                <p>Instructor</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="title product-content-title"><a
                                                            href="{{url('/productShow')}}">Information About UI/UX Design
                                                            Degree</a></h3>
                                                    <div class="course-info d-flex align-items-center border-0 m-0">
                                                        <div class="rating-img d-flex align-items-center">
                                                            <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                            <p>12+ Lesson</p>
                                                        </div>
                                                        <div class="course-view d-flex align-items-center">
                                                            <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                                            <p>9hr 30min</p>
                                                        </div>
                                                    </div>
                                                    <div class="rating">
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star filled"></i>
                                                        <i class="fas fa-star"></i>
                                                        <span class="d-inline-block average-rating"><span>4.0</span>
                                                            (15)</span>
                                                    </div>
                                                    <div class="all-btn d-flex align-items-center">
                                                        <a href="{{url('/productcheckout')}}" class="btn btn-primary buynow">BUY NOW</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                <img src="{{asset('img/user/user1.jpg')}}" alt="img" class="img-fluid">
                                            </div>
                                            <div class="instructor-detail">
                                                <h5>Nicole Brown</h5>
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
                                    <a href="javascript:void(0);" class="btn btn-reply"><i
                                            class="feather-corner-up-left"></i> Reply</a>
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
                                    <div class="">
                                        <button class="btn submit-btn " type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 theiaStickySidebar"
                        style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">






                        <div class="theiaStickySidebar"
                            style="padding-top: 0px; padding-bottom: 1px; position: relative; transform: none;">
                            {{-- <div class="card overview-sec">
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
                            </div> --}}
                            <div class="card overview-sec">
                                <div class="card-body">
                                    <h5 class="subs-title">Contact Details</h5>
                                    <div class="contact-info-list">
                                        <div class="edu-wrap">
                                            <div class="edu-name">
                                                <span><img src="{{asset('img/instructor/email-icon.png')}}"
                                                        alt="Address"></span>
                                            </div>
                                            <div class="edu-detail">
                                                <h6>Email</h6>
                                                <p><a href="javascript:;"><span class="__cf_email__"
                                                            data-cfemail="6a000f0404131d03061905042a0f120b071a060f44090507">[email&nbsp;protected]</span></a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="edu-wrap">
                                            <div class="edu-name">
                                                <span><img src="{{asset('img/instructor/address-icon.png')}}"
                                                        alt="Address"></span>
                                            </div>
                                            <div class="edu-detail">
                                                <h6>Address</h6>
                                                <p>877 Ferry Street, Huntsville, Alabama</p>
                                            </div>
                                        </div>
                                        <div class="edu-wrap">
                                            <div class="edu-name">
                                                <span><img src="{{asset('img/instructor/phone-icon.png')}}"
                                                        alt="Address"></span>
                                            </div>
                                            <div class="edu-detail">
                                                <h6>Phone</h6>
                                                <p> <a href="javascript:;">+1(452) 125-6789</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-sensor"
                                style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div class="resize-sensor-expand"
                                    style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div
                                        style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 306px; height: 586px;">
                                    </div>
                                </div>
                                <div class="resize-sensor-shrink"
                                    style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div
                                        style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
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
