@extends('admin.layouts.admin_app')

@section('content')
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="add-course-header">
                <h2>Edit Course</h2>
                <div class="add-course-btns">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('admin.course.index') }}" class="btn btn-black">Back to Course</a>
                        </li>
                    </ul>
                </div>
            </div>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="widget-set">
                    <div class="widget-setcount">
                        <ul id="progressbar">
                            <li class="progress-active">
                                <p><span></span> Basic Information</p>
                            </li>
                            <li>
                                <p><span></span> Courses Media</p>
                            </li>
                            {{-- <li>
                                    <p><span></span> Curriculum</p>
                                </li> --}}
                            <li>
                                <p><span></span> Settings</p>
                            </li>
                        </ul>
                    </div>
                    <form action="{{ route('admin.course.update', ['id' => $course->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="widget-content multistep-form">
                            <fieldset id="first">
                                <div class="add-course-info">
                                    <div class="add-course-inner-header">
                                        <h4>Basic Information</h4>
                                    </div>
                                    <div class="add-course-form row">
                                        {{-- <form action="#"> --}}
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Title <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Course Title"
                                                name="title" value="{{ $course->title }}" />
                                            @if ($errors->has('title'))
                                            <span class="text-sm text-danger">
                                                {{ $errors->first('title') }}
                                            </span>
                                            @endif
                                        </div>
                                        {{-- <div class="form-group">
                                                <label class="add-course-label">Tutor</label>
                                                <input type="text" class="form-control" placeholder="Course Title" />
                                            </div> --}}
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Courses Category <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select" name="category_id">
                                                <option value="">Select a Category</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @if ($course->category_id ==
                                                    $category->id) selected @endif>
                                                    {{ $category->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('category_id'))
                                            <span class="text-sm text-danger">
                                                {{ $errors->first('category_id') }}
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Course Fee <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Course Fee"
                                                value="{{ $course->fees }}" name="fees">
                                            @if ($errors->has('fees'))
                                            <span class="text-sm text-danger">
                                                {{ $errors->first('fees') }}
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">installment<span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" placeholder="" name="installment"
                                                value="{{ $course->installment }}">
                                            @if ($errors->has('fees'))
                                            <span class="text-sm text-danger">
                                                {{ $errors->first('installment') }}
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Course Level <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select" name="level">
                                                <option value="">Select a Level</option>
                                                <option value="beginner"
                                                    {{ $course->level == 'beginner' ? 'selected' : '' }}>Beginner
                                                </option>
                                                <option value="intermediate"
                                                    {{ $course->level == 'intermediate' ? 'selected' : '' }}>
                                                    Intermediate</option>
                                                <option value="advanced"
                                                    {{ $course->level == 'advanced' ? 'selected' : '' }}>Advanced
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Centre Name<span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control multiple" name="centre_name[]" id="centre_name"
                                                multiple>
                                                <option value="">Select Centre</option>
                                                @foreach ($centres as $centre)
                                                <!-- <option value="{{ $centre->id }}"{{$course->centre_id == $centre->id ? 'selected' : ''}}>{{ $centre->name }}</option> -->
                                                <option value="{{ $centre->id }}"
                                                    {{in_array($centre->id,$course->centreIds()) ? 'selected' : ''}}>
                                                    {{ $centre->name }}
                                                </option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Duration <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select" name="duration">
                                                <option value="">Select</option>
                                                <option value="1" {{$course->duration == 1 ? 'selected' : ''}}>1 Year
                                                </option>
                                                <option value="2" {{$course->duration == 2 ? 'selected' : ''}}>6 Month
                                                </option>
                                                <option value="3" {{$course->duration == 3 ? 'selected' : ''}}>8 Month
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Module Count</label>
                                            <input type="text" class="form-control" placeholder="Module Count"
                                                name="module_count" value="{{ $course->module_count }}" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Class Count <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Class Count"
                                                name="class_count" value="{{ $course->class_count }}" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Quiz Count <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Quiz Count"
                                                name="quiz_count" value="{{ $course->quiz_count }}" />
                                        </div>

                                        <div class="form-group mb-0">
                                            <label class="add-course-label">Course Description</label>
                                            {{-- <input id="editor" name="description" value="{{ $course->description }}">
                                            --}}
                                            <textarea name="description" id="description" class="form-control" cols="30"
                                                rows="10">{{ $course->description }}</textarea>
                                        </div>

                                        {{-- </form> --}}
                                    </div>
                                    <div class="widget-btn ">
                                        <a class="btn btn-secondary">Back</a>
                                        <a class="btn btn-info-light text-right next_btn">Continue</a>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="field-card">
                                <div class="add-course-info">
                                    <div class="add-course-inner-header">
                                        <h4>Courses Media</h4>
                                    </div>
                                    <div class=" row add-course-form col-md-12">
                                        {{-- cover image --}}
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Cover Image</label>

                                            <div class="relative-form">
                                                <span id="cover_image_name"><input type="text" class="border-0 bg-white"
                                                        disabled placeholder="No file choose">
                                                </span>
                                                <label class="relative-file-upload">
                                                    Upload Cover Image
                                                    <input type="file" name="cover_image" class="InputFile"
                                                        id="cover_image"
                                                        onchange="document.getElementById('cover_image_name').innerText = document.getElementById('cover_image').files[0].name"
                                                        {{-- onchange="document.getElementById('ImagePreview1').src = window.URL.createObjectURL(this.files[0])" --}}>
                                                </label>
                                            </div>
                                            @if (!empty($course->courcePlaylist->cover_img))
                                            <div class="form-group">
                                                <div class="add-image-box"
                                                    style="height: 100px!important; overflow:hidden!important;">
                                                    <img id="ImagePreview1"
                                                        src="{{ asset('/course/images/' . @$course->courcePlaylist->cover_img) }}"
                                                        width="100%" height="auto">
                                                </div>
                                            </div>
                                            @endif
                                        </div>

                                        {{-- image --}}
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Main Image</label>

                                            <div class="relative-form">
                                                <span id="main_image_name"><input type="text" class="border-0 bg-white"
                                                        disabled placeholder="No file choose">
                                                </span>
                                                <label class="relative-file-upload">
                                                    Upload Main Image
                                                    <input type="file" name="main_image" class="InputFile"
                                                        id="main_image"
                                                        onchange="document.getElementById('main_image_name').innerText = document.getElementById('main_image').files[0].name"
                                                        {{-- onchange="document.getElementById('ImagePreview2').src = window.URL.createObjectURL(this.files[0])" --}}>
                                                </label>
                                            </div>
                                            @if (!empty($course->courcePlaylist->image_url))
                                            <div class="form-group">
                                                <div class="add-image-box"
                                                    style="height: 100px!important; overflow:hidden!important;">
                                                    <img id="ImagePreview2"
                                                        src="{{ asset('/course/images/' . @$course->courcePlaylist->image_url) }}"
                                                        width="100%" height="auto">
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                        <hr>

                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Prelude Video</label>

                                            <div class="relative-form">
                                                <span id="prelude_video_name">
                                                    <input type="text" class="border-0 bg-white" disabled
                                                        placeholder="No file choose"> </span>
                                                <label class="relative-file-upload">
                                                    Upload Prelude Video
                                                    <input type="file" class="InputFile" accept="video/*"
                                                        id="prelude_video" name="prelude_video_link"
                                                        onchange="document.getElementById('prelude_video_name').innerText = document.getElementById('prelude_video').files[0].name">
                                                </label>
                                            </div>
                                            {{-- <label class="add-course-label">Prelude Video</label> --}}

                                            {{-- <input type="file" accept="video/*" id="input-tag"
                                                    name="prelude_video_link"
                                                    onchange="videoPreview(event,'video-preview1','video-source1')" />
                                                    
                                                <hr> --}}
                                            @if (!empty($course->courcePlaylist->prelude_video_link))
                                            <div class="video-div">
                                                <video controls id="video-preview1" class="w-100"
                                                    style="height: 275px!important; overflow:hidden!important;"
                                                    src="{{ asset('/course/videos/' . @$course->courcePlaylist->prelude_video_link) }}">
                                                    <source id="video-source1"
                                                        src="{{ asset('/course/videos/' . @$course->courcePlaylist->prelude_video_link) }}">
                                                </video>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Main Video </label>

                                            <div class="relative-form">
                                                <span id="main_video_name">
                                                    <input type="text" class="border-0 bg-white" disabled
                                                        placeholder="No file choose"> </span>
                                                <label class="relative-file-upload">
                                                    Upload Main Video
                                                    <input type="file" class="InputFile" accept="video/*"
                                                        id="main_video" name="main_video_link"
                                                        onchange="document.getElementById('main_video_name').innerText = document.getElementById('main_video').files[0].name">
                                                </label>
                                            </div>
                                            {{-- <label class="add-course-label">main Video</label> --}}

                                            {{-- <input type="file" accept="video/*" id="input-tag"
                                                    name="main_video_link"
                                                    onchange="videoPreview(event,'video-preview1','video-source1')" />
                                                    
                                                <hr> --}}
                                            @if (!empty($course->courcePlaylist->video_url))
                                            <div class="video-div">
                                                <video controls id="video-preview1" class="w-100"
                                                    style="height: 275px!important; overflow:hidden!important;"
                                                    src="{{ asset('/course/videos/' . @$course->courcePlaylist->video_url) }}">
                                                    <source id="video-source1"
                                                        src="{{ asset('/course/videos/' . @$course->courcePlaylist->video_url) }}">
                                                </video>
                                            </div>
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Youtube URL</label>
                                            <input id="youtube_url" name="youtube_url" type="text"
                                                value="{{ @$course->courcePlaylist->youtube_url }}" class="form-control"
                                                placeholder="Youtube URL">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Extra URL</label>
                                            <input id="url_1" name="url_1" type="text" class="form-control"
                                                value="{{ @$course->courcePlaylist->url_1 }}" placeholder="Extra URL">
                                        </div>
                                        <hr>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Extra URL</label>
                                            <input id="url_2" name="url_2" type="text" class="form-control"
                                                value="{{ @$course->courcePlaylist->url_2 }}" placeholder="Extra URL">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Extra URL</label>
                                            <input id="url_3" name="url_3" type="text" class="form-control"
                                                value="{{ @$course->courcePlaylist->url_3 }}" placeholder="Extra URL">
                                        </div>

                                    </div>
                                    <div class="widget-btn">
                                        <a class="btn btn-secondary prev_btn">Previous</a>
                                        <a class="btn btn-info-light next_btn">Continue</a>
                                    </div>
                                </div>
                            </fieldset>
                            {{-- <fieldset class="field-card">
                                <div class="add-course-info">
                                    <div class="add-course-inner-header">
                                        <h4>Curriculum</h4>
                                    </div>
                                    <div class="add-course-section">
                                        <a href="javascript:void(0);" class="btn">Add Section</a>
                                    </div>
                                    <div class="add-course-form">
                                        <div class="curriculum-grid">
                                            <div class="curriculum-head">
                                                <p>Section 1: Introduction</p>
                                                <a href="javascript:void(0);" class="btn">Add Lecture</a>
                                            </div>
                                            <div class="curriculum-info">
                                                <div id="accordion">
                                                    <div class="faq-grid">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseOne">
                                                                <i class="fas fa-align-justify"></i>
                                                                Introduction
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseOne" class="collapse"
                                                            data-bs-parent="#accordion">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-grid">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseTwo">
                                                                <i class="fas fa-align-justify"></i>
                                                                Installing Development Software
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse"
                                                            data-bs-parent="#accordion">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-grid mb-0">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseThree">
                                                                <i class="fas fa-align-justify"></i> Hello
                                                                World Project from GitHub
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseThree" class="collapse"
                                                            data-bs-parent="#accordion">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="curriculum-grid mb-0">
                                            <div class="curriculum-head">
                                                <p>Section 1: JavaScript Beginnings</p>
                                                <a href="javascript:void(0);" class="btn">Add Lecture</a>
                                            </div>
                                            <div class="curriculum-info">
                                                <div id="accordion-one">
                                                    <div class="faq-grid">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseFour">
                                                                <i class="fas fa-align-justify"></i>
                                                                Introduction
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseFour" class="collapse"
                                                            data-bs-parent="#accordion-one">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-grid">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseFive">
                                                                <i class="fas fa-align-justify"></i>
                                                                Installing Development Software
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseFive" class="collapse"
                                                            data-bs-parent="#accordion-one">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-grid">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseSix">
                                                                <i class="fas fa-align-justify"></i> Hello
                                                                World Project from GitHub
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseSix" class="collapse"
                                                            data-bs-parent="#accordion-one">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-grid mb-0">
                                                        <div class="faq-header">
                                                            <a class="collapsed faq-collapse" data-bs-toggle="collapse"
                                                                href="#collapseSeven">
                                                                <i class="fas fa-align-justify"></i> Our
                                                                Sample Website
                                                            </a>
                                                            <div class="faq-right">
                                                                <a href="javascript:void(0);">
                                                                    <i class="far fa-pen-to-square me-1"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" class="me-0">
                                                                    <i class="far fa-trash-can"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div id="collapseSeven" class="collapse"
                                                            data-bs-parent="#accordion-one">
                                                            <div class="faq-body">
                                                                <div class="add-article-btns">
                                                                    <a href="javascript:void(0);" class="btn">Add
                                                                        Article</a>
                                                                    <a href="javascript:void(0);" class="btn me-0">Add
                                                                        Description</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}
                                    </div>
                                    <div class="widget-btn">
                                        <a class="btn btn-black prev_btn">Previous</a>
                                        <a class="btn btn-info-light next_btn">Continue</a>
                                    </div>
                                </div>
                            </fieldset> --}}
                            <fieldset class="field-card">
                                <div class="add-course-info">
                                    <div class="add-course-inner-header">
                                        <h4>Settings</h4>
                                    </div>
                                    <div class="row add-course-form col-md-12 form-group">
                                        <div class="form-group col-md-4">
                                            <label class="add-course-label">Is Top Rated</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="yes"
                                                    name="is_top_rated" value="1" @if ($course->is_top_rated == 1)
                                                checked @endif /><label class="form-check-label" for="yes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="no" name="is_top_rated"
                                                    value="0" @if ($course->is_top_rated == 0) checked @endif /><label
                                                    class="form-check-label" for="no">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="add-course-label">Is Trending</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="yes" name="is_trending"
                                                    value="1" @if ($course->is_trending == 1) checked @endif /><label
                                                    class="form-check-label" for="yes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="no" name="is_trending"
                                                    value="0" @if ($course->is_trending == 0) checked @endif /><label
                                                    class="form-check-label" for="no">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="add-course-label">Is Most Viewed</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="yes"
                                                    name="is_most_purchased" value="1" @if ($course->is_most_purchased
                                                == 1) checked @endif /><label class="form-check-label"
                                                    for="yes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="no"
                                                    name="is_most_purchased" value="0" @if ($course->is_most_purchased
                                                == 0) checked @endif /><label class="form-check-label"
                                                    for="no">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="add-course-label">Is Newly Added</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="yes"
                                                    name="is_newly_added" value="1" @if ($course->is_newly_added == 1)
                                                checked @endif /><label class="form-check-label" for="yes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="no"
                                                    name="is_newly_added" value="0" @if ($course->is_newly_added == 0)
                                                checked @endif /><label class="form-check-label" for="no">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="add-course-label">Is Free</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="yes" name="is_free"
                                                    value="1" @if ($course->is_free == 1) checked @endif /><label
                                                    class="form-check-label" for="yes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" id="no" name="is_free"
                                                    value="0" @if ($course->is_free == 0) checked @endif /><label
                                                    class="form-check-label" for="no">No</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="add-course-label">Status</label>
                                            <select name="status" id="status" class="form-select">
                                                <option value="1" @if ($course->status == 1) selected @endif>
                                                    Enable</option>
                                                <option value="0" @if ($course->status == 0) selected @endif>
                                                    Disable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="widget-btn">
                                        <a class="btn btn-secondary prev_btn">Previous</a>
                                        <button type="submit" class="btn btn-info-light">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                            {{-- <fieldset class="field-card">
                                <div class="add-course-info">
                                    <div class="add-course-msg">
                                        <i class="fas fa-circle-check"></i>
                                        <h4>The Course Added Succesfully</h4>
                                        <p>Admin will be Approve soon.</p>
                                    </div>
                                </div>
                            </fieldset> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$('.multiple').select2();
</script>

@push('scripts')
<script>
function fileNameChange(input, name) {
    let fileInput = document.getElementById(input);
    let span = document.getElementById(name);
    // Fires on file upload
    fileInput.addEventListener('change', function(event) {
        // Get file name
        let fileName = fileInput.files[0].name;
        // Update file name in span
        span.innerText = fileName;
    });
}

function videoPreview(event, preview, source) {
    const file = event.target.files[0];
    if (file) {
        const objectURL = URL.createObjectURL(file);
        document.getElementById(preview).src = objectURL;
        document.getElementById(source).src = objectURL;
        videoPreview.load();
    }
}
</script>
@endpush
@endsection