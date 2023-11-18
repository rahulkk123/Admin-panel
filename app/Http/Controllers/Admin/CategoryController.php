<?php

namespace App\Http\Controllers\Admin;

use App\Models\CategoryTab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department;

class CategoryController extends Controller
{
    public function cat_create()
    {
        $department=Department::all();
        return view('Admin.category.create',compact('department'));
    }
    public function show()
    {

       $category=CategoryTab::all();
        return view('Admin.category.show', ['category' => $category]);

    }
    public function store(Request $request)
    {
        $input=new CategoryTab();
        $input->name = $request->input('name');
        $input->description = $request->input('description');
       $input->department_id=$request->input('department');
      $input->save();
      return redirect('add-category');
    }

    function edit($id){
        $category=CategoryTab::find($id);
        return view('Admin.category.edit',['category' => $category]);
    }
    function update(Request $request,$id){
        
        $input=CategoryTab::find($id);
        $input->name = $request->input('name');
        $input->description = $request->input('description');
       $input->department_id=$request->input('department');
      $input->update();
      return redirect('show-category');
    }
    function distroy($id)
    {
    $input=CategoryTab::find($id);
    $input->delete();
    return redirect('show-category');
}
}