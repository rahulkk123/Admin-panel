<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

<body><div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Category Edit</h3>
      </div>
      <div class="card-body p-4">
    <form action="{{url ('update-category/'.$category->id) }}" method="post" enctype="multipart/form-data">

        @csrf
        @method("PUT")
        <div  class="d-flex justify-content-center">
           
            <div class="my-2">
            <label for="name">Category:Name:</label> 
            <input type="text" class="form-control, input sm"  name="name" value="{{ $category->name }}" >
        </div>
            <div class="my-2">
            <label for="email">Description:</label>
             <input type="text" class="form-control, input sm" name="description" value="{{$category->description}}"><br><br>
            </div>
            <div class="my-2">
                <label for="email">Department_id:</label>
                 <input type="text" class="form-control, input sm" name="department" value="{{$category->department_id }}"><br><br>
                </div>

            <div class="my-2">
                <button type="submit" class="btn btn-primary">Update</button></div>
        </div>   
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>