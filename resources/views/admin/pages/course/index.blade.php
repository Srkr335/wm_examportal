@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class=" col-md-12">
                <div class="row">
                    <div class="col-md-12">

                        <div class="s">

                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space d-flex justify-content-between align-items-center">
                                    <h3>Courses</h3>
                                    <div class="go-dashboard text-center">
                                        <a href="{{ url('/admin/course/create') }}" class="btn btn-primary">Create New
                                            Course</a>
                                    </div>
                                </div>
                                <div class="comman-space pb-0">

                                    <div class="settings-tickets-blk course-instruct-blk ">

                                        <table class="table table-nowrap mb-2 dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Image</th>
                                                    <th>Title</th>
                                                    <th>Duration</th>
                                                    <th>Level</th>
                                                    <th>Category</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

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
    </div>



    @push('scripts')
        {{-- <script>
            const list = document.querySelector('.more-details');
            const btn = document.querySelector('#showDropdown')

            btn.addEventListener('click', (e) => {

                list.classList.toggle('hidden')
                e.stopPropagation()
            })

            document.addEventListener('click', (e) => {
                if (e.target.closest('.more-details')) return

                list.classList.add('hidden')
            })
        </script> --}}
        <script type="text/javascript">
            $(function() {
                var table = $('.dataTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin.course.get') }}",
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'image',
                            name: 'image',
                            orderable: false,
                            searchable: false,
                            render: function(data, type, row) {
                                var imageUrl = data ? data :'/images/category/default.png'; // Replace with your default image path
                                return `<img src="${imageUrl}" alt="Course Image" width="50" height="50">`;
                            }
                        },
                        {
                            data: 'title',
                            name: 'title'
                        },
                        {
                            data: 'duration',
                            name: 'duration'
                        },
                        {
                            data: 'level',
                            name: 'level'
                        },
                        {
                            data: 'category',
                            name: 'category'
                        },
                        {
                            data: 'status',
                            name: 'status',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });
            });
        
            $(document).on('click', '.delete-course', function(e) {
    e.preventDefault();
    var courseId = $(this).data('id');

    if (confirm("Are you sure you want to delete this course?")) {
        $.ajax({
            // Updated URL to match your route
            url: '/admin/course/delete/' + courseId, 
            type: 'DELETE',
            data: { _token: '{{ csrf_token() }}' },
            success: function(response) {
                alert(response.message);
                location.reload(); // Refresh the page automatically after deletion
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert("An error occurred while deleting the course.");
            }
        });
    }
});

        </script> 
    @endpush
@endsection
