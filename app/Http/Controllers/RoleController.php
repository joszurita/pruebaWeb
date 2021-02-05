<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        //Method GET
        return $role = Role::all();
    }

    public function store(Request $request)
    {
        //Method POST
        $role = Role::create($request->all());

        return $role;
    }

    public function update(Request $request,  $id)
    {
        //Method PATCH
        $role = Role::find($id);
        
        $role-> description =$request-> get("description");

        $role ->save();
        return $role;
    }

 
    public function destroy( $id)
    {
        //Method DELETE
        $role = Role::find($id);
        $role->delete();


        return "delete succesfull";
    }
}