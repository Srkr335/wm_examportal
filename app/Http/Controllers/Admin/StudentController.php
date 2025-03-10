<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentPurchasedCourse;
use App\Models\StudentWishlistedCourse;
use App\Models\User;
use App\Models\Batch;
use App\Models\Scheme;
use App\Models\Category;
use App\Models\Centre;
use App\Models\CourseCentre;
use App\Models\StudentPayment;
use App\Models\SchemeCategoryCourse;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rollId = auth()->user()->roles[0]->id;
        if ($rollId == 2)  // role centre
        {
            $students = Student::where('centre_id', auth()->user()->centre->id)->orderBy('id', 'desc')->paginate(10);
        } else {
            $students = Student::orderBy('id', 'desc')->paginate(10);
        }
        return view('admin.pages.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schemes = Scheme::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        $batches = Batch::where('status', 1)->get();
        $courses = Course::where('status', 1)->get();
        $countries = Country::get();
        return view('admin.pages.students.create', compact('countries', 'courses', 'batches', 'schemes', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|email|unique :users,email'
        ]);
        $schemeDtl = Scheme::where('id',$request->scheme)->first();
        $offerPercentage = $schemeDtl->discount; // Assuming this is the offer percentage
        $courseFee = $request->course_fee;
        $discountAmount = ($courseFee * $offerPercentage) / 100;
        $courseTotalAmount = $courseFee - $discountAmount;
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->mobile_no = $request->phone;
        $user->is_student = 1;
        $user->save();

        $studentCode = random_int(100000, 999999);

        $student = new Student();
        // $student->name = $request->name;
        // $student->last_name = $request->l_name;
        $student->student_code = $studentCode;
        $student->user_id = $user->id;
        $student->mobile_no = $request->phone;
        $student->email = $request->email;
        $student->dob = $request->b_day;
        $student->country_id = $request->country;
        $student->city = $request->city;
        $student->pincode = $request->zipcode;
        // $student->payment_status = $request->payment_status;
        // $student->payment_amount = $request->payment_amount;
        $student->address_1 = $request->address_1;
        $student->address_2 = $request->address_2;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('/images/student'), $imageName);
            $student->image = $imageName;
        }
        $student->reg_no = $request->register_no;
        // $student->course_id = $request->course;
        $student->batch_id = $request->batch;
        $student->scheme_id = $request->scheme;
        $student->category_id = $request->category;
        $student->centre_id = $request->centre;
        $student->status = $request->status;
        $student->save();

        if ($request->course) {
            $purchased = new StudentPurchasedCourse();
            $purchased->student_id = $student->id;
            $purchased->course_id = $request->course;
            $purchased->course_total_amount = $courseTotalAmount;
            $purchased->installment = $request->course_installment;
            $purchased->purchased_date = $student->created_at;
            $purchased->save();
        }

        return redirect()->route('admin.student.index')->with('success', 'Student added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $purchasedCouse = StudentPurchasedCourse::where('student_id', $id)->first();
        $wishlistedCousers = StudentWishlistedCourse::where('student_id', $id)->get();
        $studentPayments = StudentPayment::where('student_id', $id)->orderBy('created_at', 'asc')->get();
        $totalDue = $studentPayments->sum('due_amount'); // Sum up all due amounts
        $totalPaid = $studentPayments->sum('pay_amount');
        $totalamount = 0;
        foreach ($studentPayments as $studentpayment)
        {
            $totalamount = $studentpayment->current_installment + $totalDue;
        }
        $totalPaid =  $studentPayments->sum('pay_amount');
        // $monthlyInstallment =  $purchasedCouse->course_total_amount/$purchasedCouse->installment;
        if ($purchasedCouse->installment > 0) {
            $monthlyInstallment = $purchasedCouse->course_total_amount / $purchasedCouse->installment;
            $monthlyInstallment = number_format($monthlyInstallment, 2); // Formats to two decimal places
        } else {
            $monthlyInstallment = 0; // Handle case where installment is zero
        }
     
        $courses = Course::where('status', 1)->pluck('title', 'id')->toArray();
        return view('admin.pages.students.show', compact('student', 'purchasedCouse', 'wishlistedCousers', 'courses', 'studentPayments', 'totalPaid','monthlyInstallment','totalamount','totalDue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::with('courses')->find($id);
        $countries = Country::get();
        $batches = Batch::where('status', 1)->get();
        $courses = Course::where('status', 1)->get();
        $purchasedCousers = StudentPurchasedCourse::with('coursedtls')->where('student_id', $id)->first();
        $wishlistedCousers = StudentWishlistedCourse::where('student_id', $id)->get();
        return view('admin.pages.students.edit', compact('student', 'purchasedCousers', 'wishlistedCousers', 'countries', 'batches', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $schemeDtl = Scheme::where('id',$student->scheme_id)->first();
        $offerPercentage = $schemeDtl->discount; // Assuming this is the offer percentage
        $courseFee = $request->course_fee;
        $discountAmount = ($courseFee * $offerPercentage) / 100;
        $courseTotalAmount = $courseFee - $discountAmount;
        $student = Student::find($id);
        // $student->name = $request->name;
        // $student->last_name = $request->l_name;
        // $student->student_code = $studentCode;
        // $student->user_id = $user->id;
        $student->mobile_no = $request->phone;
        $student->email = $request->email;
        $student->dob = $request->b_day;
        $student->country_id = $request->country;
        $student->city = $request->city;
        $student->pincode = $request->zipcode;
        // $student->payment_status = $request->payment_status;
        // $student->payment_amount = $request->payment_amount;
        $student->address_1 = $request->address_1;
        $student->address_2 = $request->address_2;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('/images/student'), $imageName);
            $student->image = $imageName;
        }
        $student->reg_no = $request->register_no;
        // $student->course_id = $request->course;
        $student->status = $request->status;
        $student->save();

        $user = User::find($student->user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->mobile_no = $request->phone;
        $user->save();

        if ($request->course) {
            $purchased = StudentPurchasedCourse::where('student_id', $student->id)->first();
            if ($purchased) {
                // $purchased->students_id = $student->id;
                $purchased->course_id = $request->course;
                $purchased->course_total_amount = $courseTotalAmount;
                $purchased->installment = $request->course_installment;
                $purchased->purchased_date = $student->created_at;
                $purchased->save();
            } else {
                $purchased = new StudentPurchasedCourse();
                $purchased->student_id = $student->id;
                $purchased->course_id = $request->course;
                $purchased->course_total_amount = $courseTotalAmount;
                $purchased->installment = $request->course_installment;
                $purchased->purchased_date = $student->created_at;
                $purchased->save();
            }
        }

        return redirect()->route('admin.student.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function assignPurchaseCourse(request $request)
    {
        $purchaseCourse = new StudentPurchasedCourse();
        $purchaseCourse->student_id = $request->student_id;
        $purchaseCourse->course_id = $request->course_id;
        $purchaseCourse->purchased_date = Carbon::parse($request->purchased_date)->format('Y-m-d H:i:s');
        $purchaseCourse->save();

        return redirect()->back()->with('success', 'Course added to Purchased');
    }
    public function removePurchaseCourse(request $request)
    {
        StudentPurchasedCourse::where('student_id', $request->student_id)->where('course_id', $request->course_id)->delete();
        return redirect()->back()->with('success', 'Course removed from Purchased');
    }
    public function removeWishlistCourse(request $request)
    {
        StudentWishlistedCourse::where('student_id', $request->student_id)->where('course_id', $request->course_id)->delete();
        return redirect()->back()->with('success', 'Course removed from Wishlist');
    }
    public function getCategory(Request $request)
    {
        // $schemeId = $request->scheme_id;
        // $categories = Scheme::with('category')
        // ->where('id', $schemeId)
        // ->get();

        // return response()->json($categories);
        $schemeId = $request->scheme_id;

        $scheme = SchemeCategoryCourse::with('category')  // Eager load 'category' with id and name columns
            ->where('scheme_id', $schemeId)
            ->get()
            ->unique('cat_id');

        return $scheme;
    }
    public function getCourse(Request $request)
    {
        $catId = $request->cat_id;

        $cate = SchemeCategoryCourse::with('course')  // Eager load 'category' with id and name columns
            ->where('cat_id', $catId)
            ->get();

        return $cate;
    }
    public function getCentre(Request $request)
    {
        $courseId = $request->course_id;

        // $course = Course::with('centre')  // Eager load 'category' with id and name columns
        // ->where('id', $courseId)
        // ->get();

        $course = CourseCentre::with('centre')  // Eager load 'category' with id and name columns
            ->where('course_id', $courseId)
            ->get();

        return $course;
    }
    public function getBatch(Request $request)
    {
        $centreId = $request->centre_id;

        $batch = Batch::where('centre_id', $centreId)
            ->get();

        return $batch;
    }
    public function addPayment(Request $request)
    {
        $purchasedCouse = StudentPurchasedCourse::where('student_id',$request->student_id)->first();
        if ($purchasedCouse->installment > 0) {
            $monthlyInstallment = $purchasedCouse->course_total_amount / $purchasedCouse->installment;
            $monthlyInstallment =$monthlyInstallment; // Formats to two decimal places
        } else {
            $monthlyInstallment = 0; // Handle case where installment is zero
        }
        $dueAmount=$monthlyInstallment -  $request->amount;

        $purchasedCourse = StudentPurchasedCourse::where('student_id', $request->student_id)->where('course_id',$request->course_id)->first();
        $lastInvoice = StudentPayment::latest()->first();
        $installment = StudentPayment::where('student_id',$request->student_id)->where('course_id',$request->course_id)->latest()->first();
        $invoiceNumber = $lastInvoice ? $lastInvoice->invoice_number + 1 : 1;
        $studentId =  $request->student_id;
        $payment = new StudentPayment();
        $payment->student_id = $request->student_id;
        $payment->course_id = $request->course_id;
        $payment->invoice_number = $invoiceNumber;
        $payment->pay_amount = $request->amount;
        $payment->installment = $installment ? $installment->installment + 1 : 1;
        $payment->amount = $purchasedCourse->course_total_amount;
        $payment->current_installment = $monthlyInstallment;
        $payment->due_amount =$dueAmount;
        $payment->payment_date = Carbon::parse($request->payment_date)->format('Y-m-d');
        $payment->status = $request->status;
        $payment->save();

        return redirect()->route('admin.student.show', ['id' => $studentId])->with('status', 'Payments added successfully');
    }

}
