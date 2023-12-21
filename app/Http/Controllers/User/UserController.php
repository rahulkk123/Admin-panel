<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use session;

use App\Http\Controllers\Controller;
use App\Models\CategoryTab;
use App\Models\Department;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

use function Laravel\Prompts\confirm;

class UserController extends Controller
{
    public function index()
    {

//$item=Department::all();
     
$departments=Department::with('category')->get();
 $categories=CategoryTab::with('departments')->get();
$products = Product::with('subcategory')->get();
$subcategory =CategoryTab::with('products')->get();

$department=Department::with('category')->paginate(4);
 $catego=CategoryTab::with('departments')->paginate(4);
$produ = Product::with('subcategory')->paginate(4);
$subcatego =CategoryTab::with('products')->paginate(4);
$products=Product::with('products')->get();
$image=ProductImage::with('image')->get();
   return view('user.homepage',compact('departments','categories','subcategory','products','department','catego','produ','subcatego'));

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
            'email'  => $data['email'],
            'mobile_number' => $data['mobile'],
            'password' => Hash::make($data['password']),
            'confirm_password' => Hash::make($data['confirm_password'])


        ]);

        return redirect('user_login')->with('success', 'Created Successfully ');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials))
        {
           return ;
        }

        return redirect('user_login')->with('success', 'Login details are not valid');
    }
    function dashboard(){
        
        if(Auth::check())
        {
            return view('user.homepage');

        }
        return redirect('user_login')->with('success','Not allowed');
    }
}
