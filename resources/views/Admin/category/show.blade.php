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

<a href="{{Route('add-category')}}" class="btn btn-danger add-new"><i class="fa fa-plus"></i> Add New</a>
</div>
</div>
</div>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Category:Name</th>
        <th>Description</th>
        <th>Depart_Id</th>
        <th>Status</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($category as $items)
    <tr>
        <td>{{ $items->id }}</td>
    
        <td>{{ $items->name }}</td>
        <td>{{ $items->description }}</td>
        <td>{{ $items->department_id }}</td>
        <td>{{$items->status}}</td>
        <td ><a class="btn btn-mute" href="{{ url('/edit-category'. $items->id)}}"><i class="fa fa-pencil"></i></a>
        <a class="btn btn-danger" href="{{url('delete-category/' . $items->id )}}"><span class="fa fa-remove"><br></span> </a></td>

         
        
    </tr>

    @endforeach


</tr>      
</tbody>
</table>
</div>
</div>
</div>     
</html>

 