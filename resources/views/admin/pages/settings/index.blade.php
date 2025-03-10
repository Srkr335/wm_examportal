@extends('admin.layouts.admin_app')

@section('content')

<section class="section py-3">
    <div class="container">
      <div class="course-widget">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="settings-cards course-full-width">
              <div class="w-100 align-items-center aos aos-init aos-animate" data-aos="fade-up">
                <div class="online-course d-flex align-items-center">
                  <div class="course-img w-25">
                    <img src="{{asset('img/img/settings.png')}}" class="w-100" alt="">
                  </div>
                  <div class="course-inner-content">
                    <h4>General</h4>
                             <a href="{{route('settings.genaral')}}" class="d-flex align-items-center"> Change Settings <i class="ri-arrow-right-line ml-2 mt-1"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 ">
            <div class="settings-cards course-full-width">
              <div class=" w-100 aos aos-init aos-animate" data-aos="fade-up">
                <div class="online-course d-flex align-items-center">
                  <div class="course-img w-25">
                    <img src="{{asset('img/img/settings.png')}}" class="w-100" alt="">
                  </div>
                  <div class="course-inner-content">
                    <h4>Role & Permissions</h4>
                             <a href="{{route('settings.permissions')}}" class="d-flex align-items-center"> Roles & Permissions <i class="ri-arrow-right-line ml-2 mt-1"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 ">
            <div class="settings-cards course-full-width">
              <div class=" w-100 aos aos-init aos-animate" data-aos="fade-up">
                <div class="online-course d-flex align-items-center">
                  <div class="course-img w-25">
                    <img src="{{asset('img/img/settings.png')}}" class="w-100" alt="">
                  </div>
                  <div class="course-inner-content">
                    <h4>Payments</h4>
                    <a href="{{route('settings.payments')}}" class="d-flex align-items-center"> Payment Settings <i class="ri-arrow-right-line ml-2 mt-1"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 ">
            <div class="settings-cards course-full-width">
              <div class=" w-100 aos aos-init aos-animate" data-aos="fade-up">
                <div class="online-course d-flex align-items-center">
                  <div class="course-img w-25">
                    <img src="{{asset('img/img/settings.png')}}" class="w-100" alt="">
                  </div>
                  <div class="course-inner-content">
                    <h4>User</h4>
                    <a href="{{route('settings.user')}}" class="d-flex align-items-center">  User Settings <i class="ri-arrow-right-line ml-2 mt-1"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </section>


@push('scripts')
<script></script>
@endpush
@endsection