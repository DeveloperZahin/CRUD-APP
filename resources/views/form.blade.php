<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Student</title>
  </head>
  <body>
    <div class="text-center">
        <h1>HELLO, CRUD</h1>
        <p>This is a simple CRUD application</p>
    </div>

    <div class="container">
        <form method="post" action="{{ route('store') }}">
          @csrf
            <div class="mb-3">
                <label for="ExampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="ExampleInputName" placeholder="Enter name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="ExampleInputPhone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="ExampleInputPhone" placeholder="Enter phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="ExampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="ExampleInputEmail1" placeholder="Enter email" name="email" required>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>