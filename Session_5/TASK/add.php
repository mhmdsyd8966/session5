<?php 

include 'connect.php';









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Categories</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Add Category</h1>
    <form action="logic.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Category name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" name="name">
    
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Category Description</label>
    <input type="text" class="form-control" id="description" name="description">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>