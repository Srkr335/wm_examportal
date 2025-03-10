@extends('admin.layouts.admin_app')

@section('content')
<div class="container" style="transform: none;">
    <div class="row" style="transform: none;">

        <div class="col-xl-3 col-md-4 theiaStickySidebar"
            style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">


            <div class="theiaStickySidebar mt-3"
                style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                <div class=" dash-profile mb-3">
                    <div class="settings-menu p-0">
                        <div class="profile-bg">
                            <img src="{{ asset('img/profile-bg.jpg') }}" alt="">
                            <div class="profile-img">
                                <a href="#"><img alt="" src="{{ asset('/images/student/' . $student->image) }}"></a>
                            </div>
                        </div>
                        <div class="profile-group">
                            @can('student_edit')
                            <div class="d-flex justify-content-end" style="margin-right: -10px;">
                                <a href="{{ route('admin.student.edit', ['id' => $student->id]) }}"><i
                                        class="fa-solid fa-edit"></i></a>

                            </div>
                            @endcan
                            <div class="profile-name text-center">
                                <h4><a href="#">{{ $student->user->name }}
                                        {{-- @if ($student->payment_status == 1)
                                                <i class="fa-solid fa-crown fa-bounce " style="color: #FFD43B;"></i>
                                            @endif --}}
                                    </a></h4>
                                <p class="mb-1">{{ $student->email }}
                                </p>
                                <p class="mb-1">{{ $student->mobile_no }}
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
                {{-- <div class="card-body overview-sec-body bg-white">
                        <h5 class="subs-title">Professional Skills</h5>
                        <div class="sidebar-tag-labels">
                        <ul class="list-unstyled">
                        <li><a href="javascript:;" class="">User Interface Design</a></li>
                        <li><a href="javascript:;">Web Development</a></li>
                        <li><a href="javascript:;">Web Design</a></li>
                        <li><a href="javascript:;">UI Design</a></li>
                        <li><a href="javascript:;">Mobile App Design</a></li>
                        </ul>
                        </div>
                        </div> --}}
            </div>

        </div>


        <div class="col-xl-9 col-md-8">
            <div class="profile-details mb-4">
                <div class="card wish-card mb-0">
                    <div class="card-header p-4">
                        <div class=" d-flex justify-content-between">
                            <!-- <h5>Purchased Courses ({{ $purchasedCouse->count() }} items)</h5> -->
                            <h5><a href="#">{{$purchasedCouse->coursedtls->title}}</a></h5>
                            <div class="text-right">
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#assignCourse">
                                    Assign Course
                                </button> -->
                            </div>
                        </div><br>
                        <div class=" d-flex justify-content-between">
                            <h6>Total Amount : {{ $purchasedCouse->course_total_amount }} </h6>
                            <div class="text-">
                                <h6>Installment: {{ $purchasedCouse->installment }} </h6>
                            </div>
                        </div>
                    </div>
                    <div class="comman-space pb-0">

                        <div class="settings-tickets-blk course-instruct-blk ">

                            <table class="table table-nowrap mb-2 dataTable">
                                <thead>
                                    <tr>
                                        <th>Total Amount</th>
                                        <th>Total Paid</th>
                                        <th>Total Due</th>
                                        <th>Installment Amount</th>
                                        <th>Next Installment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $purchasedCouse->course_total_amount}}</td>
                                        <td>{{$totalPaid}}</td>
                                        <td>{{($purchasedCouse->course_total_amount)-$totalPaid}}</td>
                                        <td>{{$monthlyInstallment}}</td>
                                        <td>{{$totalamount}}</td>
                                        <td> <button type="button" class="btn btn-info text-white" data-toggle="modal"
                                                data-target="#addPayment"
                                                data-course-id="{{ $purchasedCouse->course->id }}">
                                                Add Payment
                                            </button></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row">

                            @if ($purchasedCouse->count() == 0)
                            <p class="text-center">No purchased courses found</p>
                            @endif

                            {{-- <div class="col-lg-4 col-md-6 ">
                                    <div class="student-box flex-fill">
                                        <div class="student-img">
                                            <a href="student-profile.html">
                                                <img class="w-100" alt=""
                                                    src="{{ asset('img/course/course-01.jpg') }}">
                            </a>
                        </div>
                        <div class="student-content pb-0">
                            <h5><a href="course-details.html">Information About UI/UX Design
                                    Degree</a></h5>
                            <div class="rating-img d-flex align-items-center mb-2">
                                <img src="{{ asset('img/icon/icon-01.svg') }}" alt="">
                                <p>12+ Lesson</p>
                            </div>
                            <div class="course-view d-flex align-items-center mb-3">
                                <img src="http://127.0.0.1:8000/img/icon/icon-02.svg" alt="">
                                <p>9hr 30min</p>
                            </div>
                            <div class="remove-btn">
                                <a href="javascript:;" class="btn">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="student-box flex-fill">
                        <div class="student-img">
                            <a href="student-profile.html">
                                <img class="w-100" alt="" src="{{ asset('img/course/course-01.jpg') }}">
                            </a>
                        </div>
                        <div class="student-content pb-0">
                            <h5><a href="course-details.html">Information About UI/UX Design
                                    Degree</a></h5>
                            <div class="rating-img d-flex align-items-center mb-2">
                                <img src="{{ asset('img/icon/icon-01.svg') }}" alt="">
                                <p>12+ Lesson</p>
                            </div>
                            <div class="course-view d-flex align-items-center mb-3">
                                <img src="http://127.0.0.1:8000/img/icon/icon-02.svg" alt="">
                                <p>9hr 30min</p>
                            </div>
                            <div class="remove-btn">
                                <a href="javascript:;" class="btn">Remove</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
    </div>
</div>
<div class=" profile-details">
    <div class="card wish-card mb-0">
        <!-- <div class="card-header p-4">
            <h5>Wishlisted Course ({{ $wishlistedCousers->count() }} items)</h5>
        </div> -->
        <div class="comman-space pb-0">

            <div class="settings-tickets-blk course-instruct-blk ">

                <table class="table table-nowrap mb-2 dataTable">
                    <thead>
                        <tr>
                            <th>Sl.No</th>
                            <th>Invoice Number</th>
                            <th>Paid Amount</th>
                            <th></th>
                            <th>Due Amount</th>
                            <th>Payment Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = 0; ?>
                        @foreach ($studentPayments as $payment)
                        <?php $n++; ?>
                        <tr>
                            <td>{{ $n }}</td>
                            <td><a href="#">#{{ str_pad($payment->invoice_number, 3, '0', STR_PAD_LEFT) }}</a></td>
                            <td>{{ $payment->pay_amount }}</td>
                            <td>{{ $payment->due_amount }}</td>
                            <td></td>
                            <td>{{ date('d-m-Y',strtotime($payment->payment_date)) }}</td>
                            <td>
                                @if ($payment->status == 1)
                                <span class="badge badge-success">Paid</span>
                                @else
                                <span class="badge badge-danger">Not Paid</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('invoice.generate', ['id' => $payment->id]) }}">
                                    <button type="button" class="btn btn-info text-white" data-course-id="{{ $payment->id }}">
                                        Invoice
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>

{{-- assign course modal --}}
<div class="modal fade" id="assignCourse" tabindex="-1" role="dialog" aria-labelledby="assignCourseLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignCourseLabel">Assign Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.student.assign.course') }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <div class="form-group">
                        <label class="add-course-label">Course<span class="text-danger">*</span></label>
                        <select class="form-control " name="course_id" id="courses" required>
                            <option value="">Select a Courses</option>
                            @foreach ($courses as $key => $course)
                            <option value="{{ $key }}">{{ $course }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="add-course-label">Purchased Date <span class="text-danger">*</span></label>
                        <input type="datetime-local" class="form-control" required name="purchased_date">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Assign</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
{{-- add payment modal --}}
<div class="modal fade" id="addPayment" tabindex="-1" role="dialog" aria-labelledby="assignCourseLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignCourseLabel">Add Payment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.student.addpayment') }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="student_id" value="{{ $student->id }}">
                    <input type="hidden" id="courses" name="course_id" value="">
                    <div class="form-group">
                        <label class="add-course-label">Amount<span class="text-danger">*</span></label>
                        <input type="number" name="amount" class="form-control" required placeholder="₹">
                    </div>
                    <div class="form-group">
                        <label class="add-course-label">Date<span class="text-danger">*</span></label>
                        <input type="datetime-local" class="form-control" required name="payment_date">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Status</label>
                        <select class="form-select select country-select select2-hidden-accessible" name="status"
                            tabindex="-1" aria-hidden="true">
                            <option value="1">Paid</option>
                            <option value="0">Not Paid</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
<script>
$(document).on('click', '.btn[data-toggle="modal"]', function() {
    const courseId = $(this).data('course-id');
    $('#addPayment #courses').val(courseId);
});
</script>
@endpush
@endsection