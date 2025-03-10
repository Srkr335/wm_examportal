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
                                    <h3>Exams</h3>
                                    <div class="go-dashboard text-center">
                                        <a href="{{ route('exam.create') }}" class="btn btn-primary">Add Exam</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="comman-space pb-0 card-body">

                                        <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                            <table class="table table-nowrap mb-2">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No</th>
                                                        <th>Exam</th>
                                                        <th>Marks</th>
                                                        <th>Batch</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $n = 0; ?>
                                                    @foreach ($exams as $exam)
                                                        <?php $n++; ?>
                                                        <tr>
                                                            <td>{{ $n }}</td>

                                                            <td>{{ $exam->exam_name }}</td>
                                                            <td>{{ $exam->marks }}</td>
                                                            @if($exam->batch_id)
                                                            <td>{{ $exam->batch->name}}</td>
                                                            @else
                                                            <td></td>
                                                            @endif
                                                            @if($exam->exam_date)
                                                            <td>{{date('d-m-Y',strtotime($exam->exam_date )) }}</td>
                                                            @else
                                                            <td></td>
                                                            @endif
                                                            <td>
                                                                @if ($exam->status == 1)
                                                                    <span class="badge info-low">Enabled</span>
                                                                @else
                                                                    <span class="badge info-inter">Disabled</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('exam.edit', $exam->id) }}"
                                                                    class="btn btn-info text-white">
                                                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                                                </a>
                                                                <button type="button" class="btn btn-danger text-white"
                                                                onclick="confirmDelete({{ $exam->id }})">Delete</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    @if ($exams->count() == 0)
                                                        <tr></tr>
                                                        <td colspan="7" class="text-center">No Data Found</td>
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
