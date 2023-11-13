<?php

namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function show()
    {

        $item=Department::all();
        return view('Admin.show', ['item' => $item]);

    }
    public function create()
    {
        return view('Admin.index');

    }
    public function add_dept(Request $request)
    {
        $input=new Department;
        $input->name=$request->input('name');
        $input->description=$request->input('description');
        if($request->hasfile('photo'))
        {
            $file=$request->file('photo');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('upload/',$filename);
            $input->photo=$filename;
        }
      $input->save();
      return redirect('category');
    }

    //edit
    function edit($id){
        $item=Department::find($id);
        return view('Admin.edit',['item' => $item]);

    }
    function update(Request $request,$id){
        $input=Department::find($id);
        $input->name=$request->input('name');
        $input->description=$request->input('description');
        if($request->hasfile('photo'))
        {
            $destination='upload/'. $input->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file('photo');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('upload/',$filename);
            $input->photo=$filename;
        }
      $input->update();
      return redirect('show-dep');

    }
    function distroy($id)
    {
    $input=department::find($id);
    $destination='upload/'. $input->photo;
        if(File::exists($destination)){
            File::delete();

        }
        $input->delete();
        return redirect('show-dep');
    }



}

   
            
            
    