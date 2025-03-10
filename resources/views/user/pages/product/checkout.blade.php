@extends('user.layouts.app')

@section('content')
    {{-- <div class="main-wrapper" style="padding-top: 93px;"> --}}

        <section class="course-content checkout-widget mt-4" style="transform: none; ">
            <div class="container" style="transform: none;">
                <div class="row" style="transform: none;">
                    <div class="col-lg-8">

                        <div class="student-widget">
                            <div class="student-widget-group add-course-info">
                                <div class="cart-head">
                                    <h4>Billing Address</h4>
                                </div>
                                <div class="checkout-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">First Name</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter your first Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Last Name</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter your last Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Phone Number (Optional)</label>
                                                    <input type="text" class="form-control" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Address Line 1</label>
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Address Line 2 (Optional)</label>
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">State</label>
                                                    <select class="form-select" id="select-grid">
                                                        <option >Select State</option>
                                                        <option>Brazil</option>
                                                        <option>French</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">Country</label>
                                                    <select class="form-select select select2-hidden-accessible"
                                                        name="sellist1" id="select-Country" data-select2-id="4" tabindex="-1"
                                                        aria-hidden="true">
                                                        <option data-select2-id="6">Select country</option>
                                                        <option>India</option>
                                                        <option>America</option>
                                                        <option>London</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">Zip/Postal Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-10">
                                                <div class="form-group ship-check">
                                                    <input class="form-check-input" type="checkbox" name="remember">
                                                    Shipping address is the same as my billing address
                                                </div>
                                                <div class="form-group ship-check mb-0">
                                                    <input class="form-check-input" type="checkbox" name="remember"> Save
                                                    this information for next time
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="student-widget pay-method">
                            <div class="student-widget-group add-course-info">
                                <div class="cart-head">
                                    <h4>Payment Method</h4>
                                </div>
                                <div class="checkout-form">
                                    <form action="https://dreamslms.dreamguystech.com/html/cart.html">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="wallet-method">
                                                    <label class="radio-inline custom_radio me-4">
                                                        <input type="radio" name="optradio" checked="">
                                                        <span class="checkmark"></span> Credit or Debit card
                                                    </label>
                                                    <label class="radio-inline custom_radio">
                                                        <input type="radio" name="optradio">
                                                        <span class="checkmark"></span> PayPal
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-control-label">Card Number</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="XXXX XXXX XXXX XXXX">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">Month</label>
                                                    <select class="form-select" id="select-month">
                                                        <option>Month</option>
                                                        <option>Jun</option>
                                                        <option>Feb</option>
                                                        <option>March</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-label">Year</label>
                                                    <select class="form-select" id="select-year">
                                                        <option>Month</option>
                                                        <option>Jun</option>
                                                        <option>Feb</option>
                                                        <option>March</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">CVV Code </label>
                                                    <input type="text" class="form-control" placeholder="XXXX">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label">Name on Card</label>
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-10">
                                                <div class="form-group ship-check">
                                                    <input class="form-check-input" type="checkbox" name="remember">
                                                    Remember this card
                                                </div>
                                            </div>
                                            <div class="payment-btn">
                                                <a class="btn btn-primary" href="{{url('/productcart')}}" type="submit">Make a Payment</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 theiaStickySidebar"
                        style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                        <div class="theiaStickySidebar"
                            style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                            <div class="student-widget select-plan-group">
                                <div class="student-widget-group">
                                    <div class="plan-header">
                                        <h4>Selected Plan</h4>
                                    </div>
                                    <div class="basic-plan">
                                        <h3>Basic</h3>
                                        <p>For individuals who just need to start with the basic features</p>
                                        <p>per user, per month when billed monthly</p>
                                        <h2><span>$</span>10</h2>
                                    </div>
                                    <div class="benifits-feature">
                                        <h3>Benefits</h3>
                                        <ul>
                                            <li><i class="fas fa-circle"></i> Access to slack community</li>
                                            <li><i class="fas fa-circle"></i> Access to support team</li>
                                            <li><i class="fas fa-circle"></i> Algorithmic bidding</li>
                                            <li><i class="fas fa-circle"></i> Keyword and ASIN harvesting</li>
                                        </ul>
                                    </div>
                                    <div class="benifits-feature">
                                        <h3>Features</h3>
                                        <ul>
                                            <li><i class="fas fa-circle"></i> Search term isolation</li>
                                            <li><i class="fas fa-circle"></i> Total sales analytics</li>
                                            <li><i class="fas fa-circle"></i> Best seller rank</li>
                                            <li><i class="fas fa-circle"></i> Placement optimization</li>
                                        </ul>
                                    </div>
                                    <div class="plan-change">
                                        <a href="pricing-plan.html" class="btn btn-primary">Change the Plan</a>
                                    </div>
                                </div>
                            </div>
                            <div class="resize-sensor"
                                style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div class="resize-sensor-expand"
                                    style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                    <div
                                        style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 330px; height: 1205px;">
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
    @endsection
