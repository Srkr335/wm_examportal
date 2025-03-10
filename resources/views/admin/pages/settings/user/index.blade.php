@extends('admin.layouts.admin_app')

@section('content')
<div class="container">
    <div class="settings-inner-blk p-0 border rounded">
    
        <div class="widget-setcount widget-btn mb-0  bg-light d-flex justify-content-between align-items-center ">
            <h4>User</h4>
            <a href="{{route('admin.settings.create_user')}}" class="btn btn-info-light">Create</a>
    </div>
     
        <div class="comman-space pb-0">
            <div class="">
                <div class="show-filter all-select-blk">
                <form action="javascript:void(0)" id="searchForm">
    <div class="row gx-2 align-items-center">
        <div class="col-md-6 col-lg-3 col-item">
            <div class="search-group mb-3">
                <i class="feather-search"></i>
                <input type="text" class="form-control" id="searchInput" placeholder="Search our user">
            </div>
        </div>
    </div>
</form>
<div id="searchResults"></div>
                </div>
            </div>
            <div class="settings-referral-blk course-instruct-blk  table-responsive">
    
            <table class="table table-nowrap mb-2 dataTable">
                    <thead>
                        <tr>
                            
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                   
                </table>
    
            </div>
        </div>
    </div>
</div>

    @push('scripts')
        <script>
           
            const list = document.querySelector('.more-details');
            const btn = document.querySelector('#showDropdown');

            btn.addEventListener('click', (e) => {

                list.classList.toggle('hidden')
                e.stopPropagation()
            })

            document.addEventListener('click', (e) => {
                if (e.target.closest('.more-details')) return

                list.classList.add('hidden')
            })
   
        </script>
         <script type="text/javascript">
            $(function() {
                var table = $('.dataTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('settings.getuser') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                            name: 'name',
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'type',
                            name: 'type'
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
        </script>
    @endpush
@endsection
