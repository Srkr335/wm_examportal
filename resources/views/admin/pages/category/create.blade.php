@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">


            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="add-course-header pb-0 mb-3">
                            <h2>Add New Category</h2>
                            <div class="add-course-btns">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ route('admin.category.index') }}" class="btn btn-black">Back to
                                            category</a>
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
                            <div class="page-banner student-bg-blk bg-white">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-12 d-flex justify-content-center">

                                            <div class="course-name d-flex align-items-center">
                                                <div class="form-group">
                                                    <div class=" profile-image-circle">
                                                        <img id="ImagePreview" class="h-100 Profile-img" src="">
                                                    </div>
                                                </div>
                                                <div class=" upload-profile-icon">
                                                    <label class="" style="cursor:pointer">
                                                        <img src="{{ asset('img/new-icons/upload.png') }}" alt="">
                                                        <input type="file" name="file" class="InputFile"
                                                            id="myFile"
                                                            onchange="document.getElementById('ImagePreview').src = window.URL.createObjectURL(this.files[0])">
                                                    </label>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="checkout-form personal-address add-course-info ">
                                <div class="personal-info-head">
                                    {{-- <h4>Details</h4> --}}
                                    {{-- <p>Edit your personal information and address.</p> --}}
                                </div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter your Category Name" name="name" id="name">
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
