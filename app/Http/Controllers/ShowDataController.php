<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class ShowDataController extends Controller
{
    public function show(){
        $data = personal::all();
        return view('home',compact('data'));
    }
}
