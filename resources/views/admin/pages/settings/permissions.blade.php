@extends('admin.layouts.admin_app')

@section('content')
<div class="container">
    <div class="settings-inner-blk p-0 border rounded">
    
        <div class="widget-setcount widget-btn mb-0  bg-light d-flex justify-content-between align-items-center ">
            <h4>Roles & Permissions</h4>
            <a href="{{route('settings.permissions.create')}}" class="btn btn-info-light">Create</a>
    </div>
     
        <div class="comman-space pb-0">
            <div class="">
                <div class="show-filter all-select-blk">
                    <form action="#">
                        <div class="row gx-2 align-items-center">
                            <div class="col-md-6 col-lg-3 col-item">
                                <div class=" search-group mb-3">
                                    <i class="feather-search"></i>
                                    <input type="text" class="form-control" placeholder="Search our courses">
                                </div>
                            </div>
                           
                        </div>
                    </form>
                </div>
            </div>
            <div class="settings-referral-blk course-instruct-blk  table-responsive">
    
                <table class="table table-nowrap mb-0">
                    <thead>
                        <tr>
                            
                            <th>#</th>
                            <th>ROLES</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $role->name}}</td>
                            <td>
                           
                                <a href="{{ route('admin.settings.roles_edit',['id' => $role->id]) }}"
                                class="btn btn-info text-white">
                                <span class="glyphicon glyphicon-edit"></span> Edit
                                </a>
                               
                               @if($role->id !=1 && $role->id !=2)
                               <a href="{{ route('admin.settings.roles_delete',['id' => $role->id]) }}"
                                class="btn btn-danger text-white">
                                <span class="glyphicon glyphicon-trash"></span> Delete
                                </a>
                               @endif
                               
                                </td>
                        </tr>
                        @endforeach
                       
                    </tbody>
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
    @endpush
@endsection
