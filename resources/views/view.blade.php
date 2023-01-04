<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    <h1>Hello, world!</h1>
    <form action="/sign" method="post">
        @csrf
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="mb-3">
    <label>User_Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="mb-3">
    <label>Email address</label>
    <input type="email" class="form-control" name="email"  value="{{ old('email') }}">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 </form>
</div>
  </body>
</html>