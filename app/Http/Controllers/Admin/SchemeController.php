<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Scheme;
use App\Models\Category;
use App\Models\Course;
use App\Models\SchemeCategoryCourse;



class SchemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schemes = Scheme::orderBy('id','DESC')->paginate(5);
        return view('admin.pages.scheme.index',compact('schemes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        $courses = Course::where('status',1)->get();
        return view('admin.pages.scheme.create',compact('categories','courses'));
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
            'discount' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
        ], [
            'discount.required' => 'The discount field is required.',
            'discount.numeric' => 'The discount must be a valid number.',
            'discount.regex' => 'The discount must be a number with up to two decimal places, without special characters like @, #, $, %, etc.',
        ]);


        $scheme = new Scheme();
        $scheme->name = $request->name;
        $scheme->discount = $request->discount;
       
        $scheme->status = $request->status;
        $scheme->save();

        if(count($request->course) <=1)
        {  
            $category = new SchemeCategoryCourse();
            $category->scheme_id = $scheme->id;
            $category->cat_id = $request->category;
            $category->course_id = $request->course ? $request->course[0] : '';
            $category->save();
        }else{
            foreach($request->course as $course){
                $category = new SchemeCategoryCourse();
                $category->scheme_id = $scheme->id;
                $category->cat_id = $request->category;
                $category->course_id = $course;
                $category->save();
            }
        }
       
        return redirect()->route('scheme.index')
            ->with('success', 'Scheme created successfully');
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
        $editScheme = Scheme::find($id);
        // dd($editScheme->courseIds());

        $categories = Category::where('status',1)->get();
        $courses = Course::where('category_id',$editScheme->categoryIds())->where('status',1)->get();
        
        return view('admin.pages.scheme.edit',compact('editScheme','categories','courses'));
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
        // $updateScheme = Scheme::where('id',$request->scheme_id)->update([
        //     'name'=> $request->name,
        //     'discount'=> $request->discount,
        //     'category_id'=> $request->category,
        //     'course_id'=> $request->course,
        //     'status'=> $request->status,
        // ]);
        $scheme = Scheme::find($request->scheme_id);
        $scheme->name = $request->name;
        $scheme->discount = $request->discount;

        $scheme->status = $request->status;
        $scheme->save();

        SchemeCategoryCourse::where('scheme_id',$scheme->id)->delete();

        if(count($request->course) <= 1)
        {  
            $category = new SchemeCategoryCourse();
            $category->scheme_id = $scheme->id;
            $category->cat_id = $request->category;
            $category->course_id = $request->course ? $request->course[0] : '';
            $category->save();
        }else{
            foreach($request->course as $course){
                $category = new SchemeCategoryCourse();
                $category->scheme_id = $scheme->id;
                $category->cat_id = $request->category;
                $category->course_id = $course;
                $category->save();
            }
        }

        return redirect()->route('scheme.index')
            ->with('success', 'Scheme Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Scheme::where('id',$request->scheme_id)->delete();
        return redirect()->route('scheme.index')
        ->with('success', 'Scheme Deleted successfully');
    }
}
