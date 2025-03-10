@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
            <form action="{{ route('admin.payment.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="add-course-header pb-0">
                            <h2>Add Payment</h2>
                            <div class="add-course-btns">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ route('admin.payment.index') }}" class="btn btn-black">Back to
                                            Payments</a>
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
                                            <label class="form-control-label">Students</label>
                                            <select class="form-select multiple" name="students[]" id="student_id" required>
                                                <option data-select2-id="3">Select Student</option>
                                                @foreach ($students as $key => $students)
                                                    <option value="{{ $students->id }}">{{ $students->user->name.' '.'['.$students->reg_no.']'}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Course</label>
                                            <select class="form-select select " name="course" id="course_id" required>
                                                <option data-select2-id="3">Select Course</option>
                                                @foreach ($courses as $key => $course)
                                                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                                                @endforeach 
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Amount</label>
                                            <input type="number" class="form-control" placeholder="Enter amount" required
                                                name="amount">
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
                                                    <option value="{{ $key }}">{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">End Date</label>
                                            <input type="date" class="form-control" placeholder="Enter end date" required
                                                name="end_date">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Status</label>
                                            <select class="form-select select country-select select2-hidden-accessible"
                                                name="status" tabindex="-1" aria-hidden="true">
                                                <option value="0">Active</option>
                                                <option value="1">In-Active</option>

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
        $('.multiple').select2();
    const students = @json($students); // Pass courses from the backend as JSON.
</script>
<script>
    $('#student_id').change(function () {
    getCourse();
});

function getCourse() {
    var studentId = $('#student_id').val();

    if (!studentId) {
        // Clear the categories dropdown if no scheme is selected
        $('#course_id').html('<option value="">Choose Course</option>');
        return;
    }

    $.ajax({
        url: "{{ route('admin.payment.select_course') }}",
        method: "get",
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        data: {
            student_id: studentId,
        },
        success: function (res) {
            console.log(res);
            var options = '<option value="">-- Select --</option>';
            res.forEach(function (data) {
                options += '<option value="' + data.course.id + '">' + data.course.title + '</option>';
            });
            $('#course_id').html(options);
        },
        error: function (err) {
            console.error(err);
        }
    });
}
</script>
@endsection
