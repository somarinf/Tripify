<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.roles')->with('roles', $roles);
    }

    public function store(Request $request)
    {
        $role = new Role;
        $role->type = $request->type;
        $role->save();
        return redirect()->route('roles.index');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('roles.edit')->with('role', $role);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->type = $request->type;
        $role->save();
        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('roles.index');
    }
}
