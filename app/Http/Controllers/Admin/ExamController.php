<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\ExamModule;
use App\Models\Course;
use App\Models\Centre;
use App\Models\Batch;
use Carbon\Carbon;
class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = Exam::orderBy('id', 'desc')->paginate(10);
        return view ('admin.pages.exam.index',compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modules = ExamModule::where('status',1)->get();
        $courses = Course::where('status',1)->get();
        $centers = Centre::where('status',1)->get();
        $batches = Batch::where('status',1)->get();
        return view ('admin.pages.exam.create',compact('modules','courses','centers','batches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $exam = new Exam();
        $hours = $request->input('hours');
        $minutes = $request->input('minutes');
        $timeFormatted = sprintf("%02d:%02d", $hours, $minutes);
        
        $exam->exam_name = $request->exam_name;
        $exam->course_id = $request->course_name;
        $exam->batch_id = $request->batch_name;
        $exam->exam_centre_id = $request->centre_name;
        $exam->module_id = json_encode($request->modules);
        $exam->marks = $request->exam_mark;
        $exam->time_in_minutes = $timeFormatted;
        $exam->question_weightage = $request->per_questions_weight;
        $exam->exam_date = date('Y-m-d', strtotime($request->exam_date));
        $exam->status = $request->status;
        $exam->save();
        return redirect()->route('exam.index')->with('success', 'Exam created successfully.');
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
        $exam = Exam::find($id);
        $modules = $exam->module_id;
        $decodedModulesIds = json_decode($modules, true);
        if (!$exam) {
            return redirect()->route('exam.index')->with('error', 'Exam not found.');
        }
    
        // Split exam_time into hours and minutes
        list($hours, $minutes) = explode(':', $exam->time_in_minutes);
        $modules = ExamModule::where('status',1)->get();
        $courses = Course::where('status',1)->get();
        $centers = Centre::where('status',1)->get();
        $batches = Batch::where('status',1)->get();
        return view ('admin.pages.exam.edit',compact('modules','courses','centers','batches','exam','hours','minutes','decodedModulesIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $exam_id = $request->exam_id;
        $hours = $request->input('hours');
        $minutes = $request->input('minutes');
        $timeFormatted = sprintf("%02d:%02d", $hours, $minutes);
        $update_exam = Exam::find($exam_id);
        if($update_exam)
        {
            $update_exam->exam_name = $request->exam_name;
            $update_exam->course_id = $request->course_name;
            $update_exam->batch_id = $request->batch_name;
            $update_exam->exam_centre_id = $request->centre_name;
            $update_exam->module_id = json_encode($request->modules);
            $update_exam->marks = $request->exam_mark;
            $update_exam->time_in_minutes = $timeFormatted;
            $update_exam->question_weightage = $request->per_questions_weight;
            $update_exam->exam_date =$request->exam_date;
            $update_exam->status = $request->status;
            $update_exam->save();
            return redirect()->route('exam.index')->with('success', 'Exam updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $examId = $request->exam_id;
        $exam = Exam::findOrFail($examId);
        $exam->delete();
        return redirect()->route('exam.index')->with('success','Exam details deleted successfully');
    }
}
