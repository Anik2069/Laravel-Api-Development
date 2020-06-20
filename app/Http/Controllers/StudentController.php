<?php

namespace App\Http\Controllers;

use App\Models\CountryModel;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class StudentController extends Controller
{
    //
    public  function getcountry(){
        return response()->json(CountryModel::get(),200);
    }
    public  function getcountry_view($id){
        return response()->json(CountryModel::find($id),200);
    }
    public  function getcountry_save(Request $request){

        $country= CountryModel::create($request->all());
        return response()->json($country,201);
    }

    public function edit_country($id,Request $request){
        $country= CountryModel::find($id);
        $country->iso=$request->input('iso');
        $country->save();
        return response()->json($country,200);
    }

}
