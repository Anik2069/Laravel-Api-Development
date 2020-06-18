<?php

namespace App\Http\Controllers;

use App\Models\CountryModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public  function getcountry(){
        return response()->json(CountryModel::get(),200);
    }
    public  function getcountry_view($id){
        return response()->json(CountryModel::find($id),200);
    }
    public  function getcountry_save(){

        return response()->json("Record Added",200);
    }
}
