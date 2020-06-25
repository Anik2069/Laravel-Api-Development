<?php

namespace App\Http\Controllers;

use App\logininfo;
use Illuminate\Http\Request;

class routing extends Controller
{
    //
    public function viewform(){

        $value=logininfo::all();
        return view('form',compact('value'));
    }
}
