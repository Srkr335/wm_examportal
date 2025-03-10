<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Exam;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $results = Result::paginate(10);
        $exams = Exam::paginate(10);
        return view('admin.pages.result.index',compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = Result::with('exam')->where('exam_id',$id)->paginate(10);
        foreach($results as $result)
        {
            $obtainedMarks = $result->marks;
            $totalMarks = $result->exam->marks;
            $percentage = (int)(($obtainedMarks / $totalMarks) * 100);
            $result->percentage = $percentage;
            if ($percentage >= 90) {
                $grade = 'A+';
            } elseif ($percentage >= 80) {
                $grade = 'A';
            } elseif ($percentage >= 70) {
                $grade = 'B+';
            } elseif ($percentage >= 60) {
                $grade = 'B';
            } elseif ($percentage >= 50) {
                $grade = 'C+';
            }
            elseif ($percentage >= 40) {
                $grade = 'C';
            } elseif ($percentage >= 30) {
                $grade = 'D+';
            }
            else{
                $grade = 'D';
            }
            $result->grade = $grade;
            $result->status = $percentage >= 30 ? 'Pass' : 'Fail';
            $update_result = Result::where('id',$result->id)->update([
                'percentage' => $result->percentage,
                'grade' => $result->grade,
                'result' => $result->status,
            ]);
        }
        return view('admin.pages.result.show',compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
