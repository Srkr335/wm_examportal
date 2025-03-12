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
                                    <h3>Categories</h3>
                                    <div class="go-dashboard text-center">
                                        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Create New
                                            Category</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="comman-space pb-0 card-body">

                                        <div class="settings-tickets-blk course-instruct-blk table-responsive">

                                            <table class="table table-nowrap mb-2">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No</th>
                                                        <th>Image</th>
                                                        <th>Categry Name</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $n = 0; ?>
                                                    @foreach ($categories as $category)
                                                        <?php $n++; ?>
                                                        <tr>
                                                            <td>{{ $n }}</td>
                                                            <td>
                                                                <img src="{{ asset($category->image ? '/images/category/' . $category->image : '/images/category/default.png') }}" 
                                                                class="img-fluid" alt="" width="70px" height="70px">
                                                            </td>
                                                            <td>{{ $category->name }}</td>
                                                            <td>
                                                                @if ($category->status == 1)
                                                                    <span class="badge info-low">Enabled</span>
                                                                @else
                                                                    <span class="badge info-inter">Disabled</span>
                                                                @endif
                                                            </td>
                                                            <td>
<a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-primary text-white">
    <i class="fas fa-edit me-1"></i> Edit
</a>
<form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this category?');">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        <i class="fas fa-trash-alt me-1"></i> Delete
    </button>
</form>

                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6 text-right">
                                            {{ $categories->links() }}
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
@endsection
