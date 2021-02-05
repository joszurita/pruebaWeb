<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("configGET","App\Http\Controllers\ConfigurationController@index");
Route::post("configPOST","App\Http\Controllers\ConfigurationController@store");
Route::patch("configPATCH/{id}","App\Http\Controllers\ConfigurationController@update");
Route::delete("configDELETE/{id}","App\Http\Controllers\ConfigurationController@destroy");


Route::get("peopleGET","App\Http\Controllers\PeopleController@index");
Route::post("peoplePOST","App\Http\Controllers\PeopleController@store");
Route::patch("peoplePATCH/{id}","App\Http\Controllers\PeopleController@update");
Route::delete("peopleDELETE/{id}","App\Http\Controllers\PeopleController@destroy");



Route::get("roleGET","App\Http\Controllers\RoleController@index");
Route::post("rolePOST","App\Http\Controllers\RoleController@store");
Route::patch("rolePATCH/{id}","App\Http\Controllers\RoleController@update");
Route::delete("roleDELETE/{id}","App\Http\Controllers\RoleController@destroy");

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
