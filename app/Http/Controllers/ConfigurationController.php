<?php

namespace App\Http\Controllers;

use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{

    public function index()
    {
        //Method GET
        return $configure = Configuration::all();
    }


    public function store(Request $request)
    {
        //Method POST
        $configure = Configuration::create($request->all());

        return $configure;
    }


    public function update(Request $request,$id)
    {
        //Method PATCH
        $configure = Configuration::find($id);

        $configure-> language =$request-> get("language");
        $configure-> country =$request-> get("country");
        $configure-> state =$request-> get("state");

        $configure ->save();
        return $configure;
    }

  
    public function destroy($id)
    {
               //Method DELETE
               $configure = Configuration::find($id);
               $configure->delete();
       
       
               return "delete succesfull";
    }
}
