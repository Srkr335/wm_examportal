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
                                    <h3>Modules</h3>
                                    <div class="go-dashboard text-center">
                                        <a href="{{ route('modules.create') }}" class="btn btn-primary">Add Modules</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="comman-space pb-0 card-body">

                                        <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                            <table class="table table-nowrap mb-2">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No</th>
                                                        <th>Module Name</th>
                                                        <th>Batch</th>
                                                        <th>Course</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $n = 0; ?>
                                                    @foreach ($modules as $module)
                                                        <?php $n++; ?>
                                                        <tr>
                                                            <td>{{ $n }}</td>

                                                            <td>{{ $module->modules_name }}</td>
                                                            <td>{{ $module->batch->name }}</td>
                                                            <td>{{ $module->course->title }}</td>
                                                            <td>
                                                                @if ($module->status == 1)
                                                                    <span class="badge info-low">Enabled</span>
                                                                @else
                                                                    <span class="badge info-inter">Disabled</span>
                                                                @endif
                                                                <td>
                                                                    <div class="d-flex align-items-center gap-2">
                                                                        <a href="{{ route('modules.edit', $module->id) }}" class="btn btn-primary text-white">
                                                                            <i class="fas fa-edit"></i> Edit
                                                                        </a>
                                                                        <button type="button" class="btn btn-danger text-white" onclick="confirmDelete({{ $module->id }})">
                                                                            <i class="fas fa-trash-alt"></i> Delete
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                                
                                                    @endforeach
                                                    @if ($modules->count() == 0)
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
                                            {{ $modules->links() }}
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
                <form id="deleteForm" method="POST" action=" {{ route('admin.modules.delete') }}">
                    @csrf
                    <input type="hidden" name="module_id" id="module_id">
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
    $('#module_id').val(id);

}
</script>
@endsection
