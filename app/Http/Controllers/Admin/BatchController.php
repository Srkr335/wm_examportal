<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Centre;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batchs = Batch::with('course')
            ->orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.batch.index', compact('batchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::where('status', 1)->get();
        $centres = Centre::where('status', 1)->get();
        return view('admin.pages.batch.create', compact('courses', 'centres'));
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
            'batch_name'   => 'required|string|max:255',
            'course_name'  => 'required|exists:courses,id',
            'start_date'   => 'required|date|after_or_equal:today',
            'end_date'     => 'required|date|after:start_date',
            'centre_name'  => 'required|exists:centres,id',
            'status'       => 'required|in:active,inactive',
        ]);
    

        $batch = new Batch();
        $batch->name = $request->batch_name;
        $batch->course_id  = $request->course_name;
        $batch->start_date = $request->start_date;
        $batch->end_date = $request->end_date;
        $batch->centre_id  = $request->centre_name;
        $batch->status = $request->status;
        $batch->save();
        return redirect()->route('batch.index')->with('success', 'batch created successfully.');
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
        $courses = Course::where('status', 1)->get();
        $centres = Centre::where('status', 1)->get();
        $batch = Batch::find($id);
        return view('admin.pages.batch.edit', compact('courses', 'centres', 'batch'));
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
        $batch_id = $request->batch_id;
        $update_batch = Batch::find($batch_id);
        if ($update_batch) {
            $update_batch->name = $request->batch_name;
            $update_batch->course_id  = $request->course_name;
            // $update_batch->year = $request->batch_year;
            $update_batch->start_date = $request->start_date;
            $update_batch->end_date = $request->end_date;
            $update_batch->centre_id  = $request->centre_name;
            $update_batch->status = $request->status;
            $update_batch->save();
            return redirect()->route('batch.index')->with('success', 'batch created successfully.');
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
        $batch = Batch::findOrFail($request->batch_id);
        $batch->delete();
        return redirect()->route('batch.index')->with('success', 'Batch deleted successfully');
    }
}