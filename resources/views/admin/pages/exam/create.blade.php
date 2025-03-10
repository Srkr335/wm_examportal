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
            <form action="{{ route('exam.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="add-course-header mb-4 pb-0">
                            <h2>Add Exams</h2>
                            <div class="add-course-btns">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ route('exam.index') }}" class="btn btn-black">Back to exams</a>
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
                                            <label class="form-control-label">Exam Name</label>
                                            <input type="text" class="form-control" placeholder="Enter your exam Name"
                                                name="exam_name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Centre</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                    name="centre_name" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                    <option value=''>Select Centre</option>
                                                    @foreach($centers as $center)
                                                    <option value="{{$center->id}}">{{$center->name}}</option>
                                                    @endforeach    
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Course</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                    name="course_name" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                    <option value=''>Select Course</option>
                                                    @foreach($courses as $course)
                                                    <option value="{{$course->id}}">{{$course->title}}</option>
                                                    @endforeach    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Batch</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                    name="batch_name" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                    <option value=''>Select Batch</option>
                                                    @foreach($batches as $batch)
                                                    <option value="{{$batch->id}}">{{$batch->name}}</option>
                                                    @endforeach    
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Exam Modules</label>
                                            <input type="checkbox" id="checkAllModules">
                                            <br>
                                            @foreach($modules as $module)
                                            <input type="checkbox" name="modules[]" value="{{ $module->id }}" class="module-checkbox">
                                            {{ $module->modules_name }}<br>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Marks</label>
                                            <input type="number" class="form-control" placeholder="Enter marks"
                                                name="exam_mark">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-control-label">Hours</label>
                                            <input type="number" class="form-control" placeholder="Enter hours" name="hours" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="form-control-label">Minutes</label>
                                            <input type="number" class="form-control" placeholder="Enter minutes" name="minutes" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Exam Date</label>
                                            <input type="date" class="form-control" placeholder="Enter date" name="exam_date">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Per Questions Weightage</label>
                                            <input type="text" class="form-control" placeholder=""
                                                name="per_questions_weight">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Status</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                    name="status" id="status" data-select2-id="1" tabindex="-1"
                                                    aria-hidden="true">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
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
    <script>
    const checkAll = document.getElementById('checkAllModules');
    const moduleCheckboxes = document.querySelectorAll('.module-checkbox');
    checkAll.addEventListener('change', function() {
        moduleCheckboxes.forEach(function(checkbox) {
            checkbox.checked = checkAll.checked;
        });
    });

    function updateCheckAllStatus() {
        const allChecked = Array.from(moduleCheckboxes).every(function(checkbox) {
            return checkbox.checked;
        });

        checkAll.checked = allChecked;
    }

    moduleCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            updateCheckAllStatus();
        });
    });
</script>
@endsection
