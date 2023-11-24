<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>show</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" 
rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
rel="stylesheet"/>
</head><div class="container-lg">
    <div class="card-header bg-secondary">
        <h3 class="text-light fw-bold">All Category</h3>
      </div>
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">

<a href="{{Route('product')}}" class="btn btn-primary add-new"><i class="fa fa-plus"></i> Add  product</a>
</div>
</div>
</div>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>product Name</th>
        <th>Description</th>
        <th>price</th>
        <th>Status</th>
        <th>Category_Id</th>
        <th width="280px"><i class="fa fa-pencil" ></i><i class="fa fa-remove"> </th>
    </tr>
    @foreach ($product as $items)
    <tr>
        <td>{{ $items->id }}</td>
    
        <td>{{ $items->name }}</td>
        <td>{{ $items->description }}</td>
        <td>{{ $items->price }}</td>
        <td>{{ $items->active }}</td>
        <td>{{ $items->category_id }}</td>
       
        <td ><a class="btn btn-mute" href="{{url('edit-product'. $items->id)}}"><i class="fa fa-pencil"></i></a>
        <a class="btn btn-danger" href="{{url('delete-product/' . $items->id )}}"><span class="fa fa-remove"><br></span> </a></td>

         
        
    </tr>

    @endforeach


</tr>      
</tbody>
</table>
</div>
</div>
</div>     
</html>

 