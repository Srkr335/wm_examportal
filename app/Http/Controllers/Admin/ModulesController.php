<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamModule;
use App\Models\Batch;
use App\Models\Course;


class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = ExamModule::paginate(10);
        return view ('admin.pages.module.index',compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batches = Batch::where('status', 1)->get();
        $courses = Course::where('status', 1)->get();
        return view ('admin.pages.module.create',compact('batches','courses'));
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
            'module_name' => 'required|string|max:255',
            'course' => 'required|exists:courses,id',
            'batch' => 'required|exists:batches,id',
            'status' => 'required|boolean',
        ]);
        $module = new ExamModule();
        $module->modules_name = $request->module_name;
        $module->course_id = $request->course;
        $module->batch_id = $request->batch;
        $module->status = $request->status;
        $module->save();
        return redirect()->route('modules.index')->with('success', 'Module created successfully.');
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
        $module = ExamModule::find($id);
        $batches = Batch::where('status', 1)->get();
        $courses = Course::where('status', 1)->get();
        return view ('admin.pages.module.edit',compact('courses','batches','module'));
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
        $module_id = $request->module_id;
        $update_module = ExamModule::find($module_id);
        if($update_module)
        {
            $update_module->modules_name = $request->module_name;
            $update_module->course_id = $request->course;
            $update_module->batch_id = $request->batch;
            $update_module->status = $request->status;
            $update_module->save();
            return redirect()->route('modules.index')->with('success', 'Module updated successfully.');
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
        $module = ExamModule::findOrFail($request->module_id);
        $module->delete();
        return redirect()->route('modules.index')->with('success', 'Exam Module deleted successfully');
    }
}
