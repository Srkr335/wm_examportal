@extends('admin.layouts.admin_app')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card" data-select2-id="14">
          <div class="widget-set" data-select2-id="13">
            <div class="widget-setcount bg-light d-flex justify-content-between align-items-center ">
                    <h4>General Settings</h4>
                    <a href="{{ route("settings") }}" class="btn btn-black">Back</a>
            </div>
            <div class="widget-content multistep-form" data-select2-id="12">
              <fieldset id="first" data-select2-id="first">
                <div class="add-course-info" data-select2-id="11">
                
                  <div class="add-course-form" data-select2-id="10">
                    
                        <form action="#" data-select2-id="9">
                            <div class="add-course-inner-header text-dark ">
                                <h5>Add Your Company Information</h5>
                              </div>
                            <div class="row">
                            <div class="form-group col-md-6">
                              <label class="add-course-label">Company Name</label>
                              <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                              <label class="add-course-label">Company Tagline</label>
                              <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                              <label class="add-course-label">Email Address</label>
                              <input type="email" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                              <label class="add-course-label">Phone Number</label>
                              <input type="email" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-12">
                              <label class="add-course-label">Address</label>
                              <textarea class="form-control" placeholder=""></textarea>
                            </div>

                            <div class="add-course-inner-header text-dark pt-4 border-top border-1">
                                <h5>Add the code prefixes</h5>
                              </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Client Prefix </label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Supplier Prefix </label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Employee Prefix </label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Product Category Prefix </label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Product Sub Category Prefix </label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Product Prefix</label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>

                            <div class="form-group col-md-4">
                              <label class="add-course-label">Expense Category Prefix</label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="add-course-label">Expense Sub Category Prefix</label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Purchase Prefix </label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Purchase Return Prefix</label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Quotation Prefix </label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Invoice Prefix </label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Invoice Return Prefix </label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                            <div class="form-group col-md-4">
                              <label class="add-course-label">Inventory Adjustment Prefix </label>
                              <input type="" class="form-control" placeholder="Course Title">
                            </div>
                          

                            <div class="add-course-inner-header text-dark pt-4 border-top border-1">
                                <h5>Add your default elements</h5>
                              </div>
                            <div class="form-group col-md-6">
                              <label class="add-course-label">Default Currency</label>
                              <select class="form-control select select2-hidden-accessible"  tabindex="-1" aria-hidden="true">
                                <option data-select2-id="6">Level 01</option>
                                <option>Level 02</option>
                                <option>Level 03</option>
                                <option>Level 04</option>
                              </select>  </div>
                            <div class="form-group col-md-6">
                              <label class="add-course-label">Default Language</label>
                              <select class="form-control select-language select2-hidden-accessible"  tabindex="-1" aria-hidden="true">
                                <option data-select2-id="6">Level 01</option>
                                <option>Level 02</option>
                                <option>Level 03</option>
                                <option>Level 04</option>
                              </select>  </div>
                            <div class="form-group col-md-6">
                              <label class="add-course-label">Default Client</label>
                              <select class="form-control select-language select2-hidden-accessible"  tabindex="-1" aria-hidden="true">
                                <option data-select2-id="6">Level 01</option>
                                <option>Level 02</option>
                                <option>Level 03</option>
                                <option>Level 04</option>
                              </select>  </div>
                            <div class="form-group col-md-6">
                              <label class="add-course-label">Default Account</label>
                              <select class="form-control select-language select2-hidden-accessible"  tabindex="-1" aria-hidden="true">
                                <option data-select2-id="6">Level 01</option>
                                <option>Level 02</option>
                                <option>Level 03</option>
                                <option>Level 04</option>
                              </select>  </div>
                            <div class="form-group col-md-6">
                              <label class="add-course-label">Default VAT Rate</label>
                              <select class="form-control select-language select2-hidden-accessible"  tabindex="-1" aria-hidden="true">
                                <option data-select2-id="6">Level 01</option>
                                <option>Level 02</option>
                                <option>Level 03</option>
                                <option>Level 04</option>
                              </select>  </div>
                        
                       

                              <div class="form-group col-md-6">
                                <label class="add-course-label">Copyright Text </label>
                                <input type="" class="form-control" placeholder="Course Title">
                              </div>

                              <div class="form-group col-md-6">
                                <label class="add-course-label">Logo </label>
                                <div class="border-0">
                                    <input type="file" class="file-input mb-3 form-control">
                                  </div>
                                  <div class="imageWrapper">
                                    <img class="image" src="">
                                  </div>
                              </div>
                              <div class="form-group col-md-6">
                                <label class="add-course-label">Small Logo </label>
                                <div class="border-0">
                                    <input type="file" class="file-input-Small mb-3 form-control">
                                  </div>
                                  <div class="imageWrapper">
                                    <img class="small-logo" src="">
                                  </div>
                              </div>
                              <div class="form-group col-md-6">
                                <label class="add-course-label">Favicon </label>
                                <div class="border-0">
                                    <input type="file" class="favicon mb-3 form-control">
                                  </div>
                                  <div class="imageWrapper">
                                    <img class="fav-logo" src="">
                                  </div>
                              </div>
                                   
                                  </div>
                                </div>

                    </div>

                          </form>  
                    
                  </div>
                  <div class="widget-btn">
                    <a class="btn btn-info-light text-white next_btn">Submit</a>
                    <a href="" class="btn btn-black">Reset</a>
                    {{-- <a class="btn btn-black">Back</a> --}}
                  </div>
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
    $('.file-input').change(function(){
    var curElement = $('.image');
    console.log(curElement);
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        curElement.attr('src', e.target.result);
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});
</script>
<script>
    $('.file-input-Small').change(function(){
    var curElement = $('.small-logo');
    console.log(curElement);
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        curElement.attr('src', e.target.result);
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});
</script>
<script>
    $('.favicon').change(function(){
    var curElement = $('.fav-logo');
    console.log(curElement);
    var reader = new FileReader();

    reader.onload = function (e) {
        // get loaded data and render thumbnail.
        curElement.attr('src', e.target.result);
    };

    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});
</script>
@endpush
@endsection