@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">

            {{-- <div class="col-xl-3 col-md-4 theiaStickySidebar"
                style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px; transform: none;">


                <div class="theiaStickySidebar"
                    style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none; overflow: visible; box-sizing: border-box; min-height: 1px;">


                    <div class="theiaStickySidebar"
                        style="padding-top: 1px; padding-bottom: 1px; position: relative; transform: none;">
                        <div class="settings-widget dash-profile mb-3">
                            <div class="settings-menu p-0">
                                <div class="profile-bg">
                                    <img src="http://127.0.0.1:8000/img/profile-bg.jpg" alt="">
                                    <div class="profile-img">
                                        <a href="{{ url('admin/tutorshow') }}">
                                            <img class="img-fluid" alt="" src="{{ asset('img/user/user11.jpg') }}">
                                        </a>
                                    </div>
                                </div>
                                <div class="profile-group">
                                    <div class="profile-name text-center">
                                        <h4><a href="student-profile.html">Rolands R</a></h4>
                                        <p class="mb-1">jennywilson@example.com
                                        </p>
                                        <p class="mb-1">+1(452) 125-6789
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-sensor"
                            style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div class="resize-sensor-expand"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div
                                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 295px; height: 1291px;">
                                </div>
                            </div>
                            <div class="resize-sensor-shrink"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                </div>
                            </div>
                        </div>
                        <div class="resize-sensor"
                            style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div class="resize-sensor-expand"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div
                                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 271px; height: 342px;">
                                </div>
                            </div>
                            <div class="resize-sensor-shrink"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                </div>
                            </div>
                        </div>
                        <div class="resize-sensor"
                            style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;">
                            <div class="resize-sensor-expand"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div
                                    style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 271px; height: 342px;">
                                </div>
                            </div>
                            <div class="resize-sensor-shrink"
                                style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;">
                                <div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <form action="{{ route('admin.modules.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="add-course-header mb-4 pb-0">
                            <h2>Edit Module</h2>
                            <div class="add-course-btns">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ route('modules.index') }}" class="btn btn-black">Back to modules</a>
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

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Module Name</label>
                                            <input type="hidden" name="module_id" value="{{$module->id}}">
                                            <input type="text" class="form-control" placeholder="Enter your Module Name"
                                                name="module_name" value="{{$module->modules_name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Course</label>
                                            <select class="form-control" name="course" id="course">
                                                <option value="">Select Course</option>
                                                @foreach($courses as $course)
                                                <option value="{{ $course->id }}" {{$module->course_id == $course->id ? 'selected' : ''}}>{{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Batch</label>
                                            <select class="form-control" name="batch" id="batch">
                                                <option value="">Select Batch</option>
                                                @foreach($batches as $batch)
                                                <option value="{{ $batch->id }}" {{$module->batch_id == $batch->id ? 'selected' : ''}}>{{ $batch->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="1" {{$module->status == 1 ? 'selected' : ''}}>Enable</option>
                                                <option value="0" {{$module->status == 0 ? 'selected' : ''}}>Disable</option>
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
