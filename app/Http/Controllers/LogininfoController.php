<?php

namespace App\Http\Controllers;

use App\logininfo;
use Illuminate\Http\Request;

class LogininfoController extends Controller
{
    //
    public function submitdata(Request $request){

        $login= new logininfo();
        $login->email = $request->input('email');
        $login->password= $request->input('pass');
        $login->save();
        return redirect('/form')->with("success","Nuha loves Saurav!!!!");

    }
    public function view_edit_form($id){
        $getdata=logininfo::find($id); //1 Ta Data
        return view("edit",compact('getdata'));

    }

    public function submiteditdata(Request $request){

        $id= $request->input('id');
        $login= logininfo::find($id);
        $login->email = $request->input('email');
        $login->password= $request->input('pass');
        $login->save();
        return redirect('/form')->with("success","Nuha fucks Saurav!!!!");

    }

    public function deleteData($id){
        $getdata=logininfo::find($id); //1 Ta Data

        $getdata->delete();

        return redirect('/form')->with("success","Nuha loves and fucks Rashiq!!!!");
    }
}
