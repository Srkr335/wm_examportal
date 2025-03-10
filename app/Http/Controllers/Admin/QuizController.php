<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Quiz;
use App\Models\ExamModule;
use App\Models\Batch;
use App\Models\Exam;
use App\Imports\QuestionsImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::orderBy('id', 'desc')->paginate(10);
        $courses = Course::where('status', 1)->get();
        $examModules = ExamModule::where('status', 1)->get();
        $batches = Batch::where('status', 1)->get();
        $exams = Exam::where('status',1)->get();
        return view('admin.pages.quiz.index', compact('quizzes','courses','examModules','batches','exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::where('status', 1)->get();
        $examModules = ExamModule::where('status', 1)->get();
        $batches = Batch::where('status', 1)->get();
        $exams = Exam::where('status',1)->get();
        return view('admin.pages.quiz.create', compact('courses','examModules','batches','exams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quiz = new Quiz();
        $quiz->course_id = $request->course_id;
        $quiz->batch_id = $request->batch_id;
        $quiz->exam_id = $request->exam;
        $quiz->module_id = $request->module_id;
        $quiz->question = $request->question;
        $quiz->answer = $request->answer;
        $quiz->option_a = $request->option_a;
        $quiz->option_b = $request->option_b;
        $quiz->option_c = $request->option_c;
        $quiz->option_d = $request->option_d;
        $quiz->description = $request->description;
        $quiz->status = $request->status;
        $quiz->save();

        return redirect()->route('admin.quiz.index')->with('success', 'Quiz created successfully');
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
        $quiz = Quiz::find($id);
        $courses = Course::where('status', 1)->get();
        $examModules = ExamModule::where('status', 1)->get();
        $batches = Batch::where('status', 1)->get();
        $exams = Exam::where('status',1)->get();
        return view('admin.pages.quiz.edit', compact('quiz', 'courses','examModules','batches','exams'));
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
        $quiz = Quiz::find($id);
        $quiz->course_id = $request->course_id;
        $quiz->batch_id = $request->batch_id;
        $quiz->exam_id = $request->exam;
        $quiz->module_id = $request->module_id;
        $quiz->question = $request->question;
        $quiz->answer = $request->answer;
        $quiz->option_a = $request->option_a;
        $quiz->option_b = $request->option_b;
        $quiz->option_c = $request->option_c;
        $quiz->option_d = $request->option_d;
        $quiz->description = $request->description;
        $quiz->status = $request->status;
        $quiz->save();

        return redirect()->route('admin.quiz.index')->with('success', 'Quiz created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quiz::find($id)->delete();

        return redirect()->route('admin.quiz.index')->with('success', 'Quiz deleted successfully');
    }
    public function import(Request $request)
    {
        $requestData = $request->all();
        $request->validate([
            'file' => 'required|file|mimes:csv,txt,xlsx',
        ]);
        Excel::import(new QuestionsImport($requestData), $request->file('file'));

        return back()->with('success', 'File imported successfully!');
    }
}
