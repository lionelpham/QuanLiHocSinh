<?php

namespace App\Http\Controllers;

use App\roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function setRole()
    {
        return view('Role.setRole')->with([
            'url' => 'set-role'
        ]);
    }
    public function createRole()
    {

        return view('Role.addRole')->with([
            'url' => 'create-role'
        ]);
    }
    public function newRole(Request $req){
        $newRoles = new roles;
        $newRoles->name_roles = $req->name_role;
        $newRoles->save();

        return redirect('list-role')->with(
            'success_message','Thêm role thành công'
        );

    }
    public function listRole()
    {
        $roles = roles::all();
        return view('Role.listRole')->with([
            'url' => 'list-role',
            'listRoles' => $roles
        ]);
    }

    public function deleteRole($id){
        $role = roles::find($id);
        $role->delete();
        return redirect('list-role')->with(
            'success_message',
            "Xóa thành công"

        );

    }










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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit(roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, roles $roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(roles $roles)
    { }
}
