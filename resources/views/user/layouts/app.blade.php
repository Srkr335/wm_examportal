<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamslms.dreamguystech.com/html/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 11:13:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Xpect Corps</title>

    <link rel="shortcut icon" type="image" href="{{ asset('img/img/favicon.png') }}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

    <link
      rel="stylesheet"
      href="{{asset('plugins/fontawesome/css/fontawesome.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('plugins/fontawesome/css/all.min.css')}}" />

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}" />

    <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}" />

    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}" />

    <link rel="stylesheet" href="{{asset('plugins/aos/aos.css')}}" />

    <link rel="stylesheet" href="{{asset('css/feather.css')}}" />
    <link rel="stylesheet" href="{{asset('plugins/swiper/css/swiper.min.css')}}" />

    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">



</head>

<body class="home-five">

    <div class="main-wrapper">

        @include('user.layouts.components.header')

        <div class="page-content instructor-page-content p-0">
            @yield('content')
        </div>
        @include('user.layouts.components.footer')

    </div>
 
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('js/jquery.waypoints.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>

<script src="{{asset('plugins/select2/js/select2.min.js')}}"></script>

<script src="{{asset('js/owl.carousel.min.js')}}"></script>

<script src="{{asset('plugins/slick/slick.js')}}"></script>

<script src="{{asset('plugins/aos/aos.js')}}"></script>

<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/user.js')}}"></script>
<script src="{{asset('plugins/swiper/js/swiper.min.js')}}"></script>

</body>

<!-- Mirrored from dreamslms.dreamguystech.com/html/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 11:13:11 GMT -->

</html>
