@extends('Admin.style')

@section('content')


<div class="row justify-content-center ">
    <div class="col-md-8">
        <div class="card">
        
            <div class="card-body">
                <div class="card shadow">
                <h3>Add Product</h3>
                <form action="add-product"   method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name"> Name</label>
                        <input type="text" name="name" class="form-control" size="5" placeholder="product Name"  />
                        
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="content">Description</label>
                        <textarea class="text" name="description" class="form-control"  placeholder="Description" ></textarea>
                    </div>
                    <div class="form mb-3">
                        <label for="name">Price(₹):</label>
                        <input type="text" name="price" class="form-control" size="5"   />
                        
                    </div>
                    <div class="form-check" >
                        <label for="content">Status</label>
                        <input type="radio" name="active" value="1" class="form-control" >Active

                        <input type="radio" name="active" value="0" class="form-control" >In-Active
                    </div><br>
                    <div class="form-group mb-3" name="category_id">
                        <label for="content">Category Id:</label>       
                     <select class="form-select" name="category_id" aria-label="category_id">
                        <option value="">select </option>
                        @foreach ($category as $item)
                        <option  value="{{$item->id}}" selected>{{$item->name}}</option>
                        
                        @endforeach
                      </select>
                   
                    </div>
                   
                    <div class="btn">
                        <button type="submit" class="btn btn-warning">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection