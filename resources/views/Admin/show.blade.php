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
    <div class="card-header bg-dark">
        <h3 class="text-light fw-bold">All Category</h3>
      </div>
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">

<a href="{{Route('category')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
</div>
</div>
</div>
<table class="table table-bordered">
    <tr>
        <th>#</th>
        <th>Icon</th>
        <th>Dep:Name</th>
        <th>Description</th>
        <th>Status</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($item as $items)
    <tr>
        <td>{{ $items->id }}</td>
        <td> <img src="/upload/{{ ($items->photo) }}" width= '50' height='50' class="img img-responsive"></td>
        <td>{{ $items->name }}</td>
        <td>{{ $items->description }}</td>
        <td>{{$items->status}}</td>
        <td ><a class="btn btn-primary" href="{{ url('/dep-edit'. $items->id)}}"><i class="fa fa-pencil"></i></a>
        <a class="btn btn-danger" href="{{ url('dep-delete/'. $items->id)}}"><span class="fa fa-remove"><br></span> </a></td>

         
        
    </tr>

    @endforeach


</tr>      
</tbody>
</table>
</div>
</div>
</div>     
</html>

 