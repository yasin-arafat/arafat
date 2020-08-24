<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $permission=new Permission();
        $page_name="Role Create";
        $permission=Permission::pluck('name','id');
        return view('admin.role.create',compact('permission','page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
            'name' => 'required',
            'permission' => 'required|array',
            'permission.*' => 'required|string'

       ],[

        'name.required' => "Name field is required",
        'permission.required' => 'You must select a permission',
        'permission.*' => 'You must select a permission'

       ]);

       $role=new Role();
       $role->name=$request->name;
       $role->guard_name=$request->guard_name;
       $role->description=$request->description;
       $role->save();

       foreach ($request->permission as $value) {
           $role->syncPermissions($value);
       }

       return redirect()->action('Admin\RoleController@show')->with('success','Permission created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_name="Roles";
        $data=Role::all($id);
        //$data2=Permission::all();
        $rolePermissions = Permission::join("role_has_permissions","role_has_permissions.permission_id","=","permissions.id")
           ->where("role_has_permissions.role_id",$id)
           ->get();
        return view('admin.role.list',compact('page_name','data','rolePermissions'));
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
}
