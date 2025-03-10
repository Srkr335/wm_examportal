@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class=" col-md-12">
                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="showing-list">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="d-flex align-items-center">
                                                <div class="view-icons">
                                                    <a href="students-list.html" class="list-view active"><i
                                                            class="feather-list"></i></a>
                                                </div>
                                                <div class="show-result">
                                                    <h4>Showing 1-9 of 50 results</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="go-dashboard text-end">
                                                <a href="{{ route('admin.student.create') }}" class="btn btn-primary">Add
                                                    Student</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="student-grid-blk">

                                            <div class="row">

                                                @foreach ($students as $student)
                                                    <div class="col-md-12">
                                                        <div class="instructor-list flex-fill">
                                                            <div class="instructor-img">
                                                                <a href="{{ asset('/images/student/' . $student->image) }}">
                                                                    <img class="img-fluid" alt=""
                                                                        src="{{ asset('/images/student/' . $student->image) }}">
                                                                </a>
                                                            </div>
                                                            <div class="instructor-content">
                                                                <h6 class="mb-2">#WM{{ $student->student_code }}</h6>
                                                                <h5><a
                                                                        href="{{ route('admin.student.show', $student->id) }}">{{ $student->user->name }}</a>
                                                                </h5>
                                                                <div class="instructor-info">
                                                                    <div class="rating-img d-flex align-items-center">
                                                                        <img src="{{ asset('img/new-icons/email.png') }}"
                                                                            class="me-1" alt="">
                                                                        <p>{{ $student->email }}</p>
                                                                    </div>
                                                                    <div class="course-view d-flex align-items-center ms-0">
                                                                        <img src="{{ asset('img/new-icons/phone.png') }}"
                                                                            class="me-1" alt="">
                                                                        <p>{{ $student->mobile_no }}</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-3 d-flex gap-2"> <img
                                                                        src="{{ asset('img/icon/cart.svg') }}"
                                                                        alt="img"><span> (03)</span> </h6>
                                                                <h6 class="mb-0 d-flex gap-2"> <img
                                                                        src="{{ asset('img/icon/wish.svg') }}"
                                                                        alt="img"> <span> (02)</span> </h6>
                                                            </div>
                                                        </div>

                                                    </div>
                                                @endforeach

                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <!-- <div class="card-footer"> -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{ $students->links('pagination::bootstrap-5') }}
                                        </div>


                                    </div>
                                <!-- </div> -->

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
