@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid" style="transform: none;">
        <div class="row" style="transform: none;">
            <div class=" col-md-12">
                <div class="pt-3">
                    <div class="container">
                        <div class="title-sec">
                            <div class="row">
                                <div class="col-sm-6 col-lg-5">
                                    <h4>Notifications</h4>

                                </div>
                            </div>
                        </div>

                        <div class="notify-sec">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="add-course-label">Title</label>
                                        <input type="text" class="form-control" placeholder="Notification Title ">
                                    </div>
                                    <div class="form-group">
                                        <label class="add-course-label">Notification Text</label>
                                        <textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="add-course-label">Notification Poster</label>

                                        <div class="relative-form">
                                            <span id="fileName"><input type="text" class="border-0 bg-white"
                                                    disabled="" placeholder="No file choose"> </span>
                                            <label class="relative-file-upload">
                                                Upload Poster
                                                <input type="file" name="file" class="InputFile" id="myFile"
                                                    onchange="document.getElementById('ImagePreview').src = window.URL.createObjectURL(this.files[0])">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="add-image-box">
                                            <img id="ImagePreview" src="">

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
                <div class="p-4">

                    <div class="notify-sec">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Today</h5>
                                <div class="notify-item">
                                    <div class="row align-items-center">
                                        <div class="col-md-9">
                                            <div class="notify-content">
                                                <a href="instructor-profile.html">
                                                    <img class="avatar-img semirounded-circle"
                                                        src="{{asset('img/user/user2.jpg')}}" alt="User Image">
                                                </a>
                                                <div class="notify-detail">
                                                    <h6><a href="instructor-profile.html">Rolands R </a><span>Today at 9:42
                                                            AM</span></h6>
                                                    <p>It is a long established fact that a reader will be distracted by the
                                                        readable content of a page when looking at its layout. The point of
                                                        using Lorem Ipsum is that it has a more-or-less normal distribution
                                                        of letters, as opposed to using 'Content here,</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="text-md-end ">
                                                <a href="javascript:;" class="btn p-0 mb-2 text-danger border-danger reshedule">Reshedule</a>
                                                <a href="javascript:;" class="btn p-0 publish">Publish</a>
                                            </div>
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
