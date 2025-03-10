@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space d-flex justify-content-between align-items-center">
                                    <h3>Payments</h3>
                                    <div class="go-dashboard text-center">
                                        <a href="{{ route('admin.payment.create') }}" class="btn btn-primary">Create New Payment</a>
                                    </div>
                                </div>
                               
                                <div class="comman-space pb-0">
                                    <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                        <table class="table table-nowrap mb-2 datatable">
                                            <thead>
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Student</th>
                                                    <th>Course</th>
                                                    <th>Amount</th>
                                                    <th>Month</th>
                                                    <th>End Date</th>
                                                    <th>Payment Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
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
        <script type="text/javascript">
            $(function() {
                var table = $('.datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin.payment.get') }}",
                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                        { data: 'student', name: 'student' },
                        { data: 'course', name: 'course' },
                        { data: 'amount', name: 'amount' },
                        { data: 'month', name: 'month' },
                        { data: 'end_date', name: 'end_date' },
                        { data: 'status', name: 'status' },
                        { data: 'action', name: 'action', orderable: false, searchable: false }
                    ]
                });

                // Handle Delete
                $(document).on('click', '.delete-payment', function(e) {
                    e.preventDefault();
                    var url = $(this).data('url');

                    if (confirm("Are you sure you want to delete this payment?")) {
                        $.ajax({
                            url: url,
                            type: 'DELETE',
                            data: { _token: "{{ csrf_token() }}" },
                            success: function(response) {
                                alert(response.message);
                                table.ajax.reload();
                            },
                            error: function(xhr) {
                                alert(xhr.responseJSON.message);
                            }
                        });
                    }
                });
            });
        </script>
    @endpush
@endsection
