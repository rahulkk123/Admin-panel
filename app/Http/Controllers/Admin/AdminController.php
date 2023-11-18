<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function Admin(){
        return view('Admin.login');

    }
    public function Register(){
        return view("Admin.Register");

    }
    function Reg_store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8'
        ]);
        $data = $request->all();

        Admin::create([
            'name' => $data['name'],
            'email'  => $data['email'],
            'mobile_number' => $data['mobile'],
            'password' => Hash::make($data['password']),
            'confirm_password' => Hash::make($data['confirm_password'])


        ]);  
    return redirect('admin')->with('success','successfully Registered!!');      
    }

    function Admin_login(Request $request){
        $request->validate([
            'email' => 'required',
            'password'=>'required'
        ]);

          $credentials = $request->only('email','password');

        if(Auth::attempt($credentials))
        {
            return view('Admin.dashboard');
        }
        return redirect('admin')->with('success', 'invalid email and password !!');
    }
    function dashboard(){
        if(Auth::check())
        {
            return view('Admin.dashboard');

        }
        return redirect('admin')->with('success','Not allowed');
    }
}
