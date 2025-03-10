<div class="">
    {{-- <div class="settings-widget dash-profile">
        <div class="settings-menu p-0">
            <div class="profile-bg">
                <h5>Beginner</h5>
                <img src="{{ asset('img/instructor-profile-bg.jpg')}}" alt>
                <div class="profile-img">
                    <a href="instructor-profile.html"><img src="{{asset('img/user/user15.jpg')}}" alt></a>
                </div>
            </div>
            <div class="profile-group">
                <div class="profile-name text-center">
                    <h4><a href="instructor-profile.html">Jenny Wilson</a></h4>
                    <p>Instructor</p>
                </div>
                <div class="go-dashboard text-center">
                    <a href="add-course.html" class="btn btn-primary">Create New Course</a>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="settings-widget account-settings mt-0">
        <div class="settings-menu">
            <h3>DASHBOARD</h3>
            <ul>
                @can('dashboard_view')
                <li class="nav-item {{ request()->is('admin/home') ? 'active' : '' }}">
                    <a href="{{ route('admin.home') }}" class="nav-link">
                        <i class="feather-home"></i>Dashboard
                    </a>
                </li>
                @endcan
                @can('centre_list')
                <li class="nav-item {{ request()->is('admin/centre*') ? 'active' : '' }}">
                    <a href="{{ route('centre.index') }}" class="nav-link">
                        <i class="feather-book"></i>Centre
                    </a>
                </li>
                @endcan
                @can('admission_list')
                <li class="nav-item  {{ request()->is('admin/student*') ? 'active' : '' }}">
                    <a href="{{ route('admin.student.create') }}" class="nav-link">
                        <i class="feather-users"></i> Admissions
                    </a>
                </li>
                @endcan
                @can('courses_list')
                <li class="nav-item {{ request()->is('admin/course*') ? 'active' : '' }}">
                    <a href="{{ route('admin.course.index') }}" class="nav-link">
                        <i class="feather-book"></i>Courses
                    </a>
                </li>
                @endcan
                <li class="nav-item {{ request()->is('admin/scheme*') ? 'active' : '' }}">
                    <a href="{{ route('scheme.index') }}" class="nav-link">
                        <i class="feather-book"></i>Scheme
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('admin.quiz.index') }}" class="nav-link">
                        <i class="feather-bell"></i> Exam Questions
                    </a>
                </li>
                @can('student_list')
                <li class="nav-item  {{ request()->is('admin/student*') ? 'active' : '' }}">
                    <a href="{{ route('admin.student.index') }}" class="nav-link">
                        <i class="feather-users"></i> Students
                    </a>
                </li>
                @endcan
                <!-- <li class="nav-item  {{ request()->is('admin/services*') ? 'active' : '' }}">
                    <a href="{{ route('admin.services.index') }}" class="nav-link">
                        <i class="feather-users"></i> Services
                    </a>
                </li> -->
                <li class="nav-item  {{ request()->is('admin/category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}" class="nav-link">
                        <i class="ri-file-list-3-line"></i>Category
                    </a>
                </li>
                @can('banner_list')
                <li class="nav-item {{ request()->is('admin/banner*') ? 'active' : '' }}">
                    <a href="{{ route('admin.banner.index') }}" class="nav-link">
                        <i class="feather-book"></i>Banners
                    </a>
                </li>
                @endcan
                <li class="nav-item  {{ request()->is('admin/tutor*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tutor.index') }}" class="nav-link">
                        <i class="ri-slideshow-line"></i>Faculty
                    </a>
                </li>
                <li class="nav-item  {{ request()->is('admin/payment*') ? 'active' : '' }}">
                    <a href="{{ route('admin.payment.index') }}" class="nav-link">
                        <i class="ri-slideshow-line"></i>Payments
                    </a>
                </li>
                <!-- <li class="nav-item ">
                    <a href="{{ url('/admin/payment') }}" class="nav-link">
                        <i class="ri-bank-card-line"></i> Payment
                    </a>
                </li> -->
                <!-- <li class="nav-item ">
                    <a href="{{ url('/admin/tag') }}" class="nav-link">
                        <i class="ri-bookmark-line"></i> Tag
                    </a>
                </li> -->
                @can('setting_list')
                <li class="nav-item ">
                    <a href="{{ url('/admin/settings') }}" class="nav-link">
                        <i class="ri-settings-4-line"></i> Settings
                    </a>
                </li> 
                @endcan
                <li class="nav-item  {{ request()->is('admin/batch*') ? 'active' : '' }}">
                    <a href="{{ route('batch.index') }}" class="nav-link">
                        <i class="ri-slideshow-line"></i>Batch
                    </a>
                </li>
                <li class="nav-item  {{ request()->is('admin/exam*') ? 'active' : '' }}">
                    <a href="{{ route('exam.index') }}" class="nav-link">
                        <i class="ri-slideshow-line"></i>Exam
                    </a>
                </li>
                <li class="nav-item  {{ request()->is('admin/modules*') ? 'active' : '' }}">
                    <a href="{{ route('modules.index') }}" class="nav-link">
                        <i class="ri-slideshow-line"></i>Modules
                    </a>
                </li>
                <li class="nav-item  {{ request()->is('admin/result*') ? 'active' : '' }}">
                    <a href="{{ route('exam_result.index') }}" class="nav-link">
                        <i class="ri-slideshow-line"></i>Exam Result
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
