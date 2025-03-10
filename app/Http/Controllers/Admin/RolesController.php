<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Hash;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $role = Role::create(['name' => $request->input('role_name')]);
        $role->name = $request->input('role_name');
        $role->save();

        $role->permissions()->sync($request->input('permissions'));

        return redirect()->route('settings.permissions')
            ->with('success', 'Roles created successfully');
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
        $role = Role::find($id);
        $permissions = Permission::get();

        $permissionBySection  = [];
        foreach ($permissions as $permission) {
            $section = $permission->section;
            if (!isset($permissionBySection[$section])) {
                // If not, create a new array for the section
                $permissionBySection[$section] = [];
            }
            $permissionBySection[$section][] = ['id' => $permission->id, 'name' => $permission->name, 'display_name' => $permission->display_name];
        }
        // $role = Role::find($id);
        // $permissionValues = Permission::select('id', 'section', 'name')->get()->groupBy('section');
        // $permissions = Permission::join('role_has_permissions', 'role_has_permissions.permission_id', 'permissions.id')
        // ->join('roles', 'roles.id', 'role_has_permissions.role_id')
        // ->select('permissions.*', 'permission_id', 'role_id', 'roles.name as roles_name')
        // ->where('role_has_permissions.role_id', $id)
        // ->get()->groupBy('section');
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();

        $rolePermissionsBySection = [];

        foreach ($rolePermissions as $permission) {
            $section = $permission->section;
            $permissionId = $permission->id;
            // Check if the section exists in the array
            if (!isset($rolePermissionsBySection[$section])) {
                // If not, create a new array for the section
                $rolePermissionsBySection[$section] = [];
            }
            // Add the permission ID to the section's array
            $rolePermissionsBySection[$section][] = $permissionId;
        }

        return view('admin.pages.settings.roles.edit',compact('role','rolePermissionsBySection','permissionBySection'));

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
        $role = Role::find($request->role_id);

        $role->name = $request->input('role_name');

        $role->save();
        $role->syncPermissions($request->input('permissions'));

    

        return redirect()->route('settings.permissions')

                        ->with('success','Role updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::where('id',$id)->delete();

        return redirect()->route('settings.permissions')

                        ->with('success','Role deleted successfully');
    }
    public function user_create()
    {
        $roles = Role::pluck('id','name')->all();
        return view('admin.pages.settings.user.create',compact('roles'));
    }
    public function store_user(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password); 
        $user->mobile_no = $request->mobile;
        $user->type = 1;
        $user->save();
        $user->assignRole($request->role);

        return redirect()->route('settings.user')
            ->with('success', 'User created successfully');
        // $input = $request->all();

        // $input['password'] = Hash::make($input['password']);


        // $user = User::create($input);

        // $user->assignRole($request->input('role'));

    

        // return redirect()->route('settings.user')

        //                 ->with('success','User created successfully');
    }
    public function editUser($id)
    {
        $editUser = User::find($id);
        $roles = Role::pluck('name','id')->all();
        $userRole = $editUser->roles->pluck('id')->toArray();

        return view('admin.pages.settings.user.edit',compact('roles','editUser','userRole'));
        
    }
    public function update_user(Request $request)
    {
        $userId = $request->user_id;
        // $user = User::find($userId);
        // $updateUser = User::where('id',$userId)->update([
        //     'name' => $request->username,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        //     'mobile_no' => $request->mobile,
        //     'type' => $request->role,
        // ]);
        $updateData = [
            'name' => $request->username,
            'email' => $request->email,
            'mobile_no' => $request->mobile,
            'type' => 1,
        ];
        
        // Update password only if provided
        if (!empty($request->password)) {
            $updateData['password'] = bcrypt($request->password);
        }
        
        // Update user details
        $updateUser = User::where('id', $userId)->update($updateData);
        DB::table('model_has_roles')->where('model_id', $request->user_id)->delete();
        $user = User::find( $userId);

        $user->assignRole($request->input('roles'));

        return redirect()->route('settings.user')
            ->with('success', 'User updated successfully');
    }
    public function destroy_user($id)
    {
        $user = User::where('id',$id)->delete();
        return redirect()->route('settings.user')
        ->with('success', 'User deleted successfully');
    }
}
