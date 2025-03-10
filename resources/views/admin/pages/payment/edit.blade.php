@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
            <form action="{{ route('admin.payment.update', ['id' => $payment->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="add-course-header pb-0">
                            <h2>edit Payment</h2>
                            <div class="add-course-btns">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ route('admin.payment.index') }}" class="btn btn-black">Back to
                                            Payments</a>
                                    </li>
                                    <li>
                                        <button type="submit" class="btn btn-success-dark">Update</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12">
                    <div class=" profile-details">
                        <div class="settings-menu p-0">
                            <div class="checkout-form personal-address add-course-info ">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Students</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="student" data-select2-id="1" tabindex="-1" aria-hidden="true"
                                                disabled>
                                                <option>{{ $payment->student->user->name }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Courses</label>
                                            <select class="form-select select " name="course" id="course" required>
                                                <option data-select2-id="3">Select Course</option>
                                                @foreach ($courses as $key => $course)
                                                    <option value="{{ $course->id }}"
                                                        @if ($payment->course_id == $course->id) selected @endif>
                                                        {{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Amount</label>
                                            <input type="number" class="form-control" placeholder="Enter amount" required
                                                name="amount" value="{{ $payment->amount }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Month</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="month" data-select2-id="1" tabindex="-1" aria-hidden="true"
                                                required>
                                                <option data-select2-id="3">Select month</option>
                                                @foreach ($months as $key => $value)
                                                    <option value="{{ $key }}"
                                                        @if ($payment->month == $key) selected @endif>
                                                        {{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">End Date</label>
                                            <input type="date" class="form-control" placeholder="Enter end date" required
                                                name="end_date" value="{{ $payment->end_date }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Status</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="status" tabindex="-1" aria-hidden="true">
                                                <option value="0" @if ($payment->status == 0) selected @endif>
                                                    Active</option>
                                                <option value="1" @if ($payment->status == 1) selected @endif>
                                                    In-Active</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
@endsection
