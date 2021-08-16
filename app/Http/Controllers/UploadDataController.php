<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;

class UploadDataController extends Controller
{
    public function index(){
        return view('uploadpage');
    }

    public function store(Request $request){
        $data = new personal;
        $data->name=$request->name;
        $data->email=$request->email;

        $data->save();
        return redirect('/home');
    }
    public function login(Request $request){
       $user= Personal::where('name', $request->input('name'));
        if($user[0]->email== $request->input('email')){
        return redirect('/');
        }
        else{
            return redirect('home');
        }
    }
}
