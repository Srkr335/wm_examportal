<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('id', 'desc')->paginate(10);
        return view('admin.pages.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->title = $request->title;
        $banner->status = $request->status;
        $banner->url = $request->url;

        if ($request->hasFile('file')) {
            $imageName = time() . '.' . $request->file->extension();

            $request->file->move(public_path('/images/banners'), $imageName);
            $banner->image = $imageName;
        }

        $banner->save();

        return redirect()->route('admin.banner.index')->with('success', 'Banner created successfully');
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
        $banner = Banner::find($id);

        return view('admin.pages.banner.edit', compact('banner'));
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
        $banner = Banner::find($id);
        $banner->title = $request->title;
        $banner->status = $request->status;
        $banner->url = $request->url;

        if ($request->hasFile('file')) {
            $imageName = time() . '.' . $request->file->extension();

            $request->file->move(public_path('/images/banners'), $imageName);
            $banner->image = $imageName;
        }

        $banner->save();

        return redirect()->route('admin.banner.index')->with('success', 'Banner created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
    
        if (!$banner) {
            return redirect()->route('admin.banner.index')->with('error', 'Banner not found.');
        }
    
        $banner->delete();
        return redirect()->route('admin.banner.index')->with('success', 'Banner deleted successfully.');
    }
    
}
