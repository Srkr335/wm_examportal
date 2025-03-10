@extends('user.layouts.app')

@section('content')
    <section class="home-slide-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="home-slide-five-face" data-aos="fade-down">
                        <div class="home-slide-five-text">
                            <h1> Improve Your <span style="color:#2766CF">Skills</span> Faster</h1>
                            <p>Speed Up The Skill Acquisition Process By Finding Unlimited Courses</p>
                        </div>

                        <div class="banner-content-five">
                            <form class="form" action="">
                                <div class="form-inner-five">
                                    <div class="input-group">
                                        <span class="drop-detail-five">
                                            <select class="form-select select">
                                                <option>Category</option>
                                                <option>Angular</option>
                                                <option>Node Js</option>
                                                <option>React</option>
                                                <option>Python</option>
                                            </select>
                                        </span>

                                        <input type="" class="form-control"
                                            placeholder="Search School, Online eductional centers, etc" />

                                        <button class="btn btn-primary sub-btn" type="submit">
                                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="review-five-group">
                            <div class="review-user-five d-flex align-items-center">
                                <ul class="review-users-list">
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                            data-bs-original-title="leader 1"><img
                                                src="{{ asset('img/profiles/avatar-01.jpg') }}" alt="img" /></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                            data-bs-original-title="leader 2"><img
                                                src="{{ asset('img/profiles/avatar-02.jpg') }}" alt="img" /></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                            data-bs-original-title="leader 3"><img
                                                src="{{ asset('img/profiles/avatar-03.jpg') }}" alt="img" /></a>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title
                                            data-bs-original-title="leader 3"><img
                                                src="{{ asset('img/profiles/avatar-04.jpg') }}" alt="img" /></a>
                                    </li>
                                </ul>
                                <div class="review-rating-five">
                                    <div class="rating-star">
                                        <p>5.5</p>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="rate-head-five d-flex align-items-center course-count">
                                <h2><span class="counterUp">10</span>+</h2>
                                <p>Years of experience tutors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="banner-slider-img">
                        <div class="row">
                            <div class="col-lg-12 align-self-end">
                                <div class="slider-five-two " data-aos="fade-down">
                                    <img class="w-100" src="{{ asset('img/img/drowUp.png') }}" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="vector-shapes-five">
                <img src="{{ asset('img/bg/banner-vector.svg') }}" alt />
            </div>
        </div>
    </section>


    <section class="section student-course home-three-course homeFourCourses ">
        <div class="container">
            <div class="course-widget-three">
                <div class="row">
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <img class="img-fluid" src="{{ asset('img/icon-three/course-01.svg') }}" alt>
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-blue"><span class="counterUp">10</span>K</h4>
                                        <p>Online Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <img class="img-fluid" src="{{ asset('img/icon-three/course-02.svg') }}" alt>
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-yellow"><span class="counterUp">200</span>+</h4>
                                        <p>Expert Tutors</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three">
                            <div class="align-items-center">
                                <div class="course-count-three course-count ms-0">
                                    <div class="course-img">
                                        <img class="img-fluid" src="{{ asset('img/icon-three/course-03.svg') }}" alt>
                                    </div>
                                    <div class="course-content-three">
                                        <h4 class="text-info"><span class="counterUp">6</span>K+</h4>
                                        <p>Ceritified Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up">
                        <div class="course-details-three mb-0">
                            <div class="align-items-center">
                                <div class="course-count-three">
                                    <div class="course-img">
                                        <img class="img-fluid" src="{{ asset('img/icon-three/course-04.svg') }}" alt>
                                    </div>
                                    <div class="course-content-three course-count ms-0">
                                        <h4 class="text-green"><span class="counterUp">60</span>K +</h4>
                                        <p>Online Students</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <section class="home-three-trending ">
        <div class="container">
          <div class="row">
            <div class="container">
                <div class="header-five-title text-center section-header-title aos-init aos-animate" data-aos="fade-up">
                    <div class="row align-items-center d-flex justify-content-between mb-4">
                        <div class="col-lg-12">
                            <h2 class="">Choose favourite Course Shorts</h2>
                        </div>
                    </div>
                </div>

              <div
                class="owl-carousel home-three-favourite-carousel owl-theme aos"
              >
        <div class="favourite-box p-0 " data-aos="fade-down">
                        <img src="{{asset('img/profiles/avatar-02.jpg')}}" class="position-relative" alt="">
                        <button type="button" class="btn  position-absolute btn-play" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="ri-play-circle-line text-white fs-1"></i> </button>
                <div class="p-3 categories-content">
                    <h5>Python Language</h5>
                    <p class="mb-0 ">Python Language</p>
                </div>
                </div>
        <div class="favourite-box p-0 " data-aos="fade-down">
            <div class="">
                        <img src="{{asset('img/profiles/avatar-02.jpg')}}" alt="">
                       
                            <button type="button" class="btn  position-absolute btn-play" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="ri-play-circle-line text-white fs-1"></i> </button>
                        </div>
                <div class="p-3 categories-content">
                    <h5>Python Language</h5>
                    <p class="mb-0 ">Python Language</p>
                </div>
                </div>
        <div class="favourite-box p-0 " data-aos="fade-down">
                        <img src="{{asset('img/profiles/avatar-02.jpg')}}" alt="">
                        <button type="button" class="btn  position-absolute btn-play" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="ri-play-circle-line text-white fs-1"></i> </button>
                <div class="p-3 categories-content">
                    <h5>Python Language</h5>
                    <p class="mb-0 ">Python Language</p>
                </div>
                </div>
        <div class="favourite-box p-0 " data-aos="fade-down">
                        <img src="{{asset('img/profiles/avatar-02.jpg')}}" alt="">
                        <button type="button" class="btn  position-absolute btn-play" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="ri-play-circle-line text-white fs-1"></i> </button>
                <div class="p-3 categories-content">
                    <h5>Python Language</h5>
                    <p class="mb-0 ">Python Language</p>
                </div>
                </div>
        <div class="favourite-box p-0 " data-aos="fade-down">
                        <img src="{{asset('img/profiles/avatar-02.jpg')}}" alt="">
                        <button type="button" class="btn  position-absolute btn-play" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="ri-play-circle-line text-white fs-1"></i> </button>
                <div class="p-3 categories-content">
                    <h5>Python Language</h5>
                    <p class="mb-0 ">Python Language</p>
                </div>
                </div>
        <div class="favourite-box p-0 " data-aos="fade-down">
                        <img src="{{asset('img/profiles/avatar-02.jpg')}}" alt="">
                        <button type="button" class="btn  position-absolute btn-play" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="ri-play-circle-line text-white fs-1"></i> </button>
                <div class="p-3 categories-content">
                    <h5>Python Language</h5>
                    <p class="mb-0 ">Python Language</p>
                </div>
                </div>
        <div class="favourite-box p-0 " data-aos="fade-down">
                        <img src="{{asset('img/profiles/avatar-02.jpg')}}" alt="">
                        <button type="button" class="btn  position-absolute btn-play" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="ri-play-circle-line text-white fs-1"></i> </button>
                <div class="p-3 categories-content">
                    <h5>Python Language</h5>
                    <p class="mb-0 ">Python Language</p>
                </div>
                </div>
        <div class="favourite-box p-0 " data-aos="fade-down">
                        <img src="{{asset('img/profiles/avatar-02.jpg')}}" alt="">
                        <button type="button" class="btn  position-absolute btn-play" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="ri-play-circle-line text-white fs-1"></i> </button>
                <div class="p-3 categories-content">
                    <h5>Python Language</h5>
                    <p class="mb-0 ">Python Language</p>
                </div>
                </div>
              
           
             
              </div>
            </div>
          </div>
        </div>
      </section>


    <section class="home-three-trending">
        <div class="container">
            <div class="row">
                <div class="header-five-title text-center  section-header-title" data-aos="fade-up">
                    <div class="row align-items-center d-flex justify-content-between mb-4">
                        <div class="col-lg-12">
                            <h2>Most Trending Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel home-three-trending-course owl-theme" data-aos="fade-up">
                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-one">
                            <div class="course-title-one">
                                <a href="{{url('/productShow')}}">Personalized Learning</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{url('/productShow')}}">
                                    <h3 class="title instructor-text">
                                        Build Responsive Websites with HTML
                                    </h3>
                                 
                                </a>
                            </div>
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{asset('img/icon-three/student-icon.svg')}}" alt="student-icon" />
                                    <p>400 Students</p>
                                </div>
                                <div class="price-three-time d-inline-
                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                <span>6hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$300</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('/instructor_profile')}}"><img src="{{asset('img/profiles/avatar-04.jpg')}}"
                                            alt="img" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-two">
                            <div class="course-title-one">
                                <a href="{{url('productShow')}}">Pyhton Development</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{url('/productShow')}}">
                                    <h3 class="title instructor-text">
                                        The Complete PHP Framework Course 2.0
                                    </h3>
                                 
                                </a>
                            </div>
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{asset('img/icon-three/student-icon.svg')}}" alt />
                                    <p>900 Students</p>
                                </div>
                                <div class="price-three-time d-inline-
                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                <span>9hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$800</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('/instructor_profile')}}"><img src="{{asset('img/profiles/avatar-05.jpg')}}"
                                            alt="img" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-three">
                            <div class="course-title-one">
                                <a href="{{url('/productShow')}}">Business Management</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{url('/productShow')}}">
                                    <h3 class="title instructor-text">
                                        The Complete Business Management Course
                                    </h3>
                                 
                                </a>
                            </div>
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{asset('img/icon-three/student-icon.svg')}}" alt />
                                    <p>400 Students</p>
                                </div>
                                <div class="price-three-time d-inline-
                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                <span>6hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$300</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('/instructor_profile')}}"><img src="{{asset('img/profiles/avatar-06.jpg')}}"
                                            alt="img" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-four">
                            <div class="course-title-one">
                                <a href="{{url('/productShow')}}">Creative Arts & media</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{url('/productShow')}}">
                                    <h3 class="title instructor-text">
                                        Build Creative Arts & Course Completed
                                    </h3>
                               
                                </a>
                            </div>
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{asset('img/icon-three/student-icon.svg')}}" alt />
                                    <p>900 Students</p>
                                </div>
                                <div class="price-three-time d-inline-
                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                <span>4hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$200</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('/instructor_profile')}}"><img src="{{asset('img/profiles/avatar-07.jpg')}}"
                                            alt="img" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-one">
                            <div class="course-title-one">
                                <a href="{{url('/productShow')}}">Personalized Learning</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{url('/productShow')}}">
                                    <h3 class="title instructor-text">
                                        Build Responsive Websites with HTML
                                    </h3>
                                   
                                </a>
                            </div>
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{asset('img/icon-three/student-icon.svg')}}" alt />
                                    <p>600 Students</p>
                                </div>
                                <div class="price-three-time d-inline-
                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                <span>2hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$200</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('/instructor_profile')}}"><img src="{{asset('img/profiles/avatar-08.jpg')}}"
                                            alt="img" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-two">
                            <div class="course-title-one">
                                <a href="{{url('/productShow')}}">Pyhton Development</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{url('/productShow')}}">
                                    <h3 class="title instructor-text">
                                        The Complete PHP Framework Course 2.0
                                    </h3>
                              
                                </a>
                            </div>
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{asset('img/icon-three/student-icon.svg')}}" alt />
                                    <p>800 Students</p>
                                </div>
                                <div class="price-three-time d-inline-
                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                <span>3hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$350</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('/instructor_profile')}}"><img src="{{asset('img/profiles/avatar-09.jpg')}}"
                                            alt="img" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-three">
                            <div class="course-title-one">
                                <a href="{{url('/productShow')}}">Business Management</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{url('/productShow')}}">
                                    <h3 class="title instructor-text">
                                        The Complete Business Management Course
                                    </h3>
                                    
                                </a>
                            </div>
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{asset('img/icon-three/student-icon.svg')}}" alt />
                                    <p>700 Students</p>
                                </div>
                                <div class="price-three-time d-inline-
                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                <span>4hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$400</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{url('/instructor_profile')}}"><img src="{{asset('img/profiles/avatar-10.jpg')}}"
                                            alt="img" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="trending-three-item">
                        <div class="trending-content-top trending-bg-four">
                            <div class="course-title-one">
                                <a href="{{url('/productShow')}}">Creative Arts & media</a>
                            </div>
                            <div class="trending-three-text">
                                <a href="{{url('/productShow')}}">
                                    <h3 class="title instructor-text">
                                        Build Creative Arts & Course Completed
                                    </h3>
                                  
                                </a>
                            </div>
                            <div class="trending-counts-info d-flex align-items-center justify-content-between">
                                <div class="trending-three-counts d-flex align-items-center">
                                    <img src="{{asset('img/icon-three/student-icon.svg')}}" alt />
                                    <p>600 Students</p>
                                </div>
                                <div class="price-three-time d-inline-
                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">
                                <span>5hr 30min</span>
                                </div>
                            </div>
                        </div>
                        <div class="trending-content-footer">
                            <div class="trending-price-group d-flex align-items-center justify-content-between">
                                <div class="trending-group-view">
                                    <div class="trending-price-three">
                                        <h3>$400</h3>
                                        <span>$99.00</span>
                                    </div>
                                </div>
                                <div class="trending-footer-img">
                                    <a href="{{{url('/instructor_profile')}}}"><img src="{{asset('img/profiles/avatar-02.jpg')}}"
                                            alt="img" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section master-skill d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 aos aos-init aos-animate" data-aos="fade-up">


                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="featured-section-five">
        <div class="container">
            <div class="header-five-title text-center" data-aos="fade-down">
                <h2>Featured Courses</h2>
                <p>Pick Your Favourite Course</p>
            </div>
            <div class="row">
                <div class="featured-courses-five-tab">
                    <div class="tab-content">
                        <div class="nav tablist-five" role="tablist">
                            <a class="nav-tab active" data-bs-toggle="tab" href="#ux-design-tab" role="tab">UI/UX
                                Design</a>
                            <a class="nav-tab" data-bs-toggle="tab" href="#development-tab"
                                role="tab">Development</a>
                            <a class="nav-tab" data-bs-toggle="tab" href="#marketing-tab" role="tab">Marketing</a>
                            <a class="nav-tab" data-bs-toggle="tab" href="#business-tab" role="tab">Business</a>
                            <a class="nav-tab" data-bs-toggle="tab" href="#technology-tab" role="tab">Technology</a>
                            <a class="nav-tab" data-bs-toggle="tab" href="#all-category-tab" role="tab">All
                                Category</a>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="ux-design-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{{url('/productShow')}}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-01.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{{url('/instructor_profile')}}}">
                                                                    <img src="{{ asset('img/user/user2.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{{url('/instructor_profile')}}}">Cristofer Nolen</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                         
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-02.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{{url('/productShow')}}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                         
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-03.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user3.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{{url('/productShow')}}}">Russell T. Johnson</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                           
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-04.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user4.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-05.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user5.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Russell T. Johnson</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-06.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="development-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-06.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-05.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                             
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-04.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-03.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-02.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                          
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{asset('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-01.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="marketing-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-01.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                              
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-02.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-03.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-04.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                             
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-05.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-06.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="business-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-06.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                              
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-05.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                             
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-04.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-03.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                             
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-02.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-01.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="technology-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-01.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                              
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="course-details.html">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-02.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="course-details.html">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="course-details.html">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-03.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                              
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-04.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-05.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-06.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="all-category-tab">
                                <div class="ux-design-five">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-06.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="course-details.html">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-05.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-04.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                              
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-03.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                              
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-02.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                              
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                            <div class="course-box-five">
                                                <div class="product-five">
                                                    <div class="product-img-five">
                                                        <a href="{{url('/productShow')}}">
                                                            <img class="img-fluid" alt
                                                                src="{{ asset('img/course/featured-course-01.jpg') }}" />
                                                        </a>
                                                        <div class="heart-five">
                                                            <a href="#"><i class="fa-regular fa-heart"></i></a>
                                                        </div>
                                                    </div>

                                                    <div class="product-content-five">
                                                        <div class="course-group-five">
                                                            <div class="course-group-img-five">
                                                                <a href="{{url('/productShow')}}">
                                                                    <img src="{{ asset('img/user/user1.jpg') }}" alt
                                                                        class="img-fluid" />
                                                                </a>
                                                                <h6>
                                                                    <a href="{{url('/productShow')}}">Nicole Brown</a>
                                                                </h6>
                                                            </div>
                                                            <div class="course-share-five">
                                                                <div class="rating">
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star filled"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="product-five-title">
                                                            <a href="{{url('/productShow')}}">The Complete Web Developer PHP
                                                                framework
                                                                Course 2.0</a>
                                                        </h3>
                                                        <div class="info-five-middle">
                                                            <div class="course-view-five">
                                                                <span class="me-2"><a href="#">
                                                                <img src="{{asset('img/icon/icon-02.svg')}}" alt="">    
                                                                </a></span>
                                                                <p>8hr 30min</p>
                                                            </div>
                                                            <div class="rating-img">
                                                                <span class="me-2">
                                                                    <img src="{{asset('img/icon/icon-01.svg')}}" alt="">
                                                                </span>
                                                                <p>10+ Lesson</p>
                                                            </div>
                                                        </div>
                                                        <div class="price-five-group">
                                                            <p>Graphic</p>
                                                            <h3>$300.00</h3>
                                                        </div>
                                                    </div>
                                                </div>

                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="m section master-skill">
        <div class="container">
            <div class="master-five-vector">
                <img class="ellipse-right" src="{{asset('img/bg/master-vector-left.svg')}}" alt />
            </div>
            <div class="row">

                <div class="col-lg-7 col-md-12" data-aos="fade-down">
                    <div class="section-header">
                        <div class="section-sub-head">
                            <span>What’s New</span>
                            <h2>Master the skills to drive your career</h2>
                        </div>
                    </div>
                    <div class="section-text " data-aos="fade-up">
                        <p>Get certified, master modern tech skills, and level up your career — whether you’re starting out
                            or a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their
                            careers.</p>
                    </div>
                    <div class="career-group " data-aos="fade-up">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{asset('img/icon/icon-1.svg')}}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p>Stay motivated with engaging instructors</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{asset('img/icon/icon-2.svg')}}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p>Keep up with in the latest in cloud</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{asset('img/icon/icon-3.svg')}}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p>Get certified with 100+ certification courses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 d-flex">
                                <div class="certified-group blur-border d-flex">
                                    <div class="get-certified d-flex align-items-center">
                                        <div class="blur-box">
                                            <div class="certified-img ">
                                                <img src="{{asset('img/icon/icon-4.svg')}}" alt=""
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                        <p>Build skills your way, from labs to courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 d-flex align-items-end" data-aos="fade-up">
                    <div class="career-img ">
                        <img src="{{ asset('img/join.png') }}" alt="" class="img-fluid">
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>

    <section class="share-knowledge-five">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-down">
                    <div class="joing-count-five text-center">
                        <img class="w-100" src="{{ asset('img/img/shareMentor2.png') }}" alt />
                        <div class="joing-count-five-one course-count">
                            <img class="w-100" src="{{ asset('') }}" alt />
                        </div>
                        <div class="joing-count-five-two course-count">

                        </div>
                        <div class="joing-count-five-three course-count">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-down">
                    <div class="section-five-sub">
                        <div class="header-five-title">
                            <h2>Want to share your knowledge? Join us a Mentor</h2>
                        </div>
                        <div class="career-five-content">
                            <p>
                                High-definition video is video of higher resolution and
                                quality than standard-definition. While there is no
                                standardized meaning for high-definition, generally any
                                video.While there is no standardized meaning for
                                high-definition, generally any video.
                            </p>
                        </div>
                        <div class="knowledge-list-five">
                            <ul>
                                <li>
                                    <div class="knowledge-list-group">
                                        <img src="{{asset('img/icon/award-new.svg')}}" alt />
                                        <p>Best Courses</p>
                                    </div>
                                </li>
                                <li class="mb-0">
                                    <div class="knowledge-list-group">
                                        <img src="{{asset('img/icon/award-new.svg')}}" alt />
                                        <p>Best Courses</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <a href="{{url('/Courses')}}" class="btn btn-primary learn">Start Teaching Today</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section latest-blog">
        <div class="container">
          <div class="section-header aos" data-aos="fade-up">
            <div class="section-sub-head feature-head text-center mb-0">
              <h2>Latest Blogs</h2>
            </div>
          </div>
          <div
            class="owl-carousel blogs-slide owl-theme aos"
            data-aos="fade-up"
          >
            <div class="instructors-widget blog-widget">
              <div class="instructors-img">
                <a href="blog-list.html">
                  <img
                    class="img-fluid"
                    alt
                    src="{{asset('img/blog/blog-01.jpg')}}"
                  />
                </a>
              </div>
              <div class="instructors-content text-center">
                <h5>
                  <a href="blog-list.html"
                    >Attract More Attention Sales And Profits</a
                  >
                </h5>
                <p>Marketing</p>
                <div class="student-count d-flex justify-content-center">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span>Jun 15, 2022</span>
                </div>
              </div>
            </div>
            <div class="instructors-widget blog-widget">
              <div class="instructors-img">
                <a href="blog-list.html">
                  <img
                    class="img-fluid"
                    alt
                    src="{{asset('img/blog/blog-02.jpg')}}"
                  />
                </a>
              </div>
              <div class="instructors-content text-center">
                <h5>
                  <a href="blog-list.html"
                    >11 Tips to Help You Get New Clients</a
                  >
                </h5>
                <p>Sales Order</p>
                <div class="student-count d-flex justify-content-center">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span>May 20, 2022</span>
                </div>
              </div>
            </div>
            <div class="instructors-widget blog-widget">
              <div class="instructors-img">
                <a href="blog-list.html">
                  <img
                    class="img-fluid"
                    alt
                    src="{{asset('img/blog/blog-03.jpg')}}"
                  />
                </a>
              </div>
              <div class="instructors-content text-center">
                <h5>
                  <a href="blog-list.html">An Overworked Newspaper Editor</a>
                </h5>
                <p>Design</p>
                <div class="student-count d-flex justify-content-center">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span>May 25, 2022</span>
                </div>
              </div>
            </div>
            <div class="instructors-widget blog-widget">
              <div class="instructors-img">
                <a href="blog-list.html">
                  <img
                    class="img-fluid"
                    alt
                    src="{{asset('img/blog/blog-04.jpg')}}"
                  />
                </a>
              </div>
              <div class="instructors-content text-center">
                <h5>
                  <a href="blog-list.html">A Solution Built for Teachers</a>
                </h5>
                <p>Seo</p>
                <div class="student-count d-flex justify-content-center">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span>Jul 15, 2022</span>
                </div>
              </div>
            </div>
            <div class="instructors-widget blog-widget">
              <div class="instructors-img">
                <a href="blog-list.html">
                  <img
                    class="img-fluid"
                    alt
                    src="{{asset('img/blog/blog-02.jpg')}}"
                  />
                </a>
              </div>
              <div class="instructors-content text-center">
                <h5>
                  <a href="blog-list.html"
                    >Attract More Attention Sales And Profits</a
                  >
                </h5>
                <p>Marketing</p>
                <div class="student-count d-flex justify-content-center">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span>Sep 25, 2022</span>
                </div>
              </div>
            </div>
            <div class="instructors-widget blog-widget">
              <div class="instructors-img">
                <a href="blog-list.html">
                  <img
                    class="img-fluid"
                    alt
                    src="{{asset('img/blog/blog-03.jpg')}}"
                  />
                </a>
              </div>
              <div class="instructors-content text-center">
                <h5>
                  <a href="blog-list.html">An Overworked Newspaper Editor</a>
                </h5>
                <p>Marketing</p>
                <div class="student-count d-flex justify-content-center">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span>May 25, 2022</span>
                </div>
              </div>
            </div>
            <div class="instructors-widget blog-widget">
              <div class="instructors-img">
                <a href="blog-list.html">
                  <img
                    class="img-fluid"
                    alt
                    src="{{asset('img/blog/blog-04.jpg')}}"
                  />
                </a>
              </div>
              <div class="instructors-content text-center">
                <h5>
                  <a href="blog-list.html">A Solution Built for Teachers</a>
                </h5>
                <p>Analysis</p>
                <div class="student-count d-flex justify-content-center">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span>May 15, 2022</span>
                </div>
              </div>
            </div>
            <div class="instructors-widget blog-widget">
              <div class="instructors-img">
                <a href="blog-list.html">
                  <img
                    class="img-fluid"
                    alt
                    src="{{asset('img/blog/blog-02.jpg')}}"
                  />
                </a>
              </div>
              <div class="instructors-content text-center">
                <h5>
                  <a href="blog-list.html"
                    >11 Tips to Help You Get New Clients</a
                  >
                </h5>
                <p>Development</p>
                <div class="student-count d-flex justify-content-center">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span>Jun 20, 2022</span>
                </div>
              </div>
            </div>
            <div class="instructors-widget blog-widget">
              <div class="instructors-img">
                <a href="blog-list.html">
                  <img
                    class="img-fluid"
                    alt
                    src="{{asset('img/blog/blog-03.jpg')}}"
                  />
                </a>
              </div>
              <div class="instructors-content text-center">
                <h5>
                  <a href="blog-list.html">An Overworked Newspaper Editor</a>
                </h5>
                <p>Sales</p>
                <div class="student-count d-flex justify-content-center">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span>May 25, 2022</span>
                </div>
              </div>
            </div>
            <div class="instructors-widget blog-widget">
              <div class="instructors-img">
                <a href="blog-list.html">
                  <img
                    class="img-fluid"
                    alt
                    src="{{asset('img/blog/blog-04.jpg')}}"
                  />
                </a>
              </div>
              <div class="instructors-content text-center">
                <h5>
                  <a href="blog-list.html">A Solution Built for Teachers</a>
                </h5>
                <p>Marketing</p>
                <div class="student-count d-flex justify-content-center">
                  <i class="fa-solid fa-calendar-days"></i>
                  <span>April 15, 2022</span>
                </div>
              </div>
            </div>
          </div>
       
        </div>
      </section>

    <section class=" section master-skill app-adv-section " >
        <div class="container">
            {{-- <div class="master-five-vector">
                <img class="ellipse-right" src="{{ asset('img/bg/master-vector-left.svg') }}" alt="">
            </div> --}}
            <div class="row">

                <div class="col-lg-12 col-md-12  aos-init aos-animate" data-aos="fade-down">
                    <div class="app-section" >
                        <div class="row">
                            <div class="col-lg-7 col-md-12 d-flex align-items-center  aos-init aos-animate"
                                data-aos="fade-up">
                                <div class="header-five-title mb-3">
                                    <h2 class="mb-5">Download our app from  <span style="color:#2766CF"> App-store</span> for free</h2>
                                    <a href="">
                                    <img width="25%" src="{{asset('img/img/playstore.png')}}" alt="">
                                    </a>
                                </div>
                                
                            </div>
                            <div class="col-lg-5 col-md-12 d-flex justify-content-center aos-init aos-animate">
                                <div class="app-image">
                                    <img src="{{ asset('img/img/app.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                          
                        </div>

                    </div>

                </div>


            </div>

        </div>
    </section>

    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg">
            <div class="modal-content">
            
                <div class="modal-body p-0">
                    <button type="button" class="btn-close video-modal-close  rounded-pill bg-white position-absolute " data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="ratio ratio-16x9">
                        {{-- <video width="320" height="240" controls>
                            <source src="{{asset('img/video1.mp4')}}" type="video/mp4">
                            <source src="movie.ogg" type="video/ogg">
                            Your browser does not support the video tag.
                          </video> --}}
                          <iframe width="560" height="315" src="https://www.youtube.com/embed/ChZceDRGmW0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script></script>
    @endpush
@endsection
