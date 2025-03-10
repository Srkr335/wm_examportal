@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class=" col-md-12">
                <div class=" py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="showing-list">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                {{-- <div class="view-icons">
                                                    <a href="students-list.html" class="list-view active"><i
                                                            class="feather-list"></i></a>
                                                </div> --}}
                                                {{-- <div class="show-result">
                                                    <h4>Showing 1-9 of 50 results</h4>
                                                </div> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="go-dashboard text-end">
                                                <a href="{{ route('admin.tutor.create') }}" class="btn btn-primary">Add
                                                    Tutor</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    @foreach ($tutors as $tutor)
                                        <div class="col-lg-12 d-flex">
                                            <div class="instructor-list flex-fill">
                                                <div class="instructor-img">
                                                    <a href="{{ route('admin.tutor.show', $tutor->id) }}">
                                                        <img class="img-fluid" alt=""
                                                            src="{{ asset('/images/tutor/' . $tutor->image) }}">
                                                    </a>
                                                </div>
                                                <div class="instructor-content">
                                                    <h5><a href="{{ route('admin.tutor.show', $tutor->id) }}">{{ $tutor->first_name }}
                                                            {{ $tutor->last_name }}</a></h5>
                                                    <h6>Instructor</h6>
                                                    <div class="instructor-info">
                                                        <div class="rating-img d-flex align-items-center">
                                                            <img src="{{ asset('img/icon/icon-01.svg') }}" class="me-1"
                                                                alt="">
                                                            <p>12+ Lesson</p>
                                                        </div>
                                                        <div class="course-view d-flex align-items-center ms-0">
                                                            <img src="{{ asset('img/icon/icon-02.svg') }}" class="me-1"
                                                                alt="">
                                                            <p>9hr 30min</p>
                                                        </div>
                                                        <div class="rating-img d-flex align-items-center">
                                                            <img src="{{ asset('img/icon/user-icon.svg') }}" class="me-1"
                                                                alt="">
                                                            <p>50 Students</p>
                                                        </div>

                                                    </div>
                                                    {{-- <div class="instructor-badge">
                                                        <span class="web-badge">Web Design</span>
                                                        <span class="web-badge">web development</span>
                                                        <span class="web-badge">UI Design</span>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        {{ $tutors->links() }}
                                        {{-- <ul class="pagination lms-page">
                                            <li class="page-item prev">
                                                <a class="page-link" href="javascript:void(0);" tabindex="-1"><i
                                                        class="fas fa-angle-left"></i></a>
                                            </li>
                                            <li class="page-item first-page active">
                                                <a class="page-link" href="javascript:void(0);">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item next">
                                                <a class="page-link" href="javascript:void(0);"><i
                                                        class="fas fa-angle-right"></i></a>
                                            </li>
                                        </ul> --}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    @push('scripts')
        <script></script>
    @endpush
@endsection
