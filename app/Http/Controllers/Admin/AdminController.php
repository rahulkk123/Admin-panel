<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Admin_Login(){
        return view('Admin.login');

    }
    public function Register(){
        return view("Admin.Register");

    }
    function Reg_store(Request $request){
        $request->validate([
            'name'=> 'required',
        'email'=> 'required',
        'password'=> 'required']);

        $data=$request->all();
        Admin::create(['name'=>$data['name'],
        'email'=>$data['email'],
        'password'=>Hash::make($data['password'])
    ]);  
    return redirect('admin/login')->with('success','successfully Registered!!');      
    }

    function Login(Request $request){
        $request->validate([
            'email' => 'required',
            'password'=>'required'
        ]);

        $insert_login=$request->only('email','password');

        if(Auth::attempt($insert_login)){
            return redirect('dashboard');
        }
        return redirect('admin/login')->with('success','Invalid email and password !!');
    }
    function dashboard(){
        if(Auth::check()){
            return view('admin.dashboard');

        }
        return redirect('admin_login')->with('success','Not allowed');
    }
}
