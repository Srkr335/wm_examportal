@extends('admin.layouts.admin_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" data-select2-id="14">
                    <div class="widget-set" data-select2-id="13">
                        <div class="widget-setcount bg-light d-flex justify-content-between align-items-center ">
                            <h4>Edit Role</h4>
                            <button onclick="history.back()" class="btn btn-black">Back</button>
                        </div>
                        <div class="widget-content multistep-form" data-select2-id="12">
                            <fieldset id="first" data-select2-id="first">
                                <div class="add-course-info" data-select2-id="11">
                                <form action="{{ route('admin.settings.roles_update') }}" method="post">
                                    @csrf
                                    <div class="add-course-form" data-select2-id="10">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label class="add-course-label">Name</label>
                                                <input type="hidden" name="role_id" id="role_id" value="{{$role->id}}">
                                                <input type="text" placeholder="Role Name" id="role_name" name="role_name"
                                                class="form-control" value="{{$role->name}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                            <div class="text-dark d-flex align-items-center justify-content-between">
                                              <h5 class="mb-0">Select Permissions</h5>
                                              <label class="form-check mb-0 d-flex align-items-center form-switch">
                                              <span class="me-2">Check All</span>
                                              <input type="checkbox" class="form-check-input" id="checkall">
                                              </label>
                                            </div>

                                            </div>

                                              @foreach ($permissionBySection as $section => $permissionGroup)
                                            <div class="col-md-4">
                                                <div class="card" data-select2-id="14">
                                                    <div class="widget-set" data-select2-id="13">
                                                      <div class="p-3 bg-light d-flex justify-content-between align-items-center ">
                                                              <h6>{{$section}}</h6>
                                                      </div>
                                                      <div class="widget-content multistep-form" data-select2-id="12">
                                                        <fieldset id="first" data-select2-id="first">
                                                          <div class="add-course-info" data-select2-id="11">
                                                          
                                                            <div class=" p-4" data-select2-id="10">
                                                              
                                                                  @foreach ($permissionGroup as $permission)

                                                                  @php
                                                                  if (Arr::has($rolePermissionsBySection, $section)) {
                                                                      $allow = in_array(
                                                                          $permission['id'],
                                                                          $rolePermissionsBySection[$section],
                                                                          );
                                                                         
                                                    } else {
                                                        $allow = false;
                                                    }
                                                    @endphp
                                                                      <div class="row">
                                                                      <div class="form-group mb-0 d-flex justify-content-between">
                                                                        <label class="add-course-label">{{$permission['name']}}</label>
                                                                        <label class="form-check form-switch">
                                                                        <input type="checkbox" name="permissions[]"
                                                                            class="form-check-input togglerole-sw"
                                                                            value="{{ $permission['id'] }}" {{ $allow  ? "checked" : '' }}>
                                                                        <span class="slider round"></span>
                                                                    </label>
                                                                       
                                                                      </div>
                                                                      </div>
                                                                      @endforeach
                                                            </div>
                                          
                                                          </div>
                                          
                                                                      
                                                              
                                                        </fieldset>
                                                      </div>
                                                          
                                                          </div>
                                                        
                                                      
                                                      </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>


                                </div>
                                <div class="widget-btn">
                                <button type="submit" class="btn btn-info-light text-white">Submit</button>
                                    <a href="" class="btn btn-black">Reset</a>
                                    {{-- <a class="btn btn-black">Back</a> --}}
                                </div>
                                </form>
                        </div>
                        </fieldset>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var checkAllCheckbox = document.getElementById("checkall");
            var toggleCheckboxes = document.querySelectorAll('.form-check-input');

            // Event listener for "check-all" checkbox
            checkAllCheckbox.addEventListener("change", function() {
                toggleCheckboxes.forEach(function(checkbox) {
                    checkbox.checked = checkAllCheckbox.checked;
                });
            });

            // Event listener for individual checkboxes
            toggleCheckboxes.forEach(function(checkbox) {
                checkbox.addEventListener("change", function() {
                    checkAllCheckbox.checked = Array.from(toggleCheckboxes).every(function(cb) {
                        return cb.checked;
                    });
                });
            });

            // Check all checkboxes on page load
            // toggleCheckboxes.forEach(function(checkbox) {
            //     checkbox.checked = false;
            // });
        });
    </script>

    @endpush
@endsection
