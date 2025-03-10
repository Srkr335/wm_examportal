<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::where('status', 1)->pluck('name', 'id')->toArray();

        return view('admin.pages.services.create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $service = new Service();
        $service->name = $request->name;
        $service->parent_id = $request->parent_id;
        $service->price = $request->price;
        $service->discount_price = $request->discount_price;
        $service->description = $request->description;
        $service->duration = $request->duration;
        $service->duration_hours = $request->duration_hours;
        $service->status = $request->status;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('/images/service'), $imageName);
            $service->image = $imageName;
        }
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service added successfully');
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
        $services = Service::where('id', '!=', $id)->where('status', 1)->pluck('name', 'id')->toArray();
        $service = Service::find($id);

        return view('admin.pages.students.edit', compact('services', 'service'));
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
        $service = Service::find($id);
        $service->name = $request->name;
        $service->parent_id = $request->parent_id;
        $service->price = $request->price;
        $service->discount_price = $request->discount_price;
        $service->description = $request->description;
        $service->duration = $request->duration;
        $service->duration_hours = $request->duration_hours;
        $service->status = $request->status;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('/images/service'), $imageName);
            $service->image = $imageName;
        }
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::find($id)->delete();

        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully');
    }
}
