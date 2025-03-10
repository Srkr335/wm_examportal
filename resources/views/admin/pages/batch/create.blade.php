@extends('admin.layouts.admin_app')

@section('content')
<div class="container" style="transform: none;">
    <div class="row" style="transform: none;">


        <form action="{{ route('batch.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="add-course-header pb-0 mb-3">
                        <h2>Add New Batch</h2>
                        <div class="add-course-btns">
                            <ul class="nav">
                                <li>
                                    <a href="{{route('batch.index')}}" class="btn btn-black">Back to
                                        Batch</a>
                                </li>
                                <li>
                                    <button type="submit" class="btn btn-success-dark">Save</button>
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
                            <div class="personal-info-head">
                                {{-- <h4>Details</h4> --}}
                                {{-- <p>Edit your personal information and address.</p> --}}
                            </div>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Batch Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your Batch Name"
                                                name="batch_name" id="batch_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Course</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="course_name" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option value=''>Select Course</option>
                                                @foreach($courses as $course)
                                                <option value="{{$course->id}}">{{$course->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Year</label>
                                            <select class="form-control" name="batch_year" id="batch_year">
                                                <option value="">Select Year</option>
                                                @for ($year = date('Y'); $year <= date('Y') + 10; $year++) <option
                                                    value="{{ $year }}" {{ $year == date('Y') ? 'selected' : '' }}>
                                                    {{ $year }}</option>
                                                    @endfor
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Start Date</label>
                                            <input type="date" class="form-control" placeholder="Enter your Batch Name"
                                                name="start_date" id="start_date">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-control-label">End Date</label>
                                            <input type="date" class="form-control" placeholder="Enter your Batch Name"
                                                name="end_date" id="end_date">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Centre</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="centre_name" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                <option value=''>Select Centre</option>
                                                @foreach($centres as $centre)
                                                <option value="{{$centre->id}}">{{$centre->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="status" id="status" data-select2-id="1" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection