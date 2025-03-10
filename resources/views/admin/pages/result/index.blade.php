@extends('admin.layouts.admin_app')

@section('content')
    <div class="container-fluid" style="transform: none;">
        <div class="row" style="transform: none;">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">

                        <div class="">

                            <div class="settings-inner-blk p-0">
                                <div class="sell-course-head comman-space d-flex justify-content-between align-items-center">
                                    <h3>Exam Details</h3>
                                </div>
                                <div class="card">
                                    <div class="comman-space pb-0 card-body">

                                        <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                            <table class="table table-nowrap mb-2">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No</th>
                                                        <th>Exam Name</th>
                                                        <th>Exam Date</th>
                                                        <th>Marks</th>
                                                        <th>Batch</th>
                                                        <th>Course</th>
                                                        <th>Centre</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $n = 0; ?>
                                                    @foreach ($exams as $exam)
                                                        <?php $n++; ?>
                                                        <tr>
                                                            <td>{{ $n }}</td>
                                                            <td>{{$exam->exam_name}}</td>
                                                            <td>{{date('d-m-Y',strtotime($exam->exam_date))}}</td>
                                                            <td>{{$exam->marks}}</td>
                                                            <td>{{$exam->batch->name}}</td>
                                                            <td>{{$exam->course->title}}</td>
                                                            <td>{{$exam->centre->name}}</td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <a href="{{ route('exam_result.show', $exam->id) }}" class="btn btn-outline-info btn-sm rounded-pill shadow-sm">
                                                                        <i class="fas fa-eye"></i> View
                                                                    </a>
                                                                    <button type="button" class="btn btn-outline-danger btn-sm rounded-pill shadow-sm" onclick="confirmDelete({{ $exam->id }})">
                                                                        <i class="fas fa-trash-alt"></i> Delete
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            
                                                    @endforeach
                                                    @if ($exams->count() == 0)
                                                        <tr></tr>
                                                        <td colspan="6" class="text-center">No Data Found</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6 text-right">
                                            {{ $exams->links() }}
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
     <!-- Delete Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="POST" action=" {{ route('admin.exam.delete') }}">
                    @csrf
                    <input type="hidden" name="exam_id" id="exam_id">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        function confirmDelete(id) {
    var form = document.getElementById('deleteForm');
    $('#confirmDeleteModal').modal('show');
    $('#exam_id').val(id);
        }
</script>
@endsection
