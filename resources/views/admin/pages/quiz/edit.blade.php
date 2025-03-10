@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">


            <form action="{{ route('admin.quiz.update', ['id' => $quiz->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="add-course-header pb-0 mb-3">
                            <h2>Edit Questions</h2>
                            <div class="add-course-btns">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ route('admin.quiz.index') }}" class="btn btn-black">Back to
                                        Questions</a>
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
                                <form action="#">
                                    <div class="row">

                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Course <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select" name="course_id" required>
                                                <option value="">Select a Course</option>
                                                @foreach ($courses as $course)
                                                    <option value="{{ $course->id }}"
                                                        @if ($quiz->course_id == $course->id) selected @endif>
                                                        {{ $course->title }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('course_id'))
                                                <span class="text-sm text-danger">
                                                    {{ $errors->first('course_id') }}
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Batch<span
                                                class="text-danger">*</span></label>
                                                <select class="form-control select" name="batch_id" required>
                                                <option value="">Select Batch</option>
                                                @foreach ($batches as $batch)
                                                    <option value="{{ $batch->id }}" {{$quiz->batch_id == $batch->id ? 'selected' : ''}} >{{ $batch->name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('course_id'))
                                                <span class="text-sm text-danger">
                                                    {{ $errors->first('course_id') }}
                                                </span>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Exam<span
                                                class="text-danger">*</span></label>
                                                <select class="form-control select" name="exam" required>
                                                <option value="">Select Exam</option>
                                                @foreach ($exams as $exam)
                                                    <option value="{{ $exam->id }}" {{$quiz->exam_id == $exam->id ? 'selected' : ''}}>{{ $exam->exam_name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('course_id'))
                                                <span class="text-sm text-danger">
                                                    {{ $errors->first('course_id') }}
                                                </span>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Exam Module<span
                                                class="text-danger">*</span></label>
                                                <select class="form-control select" name="module_id" required>
                                                <option value="">Select Module</option>
                                                @foreach ($examModules as $module)
                                                    <option value="{{ $module->id }}" {{$quiz->module_id == $module->id ? 'selected' : ''}} >{{ $module->modules_name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('course_id'))
                                                <span class="text-sm text-danger">
                                                    {{ $errors->first('course_id') }}
                                                </span>
                                            @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Question</label>
                                                <textarea name="question" class="form-control" id="question" cols="30" rows="5">{{ $quiz->question }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Answer</label>
                                                <select name="answer" id="answer" class="form-select">
                                                    <option value="A"
                                                        @if ($quiz->answer == 'A') selected @endif>Option A</option>
                                                    <option value="B"
                                                        @if ($quiz->answer == 'B') selected @endif>Option B</option>
                                                    <option value="C"
                                                        @if ($quiz->answer == 'C') selected @endif>Option C</option>
                                                    <option value="D"
                                                        @if ($quiz->answer == 'D') selected @endif>Option D</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Option A</label>
                                                <textarea name="option_a" class="form-control" id="option_a" cols="30" rows="5">{{ $quiz->option_a }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Option B</label>
                                                <textarea name="option_b" class="form-control" id="option_b" cols="30" rows="5">{{ $quiz->option_b }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Option C</label>
                                                <textarea name="option_c" class="form-control" id="option_c" cols="30" rows="5">{{ $quiz->option_c }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Option D</label>
                                                <textarea name="option_d" class="form-control" id="option_d" cols="30" rows="5">{{ $quiz->option_d }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Description</label>
                                            <textarea name="description" class="form-control" id="description" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="status" id="status" data-select2-id="1" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1" @if ($quiz->status == 1) selected @endif>
                                                    Active</option>
                                                <option value="0" @if ($quiz->status == 0) selected @endif>
                                                    Inactive</option>
                                            </select>
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
