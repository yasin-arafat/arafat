<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = 'Permission';
        $data = Permission::all();
        return view('admin.permission.list',compact('data','page_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
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
            'name' => 'required|alpha_num'

        ],[

            'name.required' => "Name field is required",
            'name.alpha_num' => "Alpha numeric character required"
        ]);

         $permission=new Permission();
         $permission->name=$request->name;
         $permission->description=$request->description;
         $permission->guard_name=$request->guard_name;
         $permission->save();
         return redirect()->action('Admin\PermissionController@index')->with('success','Permission created successfully');
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
        $page_name = 'Permission Edit';
        $permission = Permission::find($id);
        return view('admin.permission.edit',compact('permission','page_name'));
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
         $this->validate($request,[
            'name' => 'required|alpha_num'

        ],[

            'name.required' => "Name field is required",
            'name.alpha_num' => "Alpha numeric character required"
        ]);

         $permission=Permission::find($id);
         $permission->name=$request->name;
         $permission->description=$request->description;
         $permission->guard_name=$request->guard_name;
         $permission->save();
         return redirect()->action('Admin\PermissionController@index')->with('success','Permission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission=Permission::find($id);
        $permission->delete();
         return redirect()->action('Admin\PermissionController@index')->with('success','Permission deleted successfully');
    }
}
