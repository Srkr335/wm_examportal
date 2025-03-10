<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CommonApiController extends Controller
{
    public function profile()
    {
        // $profile = auth()->user()->student;
        $profile = auth()->user()->student()->with(['courses','batches'])->first();
        $profile->image = asset('images/student/' . $profile->image);
        return $this->responseWithSuccess('Profile fetched successfully', [
            'user' => auth()->user(),
            'profile' => $profile,
        ]);
    }


    public function profileUpdate(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->mobile_no = $request->phone;
        $user->save();


        $student = Student::where('user_id', auth()->user()->id)->first();
        // $student->name = $request->name;
        // $student->last_name = $request->l_name;
        // $student->student_code = $studentCode;
        // $student->user_id = $user->id;
        $student->mobile_no = $request->mobile_no;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->country_id = $request->country_id;
        $student->city = $request->city;
        $student->pincode = $request->pincode;
        // $student->payment_status = $request->payment_status;
        // $student->payment_amount = $request->payment_amount;
        $student->address_1 = $request->address_1;
        $student->address_2 = $request->address_2;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('/images/student'), $imageName);
            $student->image = $imageName;
        }
        $student->save();
    }

    public function getBanners()
    {
        $banners = Banner::where('status', 1)->select('id', 'title', 'image', 'url')->get();

        $banners->map(function ($banner) {
            $banner->image = asset('images/banners/' . $banner->image);
        });

        return $this->responseWithSuccess('Banners fetched successfully', $banners);
    }

    public function getCategories()
    {

        $categories = Category::where('status', 1)->select('id', 'name', 'image')->get();

        $categories->map(function ($category) {
            $category->image = asset('images/category/' . $category->image);
        });

        return $this->responseWithSuccess('Categories fetched successfully', $categories);
    }
}
