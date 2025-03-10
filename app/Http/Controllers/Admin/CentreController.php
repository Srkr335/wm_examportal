<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Centre;
use App\Models\User;
use Spatie\Permission\Models\Role;


class CentreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $centers = Centre::orderBy('id', 'desc')->paginate(10);
        return view ('admin.pages.centre.index',compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('type',1)->get();
        $roles = Role::pluck('id','name')->all();
        return view ('admin.pages.centre.create',compact('users','roles'));
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
            'email' => 'required|email|unique:users,email',
        ]);



        $centre = new Centre();
        $centre->name = $request->centre_name;
        $centre->address = $request->address;
        $centre->city = $request->city;
        $centre->pincode = $request->zipcode;
        $centre->mobile = $request->phone;
        $centre->website = $request->website;
        $centre->admin = $request->centre_incharge;
        $centre->status = $request->status;

        $user = new User();
        $user->name = $request->centre_name;
        $user->email = $request->email;
        $user->mobile_no = $request->phone;
        $user->password = bcrypt($request->password);
        $user->type =1;
        $user->save();
        $centre->user_id = $user->id;
        $centre->save();
        $user->assignRole($request->input('role'));
        return redirect()->route('centre.index')->with('success', 'Centre created successfully.');
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
        $users = User::where('type',1)->get();
        $centre = Centre::leftjoin('users','users.id','centres.user_id')
        ->where('centres.id',$id)
        ->select('centres.*','users.id as users_id','users.email','users.password')
        ->first();
        return view ('admin.pages.centre.edit',compact('centre','users'));

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
        $centreId = $request->centre_id;
        $userId = $request->user_id;

        $update_centre = Centre::find($centreId);

       if ($update_centre) {
    $update_centre->name = $request->centre_name;
    $update_centre->address = $request->address;
    $update_centre->city = $request->city;
    $update_centre->pincode = $request->zipcode;
    $update_centre->mobile = $request->phone;
    $update_centre->website = $request->website;
    $update_centre->admin = $request->centre_incharge;
    $update_centre->status = $request->status;
    $update_centre->save();
}

// Retrieve the User instance
$update_user = User::find($userId);

// Check if the User was found
if ($update_user) {
    // Update the User attributes
    $update_user->name = $request->centre_name;
    $update_user->email = $request->email;
    $update_user->mobile_no = $request->phone;
    if ($request->filled('password')) {
        $update_user->password = bcrypt($request->password);
    }
    $update_user->type = 1;
    $update_user->save();
}

// Redirect with a success message
return redirect()->route('centre.index')->with('success', 'Centre updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $centre = Centre::findOrFail($request->centre_id);
        $userId =  $centre->user_id;
        $user = User::where('id',$userId)->delete();
        $centre->delete();

        return redirect()->route('centre.index')->with('success', 'Centre deleted successfully');
    }
}