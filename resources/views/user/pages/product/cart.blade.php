@extends('user.layouts.app')

@section('content')
    <section class="course-content cart-widget mt-4" >
        <div class="container">
            <div class="student-widget">
                <div class="student-widget-group">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-head">
                                <h4>Your cart (03 items)</h4>
                            </div>
                            <div class="cart-group">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 d-flex">
                                        <div class="course-box course-design list-course d-flex">
                                            <div class="product">
                                                <div class="product-img">
                                                    <a href="{{url('/productShow')}}">
                                                        <img class="img-fluid" alt=""
                                                            src="{{asset('img/course/course-10.jpg')}}">
                                                    </a>
                                                    <div class="price">
                                                        <h3 class="free-color">FREE</h3>
                                                    </div>
                                                </div>
                                                <div class="product-content">
                                                    <div class="head-course-title">
                                                    <h3 class="title"><a href="{{url('/productShow')}}">Information About
                                                                UI/UX Design Degree</a></h3>
                                                    </div>
                                                    <div class="course-info d-flex align-items-center border-bottom-0 pb-0">
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
                                                </div>
                                                <div class="cart-remove">
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Remove</a>
                                                      </div>
                                                    {{-- <a href="javascript:;" class=""><img src="{{asset('img/icon/cart.svg')}}" alt="img"></a> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-total">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="cart-subtotal">
                                            <p>Subtotal <span>$600.00</span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="check-outs">
                                            <a href="{{url('/home')}}" class="btn btn-primary">Checkout</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="condinue-shop">
                                        <a href="{{url('/Courses')}}" class="btn btn-primary">Continue Shopping</a>
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
@endsection
