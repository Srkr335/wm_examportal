<header class="header-five">

    <div class="header-fixed">
        <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
            <div class="container">
                <div class="navbar-header d-flex">
                    <a id="mobile_btn" href="javascript:void(0);">
                        <span class="bar-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </a>
                    <a href="{{ url('/home') }}" class="navbar-brand logo">
                        <img src="assets/img/logo/logo-five.png" class="img-fluid" alt="Logo">
                    </a>
                    <ul class="main-nav">
                        <nav class="nav-link header-Link">
                            <a href="{{ url('/home') }}">Home </a>
                            <a href="{{ url('/about') }}">About </a>
                            <a href="{{ url('/Courses') }}">Courses </a>

                        </nav>
                    </ul>
                </div>
                
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="index.html" class="menu-logo">
                            <img src="assets/img/logo/logo-five.svg" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                        
                    </div>
          
                </div>

                <ul class="nav header-navbar-rht header-navbar-five">
                    <li class="nav-item noti-nav header-noti-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset('img/icon/notification.svg') }}" alt="img">
                        </a>
                        <div class="notifications dropdown-menu dropdown-menu-right">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications
                                    <select>
                                        <option>All</option>
                                        <option>Unread</option>
                                    </select>
                                </span>
                                <a href="javascript:void(0)" class="clear-noti">Mark all as read
                                    <i class="fa-solid fa-circle-check"></i></a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <div class="media d-flex">
                                            <div>
                                                <a href="{{ url('/notification') }}" class="avatar">
                                                    <img class="avatar-img" alt=""
                                                        src="{{asset('img/user/user1.jpg')}}">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h6>
                                                    <a href="{{ url('/notification') }}">Lex Murphy requested
                                                        <span>access to</span> UNIX directory tree
                                                        hierarchy
                                                    </a>
                                                </h6>
                                                <button class="btn btn-accept">Accept</button>
                                                <button class="btn btn-reject">Reject</button>
                                                <p>Today at 9:42 AM</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item wish-nav header-noti-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset('img/icon/wish.svg') }}" alt="img">
                        </a>
                        <div class="wishes-list dropdown-menu dropdown-menu-right">
                            <div class="wish-content">
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{ url('/productShow') }}">
                                                        <img alt=""
                                                            src="{{ asset('img/course/course-04.jpg') }}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6>
                                                        <a href="{{ url('/productShow') }}">Learn Angular...</a>
                                                    </h6>
                                                    <p>By Dave Franco</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item cart-nav">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/icon/cart.svg') }}" alt="img">
                        </a>
                        <div class="wishes-list dropdown-menu dropdown-menu-right">
                            <div class="wish-header">
                                <a href="{{url('/productcart')}}">View Cart</a>
                                <a href="javascript:void(0)" class="float-end">Checkout</a>
                            </div>
                            <div class="wish-content">
                                <ul>
                                    <li>
                                        <div class="media">
                                            <div class="d-flex media-wide">
                                                <div class="avatar">
                                                    <a href="{{url('productShow')}}">
                                                        <img alt="" src="{{asset('img/course/course-04.jpg')}}">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h6><a href="{{url('productShow')}}">Learn Angular...</a></h6>
                                                    <p>By Dave Franco</p>
                                                    <h5>$200 <span>$99.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="remove-btn">
                                                <a href="#" class="btn">Remove</a>
                                            </div>
                                        </div>
                                    </li>
                                   
                                </ul>
                                <div class="total-item">
                                    <h6>Subtotal : $ 600</h6>
                                    <h5>Total : $ 600</h5>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item user-nav p-0">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img src="{{ asset('img/user/user11.jpg') }}" alt="">
                                <span class="status online"></span>
                            </span>
                        </a>
                        <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img src="{{ asset('img/user/user11.jpg') }}" alt="User Image"
                                        class="avatar-img rounded-circle">
                                </div>
                                <div class="user-text">
                                    <h6>Rolands R</h6>
                                    <p class="text-muted mb-0">Student</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{ url('/user_profile') }}"><i
                                    class="feather-user me-1"></i> Profile</a>

                            @if (auth()->user())
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i
                                        class="feather-log-out me-1"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            @else
                                <a class="" href="login.html">Login</a>
                            @endif
                        </div>
                    </li>



                </ul>
            </div>
        </nav>
        <div class="sidebar-overlay"></div>
    </div>


</header>
