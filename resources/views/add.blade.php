<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>{{ config("app.name") }}</title>

</head>

<body>
    <h1 class="text-center bg-primary text-white p-3">Add User - {{ config("app.name") }}</h1>
   <form method="POST" action="{{ route('add') }}" class="w-50 mx-auto p-5 border">
    @csrf
  <div class="form-group mb-5">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">City</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="City">
  </div>
 
  <button type="submit" class="btn btn-success d-block mx-auto mb-3 mt-3">Add User</button>
    <a href="/" class="btn btn-danger d-block mx-auto text-white text-decoration-none">Cancel</a>
</form>
    
</body>


</html>
