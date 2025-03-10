@extends('user.layouts.app')

@section('content')
    <section class="course-content mt-4" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="col-lg-3 theiaStickySidebar"
                style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                <div class="theiaStickySidebar"
                    style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                    <div class="filter-clear">
                        <div class="clear-filter d-flex align-items-center">
                            <h4><i class="feather-filter"></i>Filters</h4>
                            <div class="clear-text">
                                <p>CLEAR</p>
                            </div>
                        </div>

                        <div class="card search-filter categories-filter-blk">
                            <div class="card-body">
                                <div class="filter-widget mb-0">
                                    <div class="categories-head d-flex align-items-center">
                                        <h4>Course categories</h4>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Backend (3)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> CSS (2)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Frontend (2)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist" checked="">
                                            <span class="checkmark"></span> General (2)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist" checked="">
                                            <span class="checkmark"></span> IT &amp; Software (2)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Photography (2)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Programming Language (3)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check mb-0">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Technology (2)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card search-filter">
                            <div class="card-body">
                                <div class="filter-widget mb-0">
                                    <div class="categories-head d-flex align-items-center">
                                        <h4>Instructors</h4>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Keny White (10)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> Hinata Hyuga (5)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="select_specialist">
                                            <span class="checkmark"></span> John Doe (3)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check mb-0">
                                            <input type="checkbox" name="select_specialist" checked="">
                                            <span class="checkmark"></span> Nicole Brown
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card search-filter ">
                            <div class="card-body">
                                <div class="filter-widget mb-0">
                                    <div class="categories-head d-flex align-items-center">
                                        <h4>Price</h4>
                                        <i class="fas fa-angle-down"></i>
                                    </div>
                                    <div>
                                        <label class="custom_check custom_one">
                                            <input type="radio" name="select_specialist">
                                            <span class="checkmark"></span> All (18)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check custom_one">
                                            <input type="radio" name="select_specialist">
                                            <span class="checkmark"></span> Free (3)
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check custom_one mb-0">
                                            <input type="radio" name="select_specialist" checked="">
                                            <span class="checkmark"></span> Paid (15)
                                        </label>
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
                                style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 340px; height: 2331px;">
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
                <div class="col-lg-9">

                    <div class="showing-list">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <div class="view-icons">
                                        <a href="{{url('/Courses_grid')}}" class="grid-view"><i class="feather-grid"></i></a>
                                        <a href="{{url('/Courses')}}" class="list-view active"><i class="feather-list"></i></a>
                                    </div>
                                    <div class="show-result">
                                        <h4>Showing 1-9 of 50 results</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="show-filter add-course-info ">
                                    <form action="#">
                                        <div class="row gx-2 align-items-center">
                                            <div class="col-md-6 col-item">
                                                <div class=" search-group">
                                                    <i class="feather-search"></i>
                                                    <input type="text" class="form-control"
                                                        placeholder="Search our courses">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-item">
                                                <div class="form-group select-form mb-0">
                                                 
                                                    <select class="form-control " id="select-grid">
                                                        <option>Newly Published</option>
                                                        <option>Category 02</option>
                                                        <option>Category 03</option>
                                                        <option>Category 04</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 d-flex">
                            <div class="course-box course-design list-course d-flex">
                                <div class="product">
                                    <div class="product-img">
                                        <a href="{{url('productShow')}}">
                                            <img class="img-fluid" alt="" src="{{asset('img/course/course-10.jpg')}}">
                                        </a>
                                        <div class="price">
                                            <h3>$300 <span>$99.00</span></h3>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="head-course-title">
                                        <h3 class="title"><a href="{{url('/productShow')}}">Information About UI/UX Design
                                                    Degree</a></h3>
                                            <div class="all-btn d-flex align-items-center">
                                                <a href="{{url('/productcheckout')}}" class="btn btn-primary buynow">BUY NOW</a>
                                            </div>
                                        </div>
                                        <div class="course-info border-bottom-0 pb-0 d-flex align-items-center">
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
                                            <span class="d-inline-block average-rating"><span>4.0</span> (15)</span>
                                        </div>
                                        <div class="course-group d-flex mb-0">
                                            <div class="course-group-img d-flex">
                                                <a href="{{url('instructor_profile')}}"><img src="{{asset('img/user/user1.jpg')}}"
                                                        alt="" class="img-fluid"></a>
                                                <div class="course-name">
                                                    <h4><a href="{{url('/instructor_profile')}}">Rolands R</a></h4>
                                                    <p>Instructor</p>
                                                </div>
                                            </div>
                                            <div class="course-share d-flex align-items-center justify-content-center">
                                                <a href="#rate"><i class="fa-regular fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination lms-page">
                                <li class="page-item prev">
                                    <a class="page-link" href="javascript:void(0)" tabindex="-1"><i
                                            class="fas fa-angle-left"></i></a>
                                </li>
                                <li class="page-item first-page active">
                                    <a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">5</a>
                                </li>
                                <li class="page-item next">
                                    <a class="page-link" href="javascript:void(0)"><i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
           
            </div>
        </div>
    </section>
@endsection
