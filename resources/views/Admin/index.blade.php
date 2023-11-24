@extends('Admin.style')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        
            <div class="card-body">
                <h3 style="color: darkslategrey">Add Department</h3>
                <form action="{{url("add-dept")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Department Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Department Name " />
                        
                    </div>
                    <label for="image">Image</label>
                    <div class="form-group mb-3">
                        <input type="file" name="photo"  class="form-control" placeholder="" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="content">Description</label>
                        <textarea class="text" name="description" class="form-control" placeholder="Description" ></textarea>
                    </div>
                         
                    <div class="btn">
                        <button type="submit" class="btn btn-secondary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
