<?php

namespace App\Http\Controllers\User;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

use function Laravel\Prompts\confirm;

class UserController extends Controller
{
    public function index()
    {
        return view('user.homepage');
    }

    // login and registration
    public function user_login()
    {
        return view('user.login');
    }

    public function reg_login()
    {

        return view('user.registration');
    }
    public function Register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8'
        ]);

        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email_id'  => $data['email'],
            'mobile_number' => $data['mobile'],
            'password' => Hash::make($data['password']),
            'confirm_password' => Hash::make($data['confirm_password'])


        ]);

        return redirect('login')->with('success', 'Created Successfully ');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email_id','password');

        if(Auth::attempt($credentials))
        {
           return view('user.dash',compact('user'));;
        }

        return redirect('login')->with('success', 'Login details are not valid');
    }
}
