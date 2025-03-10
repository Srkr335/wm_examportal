<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use App\Models\StudentPayment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.pages.payment.index');
    }

    // public function getStudentPayment(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data = StudentPayment::leftJoin('students', 'students.id', 'student_payments.student_id')
    //             ->leftJoin('users', 'users.id', 'students.user_id')
    //             ->leftJoin('courses', 'courses.id', 'student_payments.course_id')
    //             ->orderBy('student_payments.id', 'desc')
    //             ->select('student_payments.id', 'student_payments.student_id as student', 'users.name', 'users.email', 'users.mobile_no', 'student_payments.amount', 'student_payments.month', 'student_payments.end_date', 'student_payments.status', 'courses.title as course_title');
    //         return DataTables::of($data)
    //             ->addIndexColumn()
    //             ->editColumn('student', function ($row) {
    //                 return '<a href="' .route("admin.student.show", $row->student) . '" >' . $row->name . '</a>';
    //             })
    //             ->editColumn('course', function ($row) {
    //                 return $row->course_title;
    //             })
    //             ->editColumn('month', function ($row) {
    //                 $month = [
    //                     1 => 'January',
    //                     2 => 'February',
    //                     3 => 'March',
    //                     4 => 'April',
    //                     5 => 'May',
    //                     6 => 'June',
    //                     7 => 'July',
    //                     8 => 'August',
    //                     9 => 'September',
    //                     10 => 'October',
    //                     11 => 'November',
    //                     12 => 'December'
    //                 ];
    //                 return $row->month ? $month[(int)$row->month] : ''; // Convert to integer
    //             })
    //             ->editColumn('end_date', function ($row) {
    //                 return Carbon::parse($row->end_date)->format('d M, Y');
    //             })
    //             ->editColumn('status', function ($row) {
    //                 return $row->status === 1 ? '<span class="badge info-low">Active</span>' : '<span class="badge info-inter">Inactive</span>';
    //             })
    //             ->addColumn('action', function ($row) {
    //                 return '<a href="' .   route("admin.payment.edit", $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a>';
    //             })
    //             ->rawColumns(['student', 'course', 'status', 'action'])
    //             ->make(true);
    //     }
    // }
    public function getStudentPayment(Request $request)
    {
        if ($request->ajax()) {
            $data = StudentPayment::leftJoin('students', 'students.id', 'student_payments.student_id')
                ->leftJoin('users', 'users.id', 'students.user_id')
                ->leftJoin('courses', 'courses.id', 'student_payments.course_id')
                ->orderBy('student_payments.id', 'desc')
                ->select(
                    'student_payments.id',
                    'student_payments.student_id as student',
                    'users.name',
                    'users.email',
                    'users.mobile_no',
                    'student_payments.amount',
                    'student_payments.month',
                    'student_payments.end_date',
                    'student_payments.status',
                    'courses.title as course_title'
                );
    
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('student', function ($row) {
                    return '<a href="' . route("admin.student.show", $row->student) . '" >' . $row->name . '</a>';
                })
                ->editColumn('course', function ($row) {
                    return $row->course_title;
                })
                ->editColumn('month', function ($row) {
                    $months = [
                        1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
                        5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
                        9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
                    ];
                    return $row->month ? $months[(int)$row->month] : '';
                })
                ->editColumn('end_date', function ($row) {
                    return Carbon::parse($row->end_date)->format('d M, Y');
                })
                ->editColumn('status', function ($row) {
                    return $row->status === 1 ? '<span class="badge info-low">Active</span>' : '<span class="badge info-inter">Inactive</span>';
                })
                ->addColumn('action', function ($row) {
                    return '<div class="d-flex">
                                <a href="' . route("admin.payment.edit", $row->id) . '" class="btn btn-primary btn-sm mx-1">Edit</a> 
`                                <button data-url="' . route("admin.payment.delete", $row->id) . '" class="delete-payment btn btn-danger btn-sm mx-1">Delete</button>
                            </div>';
                })
                
                ->rawColumns(['student', 'course', 'status', 'action'])
                ->make(true);
        }
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rollId = auth()->user()->roles[0]->id;
        $months = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        ];
        if ($rollId == 2)  // role centre
        {
            $students = Student::where('centre_id', auth()->user()->centre->id)->where('status', 1)->get();
        } else {
            $students = Student::where('status', 1)->get();
        }
        $courses = Course::where('status', 1)->orderBy('created_at', 'desc')->get();

        return view('admin.pages.payment.create', compact('months', 'students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->students as $student) {
            $exist = StudentPayment::where('student_id', $student)->where('course_id', $request->course)->where('month', $request->month)->first();
            if (!$exist) {
                $payment = new StudentPayment();
                $payment->student_id = $student;
                $payment->course_id = $request->course; 
                $payment->amount = $request->amount;
                $payment->month = $request->month;
                $payment->end_date = Carbon::parse($request->end_date)->format('Y-m-d');
                $payment->status = $request->status;
                $payment->invoice_number = 'INV-' . time();
                $payment->pay_amount = $request->pay_amount ?? 0;
                $payment->payment_date = $request->payment_date ?? now()->format('Y-m-d'); 


                $payment->save();
            }
        }

        return redirect()->route('admin.payment.index')->with('status', 'Payments added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $months = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December'
        ];
        $students = Student::where('status', 1)->get();
        $payment = StudentPayment::find($id);
        $courses = Course::where('status', 1)->orderBy('created_at', 'desc')->get();

        return view('admin.pages.payment.edit', compact('months', 'students', 'payment', 'courses'));
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
        $payment = StudentPayment::find($id);
        // $payment->student_id = $student;
        $payment->course_id = $request->course;
        $payment->amount = $request->amount;
        $payment->month = $request->month;
        $payment->end_date = Carbon::parse($request->end_date)->format('Y-m-d');
        $payment->status = $request->status;
        $payment->save();

        return redirect()->route('admin.payment.index')->with('status', 'Payments updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment = StudentPayment::find($id);
    
        if (!$payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }
    
        $payment->delete();
    
        return response()->json(['message' => 'Payment deleted successfully']);
    }
    public function getCourse(Request $request)
    {
        $studId = $request->student_id;

        $student = Student::with('courses')  // Eager load 'category' with id and name columns
            ->where('id', $studId)
            ->get();
        dd($student);
    }
}
