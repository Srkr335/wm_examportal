@extends('admin.layouts.admin_app')

@section('content')
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
            <form action="{{ route('admin.settings.update_user') }}" method="POST" enctype="multipart/form-data" id="userForm" onsubmit="validateUser(event)">
                @csrf
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="add-course-header pb-0">
                            <h2>Edit User</h2>
                            <div class="add-course-btns">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ route('settings.user') }}" class="btn btn-black">Back to
                                            Users</a>
                                    </li>
                                    <li>
                                        <button type="submit" class="btn btn-success-dark">Save</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12">
                    <div class=" profile-details">
                        <div class="settings-menu p-0">
                            

                            <div class="checkout-form personal-address add-course-info ">
                                <div class="personal-info-head">
                                    <h4>Personal Details</h4>
                                    {{-- <p>Edit your personal information and address.</p> --}}
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Name</label>
                                            <input type="hidden" name="user_id" id="user_id" value="{{$editUser->id}}">
                                            <input type="text" class="form-control" placeholder="Enter Name"
                                                name="username" id="username" value="{{$editUser->name}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Email</label>
                                            <input type="email" id="email" class="form-control" placeholder="Enter Name"
                                                name="email"  value="{{$editUser->email}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Mobile</label>
                                            <input type="number" class="form-control" placeholder="Enter Phone Number"
                                                name="mobile" id="mobile"  value="{{$editUser->mobile_no}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Password</label>
                                            <input type="password" class="form-control" placeholder="Enter Password"
                                                name="password" id="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Enter Confirm Password"
                                                name="c_password" id="c_password" oninput="checkPasswords()">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Roles</label>
                                            <select class="form-control" name="roles[]" id="roles">
                                                <option value="">Choose Roles</option>
                                                @foreach ($roles as $id => $name)
                                                <option value="{{ $id }}" {{ in_array($id, $userRole) ? "selected" : '' }}>{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
    <script>
    function checkPasswords() {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('c_password').value;
        const cPasswordField = document.getElementById('c_password');
        
        if (password !== confirmPassword) {
            cPasswordField.style.border = '2px solid red';
        } else {
            cPasswordField.style.border = '2px solid green';
        }
    }
</script>
<script>
    function validateUser(event) {
        event.preventDefault(); // Prevent form submission

        // Get input values
        const username = document.getElementById('username').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        const mobileNumber = document.getElementById('mobile').value.trim();
        const mobileRegex = /^(\+?\d{1,4}[-\s]?)?\d{10,15}$/;

        // Validate username (e.g., at least 3 characters, no special characters)
        const usernameRegex = /^[a-zA-Z0-9_ ]{3,20}$/;
        if (!usernameRegex.test(username)) {
            alert('Username must be 3-20 characters and can only include letters, numbers,spaces and underscores.');
            return;
        }

        // Validate email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Please enter a valid email address.');
            return;
        }

        // Validate password (e.g., at least 6 characters)
        if(password )
        {
            if (password.length < 6) {
            alert('Password must be at least 6 characters long.');
            return;
        }
        }

        if (!mobileRegex.test(mobileNumber)) {
        alert('Please enter a valid mobile number (e.g., +1234567890 or 1234567890).');
        return false;
        }

        // If all validations pass
        alert('Form submitted successfully!');
        document.getElementById('userForm').submit(); // Submit the form programmatically
    }
</script>
@endsection
