<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamModule;
use App\Models\Quiz;
use App\Models\Exam;
use App\Models\Result;

class ModuleApiController extends Controller
{
    public function get_module(Request $request)
    {
        $courseId = $request->course_id;
        $batchId = $request->batch_id;
        $modules = ExamModule::where('course_id', $courseId)
                             ->where('batch_id', $batchId)
                             ->where('status', 1)
                             ->get();
        
        return $this->responseWithSuccess('Modules fetched successfully', [
            'modules' => $modules,
        ]);
        
    }
    public function get_questions(Request $request)
    {
        $count = $request->module_id < 5 ? '15' : '20';
        $questions = Quiz::where('module_id',$request->module_id)
        ->where('status',1)
        ->take($count) 
        ->get()
        ->shuffle();
        $quesCount = count($questions);
        return $this->responseWithSuccess('Questions fetched successfully', [
            'questions' => $questions,
            'quesCount' => $quesCount,
        ]);
    }
    public function get_exam_details(Request $request)
    {
        $exams = Exam::with('course')->where('course_id',$request->course_id)->where('status',1)->get();
        return $this->responseWithSuccess('Exams fetched successfully', [
            'exams' => $exams,
        ]);
    }
    public function get_exam_results(Request $request)
    { 
        $result = new Result();
        $result->exam_id = $request->exam_id;
        $result->exam_name = $request->exam_name;
        $result->batch_id = $request->batch_id;
        $result->course_id = $request->course_id;
        $result->centre_id = $request->centre_id;
        $result->student_id = $request->student_id;
        $result->reg_no = $request->reg_no;
        $result->marks = $request->mark;
        $result->correct_answer_count = $request->correct_ans_count;
        $result->wrong_answer_count = $request->wrong_ans_count;
        $result->save();
        return response()->json(['success' => true, 'message' => 'Result created successfully', 'data' => $result], 200);
    }
}
