@extends('Admin.style')

@section('content')


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        
            <div class="card-body">
                <h3>Add Category</h3>
                <form action="{{  url('store-category')}}"   method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Category Name</label>
                        <input type="text" name="name" class="form-control" placeholder=" Category Name " />
                        
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="content">Description</label>
                        <textarea class="text" name="description" class="form-control"  placeholder="Description" ></textarea>
                    </div>
                    <div class="form-group mb-3" name="department_id">
                        <label for="content">Department Id:</label>
                        <select class="form-select" name="department" aria-label="category_id">
                            <option value="">select </option>
                            @foreach ($department as $item)
                            <option  value="{{$item->id}}" selected>{{$item->name}}</option>
                            
                            @endforeach
                          </select>
                    </div>
                         
                    <div class="btn">
                        <button type="submit" class="btn btn-secondary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop