@extends('admin.layouts.admin_app')

@section('content')
<div class="container-fluid" style="transform: none;">
    <div class="row" style="transform: none;">

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">

                    <div class="">

                        <div class="settings-inner-blk p-0">
                            <div
                                class="sell-course-head comman-space d-flex justify-content-between align-items-center">
                                <h3>Services</h3>
                                <div class="go-dashboard text-center">
                                    <a href="{{ route('centre.create') }}" class="btn btn-primary">Add Centre</a>
                                </div>
                            </div>
                            <div class="card">
                                <div class="comman-space pb-0 card-body">

                                    <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                        <table class="table table-nowrap mb-2">
                                            <thead>
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Mobile</th>
                                                    <th>Website</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 0; ?>
                                                @foreach ($centers as $center)
                                                <?php $n++; ?>
                                                <tr>
                                                    <td>{{ $n }}</td>
                                                    <td>{{ $center->name }}</td>
                                                    <td>{{ $center->address }}</td>
                                                    <td>{{ $center->mobile }}</td>
                                                    <td><a href="{{ $center->website }}"
                                                            target="_blank">{{ $center->website }}</a></td>
                                                    <td>
                                                        @if ($center->status == 1)
                                                        <span class="badge info-low">Enabled</span>
                                                        @else
                                                        <span class="badge info-inter">Disabled</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="{{ route('centre.edit', $center->id) }}" class="btn btn-sm btn-primary d-flex align-items-center">
                                                                <i class="fas fa-edit me-1"></i> Edit
                                                            </a>
                                                            <button type="button" class="btn btn-sm btn-danger d-flex align-items-center"
                                                                onclick="confirmDelete({{ $center->id }})">
                                                                <i class="fas fa-trash-alt me-1"></i> Delete
                                                            </button>
                                                        </div>
                                                    </td>

                                                </tr>
                                                @endforeach
                                                @if ($centers->count() == 0)
                                                <tr></tr>
                                                <td colspan="5" class="text-center">No Data Found</td>
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
                                        {{ $centers->links() }}
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
                <form id="deleteForm" method="POST" action=" {{ route('admin.centre.delete') }}">
                    @csrf
                    <input type="hidden" name="centre_id" id="centre_id">
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
    $('#centre_id').val(id);

}
</script>


@endsection