<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Yajra\DataTables\DataTables;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.settings.index');
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
    public function general()
    {
       return view('admin.pages.settings.general');
    }
    public function permissions()
    {
       $roles = Role::orderBy('id', 'DESC')->paginate(5);
       return view('admin.pages.settings.permissions',compact('roles'));
    }
    public function permissionscreate()
    {
        $permissions = Permission::select('id', 'section', 'name')->get()->groupBy('section');
       return view('admin.pages.settings.permissionscreate',compact('permissions'));
    }
    public function permissionsedit()
    {
       return view('admin.pages.settings.permissionsedit');
    }
    public function payments()
    {
       return view('admin.pages.settings.payments');
    }
    public function user_view(Request $request)
    {
        return view('admin.pages.settings.user.index');
    }
    public function getusers(Request $request)
    {
        if ($request->ajax()) {
            $data = User::orderBy('id', 'desc')
                ->select('*');
            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return ucfirst($row->name);
                })
                ->addColumn('email', function ($row) {
                    return ($row->email);
                })
                ->addColumn('type', function ($row) {
                    return ucfirst($row->type);
                })
                ->addColumn('action', function ($row) {
                    return '<a href="' .   route("admin.settings.editUser", $row->id) . '" class="edit btn btn-primary btn-sm">Edit</a> <a href="' .   route("admin.settings.deleteUser", $row->id) . '"><button class="delete btn btn-danger btn-sm" data-id="' . $row->id . '">Delete</button></a>';
                })
                ->rawColumns(['name', 'email', 'type','action'])
                ->make(true);
        }
    }
}
