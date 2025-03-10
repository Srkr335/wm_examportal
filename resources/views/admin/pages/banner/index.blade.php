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
                                    <h3>Banners</h3>
                                    <div class="go-dashboard text-center">
                                        <a href="{{ route('admin.banner.create') }}" class="btn btn-primary">Add New
                                            Banner</a>
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
                                                        <th>Title</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $n = 0; ?>
                                                    @foreach ($banners as $banner)
                                                        <?php $n++; ?>
                                                        <tr>
                                                            <td>{{ $n }}</td>
                                                            <td>
                                                                <img src="{{ asset($banner->image ? '/images/banners/' . $banner->image : '/images/category/default.png')}}"
                                                                    class="img-fluid" alt="" width="70px"
                                                                    height="70px">
                                                            </td>
                                                            <td>{{ $banner->title }}</td>
                                                            <td>
                                                                @if ($banner->status == 1)
                                                                    <span class="badge info-low">Enabled</span>
                                                                @else
                                                                    <span class="badge info-inter">Disabled</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <!-- Edit Button -->
                                                                <a href="{{ route('admin.banner.edit', $banner->id) }}" class="btn btn-info text-white">
                                                                    <span class="glyphicon glyphicon-edit"></span> Edit
                                                                </a>
                                                            
                                                                <!-- Delete Button -->
                                                                <form action="{{ route('admin.banner.destroy', $banner->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this banner?');">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">
                                                                        <span class="glyphicon glyphicon-trash"></span> Delete
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
                                            {{ $banners->links() }}
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
