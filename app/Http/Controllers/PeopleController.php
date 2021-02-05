<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public function index()
    {
        //Method GET
        return $person = People::all();
    }

    
    public function store(Request $request)
    {
        //Method POST
        $person = People::create($request->all());

        return $person;
    }

    public function update(Request $request,$id)
    {
        //Method PATCH
        $person = People::find($id);

        $person-> nameUser =$request-> get('nameUser');
        $person-> nameComplete =$request-> get('nameComplete');
        $person-> email =$request-> get('email');
        $person-> number =$request-> get('number');
        $person-> age =$request-> get('age');
        $person-> dayBirthday =$request-> get('dayBirthday');

        $person ->save();
        return $person;
    }

    
    public function destroy( $id)
    {
        //Method DELETE
        $person = People::find($id);
        $person->delete();


        return "Borrado exitoso";
    }
}
