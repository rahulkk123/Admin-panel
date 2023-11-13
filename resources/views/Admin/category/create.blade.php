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
                        <input type="text" name="name" class="form-control" placeholder="Department Name " />
                        
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="content">Description</label>
                        <textarea class="text" name="description" class="form-control"  placeholder="Description" ></textarea>
                    </div>
                    <div class="form-group mb-3" name="department_id">
                        <label for="content">Department Id:</label>
                    <select class="form-select" name="department" aria-label="Department_id">
                        <option selected></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="2">4</option>
                        <option value="3">5</option>
                        <option value="2">6</option>
                        <option value="3">7</option>
                        <option value="3">8</option>
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