@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">


            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="add-course-header pb-0 mb-3">
                            <h2>Add New Service</h2>
                            <div class="add-course-btns">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ route('admin.services.index') }}" class="btn btn-black">Back to
                                            Services</a>
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
                                                <label class="form-control-label">Name</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter your Category Name" name="name" id="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-label">Paarent Service</label>
                                                <select class="form-select select country-select select2-hidden-accessible"
                                                    name="parent_id" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                    <option value=''>Select service</option>
                                                    @foreach ($services as $key => $service)
                                                        <option value="{{ $key }}">{{ $service }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Price</label>
                                                <input type="text" class="form-control" placeholder="Enter Price"
                                                    name="price" id="price">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Discount Price</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Discount Price" name="discount_price"
                                                    id="discount_price">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Description</label>
                                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Image</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Duration </label>
                                                <input type="text" class="form-control" placeholder="Enter Duration"
                                                    name="duration" id="duration">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Duration hours</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Duration Hours" name="duration_hours"
                                                    id="duration_hours">
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
