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
                                    <h3>Study Materials for {{ @$course->title }}</h3>
                                    <div class="go-dashboard text-center">
                                        <button class="btn btn-primary" id="add-study-material">Add
                                            Study Material</button>
                                    </div>
                                </div>
                                <div class="comman-space pb-0">
                                    <div class="row col-md-12 d-none" id="add-study-material-form">
                                        <form action="{{ route('admin.course.study-materials.store') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="course_id" value="{{ @$course->id }}">

                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Title</label>
                                                    <input type="text" name="title" id="title"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">File</label>
                                                    <input type="file" name="file" id="file"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label">Description</label>
                                                    {{-- <input type="text" name="description" id="description"
                                                        class="form-control"> --}}
                                                    <textarea name="description" id="description" cols="20" rows="5" class="form-control"></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Is Free</label>
                                                    <select name="is_free" id="is_free" class="form-control">
                                                        <option value="1">Free</option>
                                                        <option value="0">Paid</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Status</label>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="1">Active</option>
                                                        <option value="0">In-Active</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex justify-content-end gap-2 mt-3">
                                                    <button type="button" class="btn btn-danger"
                                                        id="close-study-material">Cancel</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row col-md-12 d-none" id="edit-study-material-form">
                                        <form action="{{ route('admin.course.study-materials.update') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="material_id" id="material_id" value="">
                                            <div class="form-group row">
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Title</label>
                                                    <input type="text" name="title" id="edit_title"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">File</label>
                                                    <input type="file" name="file" id="file"
                                                        class="form-control">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="" class="form-label">Description</label>
                                                    {{-- <input type="text" name="description" id="edit_description"
                                                        class="form-control"> --}}
                                                    <textarea name="description" id="edit_description" cols="20" rows="5" class="form-control"></textarea>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Is Free</label>
                                                    <select name="is_free" id="edit_is_free" class="form-control">
                                                        <option value="1">Free</option>
                                                        <option value="0">Paid</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Status</label>
                                                    <select name="status" id="edit_status" class="form-control">
                                                        <option value="1">Active</option>
                                                        <option value="0">In-Active</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex justify-content-end gap-2 mt-3">
                                                    <button type="button" class="btn btn-danger"
                                                        id="close-study-material-edit">Cancel</button>
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="settings-tickets-blk course-instruct-blk ">

                                        <table class="table table-nowrap mb-2 dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Sl.No</th>
                                                    <th>Title</th>
                                                    <th>Payment</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 0; ?>
                                                @if (count($studyMaterials) > 0)
                                                    @foreach ($studyMaterials as $material)
                                                        <tr>
                                                            <td>{{ ++$n }}</td>
                                                            <td>{{ $material->title }}</td>
                                                            <td>
                                                                @if ($material->is_free == 1)
                                                                    <span class="badge info-low">Free</span>
                                                                @else
                                                                    <span class="badge info-inter">Paid</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($material->status == 1)
                                                                    <span class="badge info-low">Enabled</span>
                                                                @else
                                                                    <span class="badge info-inter">Disabled</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <button class="btn btn-info text-white"
                                                                    id="edit-study-material" data-id="{{ $material->id }}"
                                                                    data-title="{{ $material->title }}"
                                                                    data-description="{{ $material->description }}"
                                                                    data-free="{{ $material->is_free }}"
                                                                    data-status="{{ $material->status }}">
                                                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                                                </button>
                                                                <a href="{{ route('admin.course.study-materials.delete', $material->id) }}"
                                                                    class="btn btn-danger text-white">
                                                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="5" class="text-center">No Record Found</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6 text-right">
                                                {{ $studyMaterials->links() }}
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
    </div>



    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#add-study-material').on('click', function() {
                    $('#add-study-material-form').toggleClass('d-none');
                });
                $('#close-study-material').on('click', function() {
                    $('#add-study-material-form').toggleClass('d-none');
                });
            });

            // function editStudyMaterial(id) {
            //     $.ajax({
            //         url: "{{ route('admin.course.study-materials.edit') }}",
            //         method: "get",
            //         data: {
            //             _token: "{{ csrf_token() }}",
            //             id: id,
            //         },
            //         success: function(res) {
            //             console.log(res);
            //         }
            //     });
            // }

            $(document).on('click', '#edit-study-material', function() {
                var id = $(this).data('id');
                var title = $(this).data('title');
                var description = $(this).data('description');
                var free = $(this).data('free');
                var status = $(this).data('status');
                $('#edit_title').val(title);
                $('#edit_description').val(description);
                $('#edit_is_free').val(free);
                $('#edit_status').val(status);
                $('#material_id').val(id);
                $('#edit-study-material-form').toggleClass('d-none');
            });
        </script>
    @endpush
@endsection
