<?php

include 'connect.php';
$id = $_GET['id'];
$query ="SELECT * FROM `categories` WHERE `id`='$id'";
$result = mysqli_query($conn,$query);
$category = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Edit Category</h1>
        <form action="update.php" method="post">
            <input type="hidden" values ="<?= $id ?>">
  <div class="mb-3">
    <label for="name" class="form-label">Category name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value =<?= $category['name']?>>
    
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Category Description</label>
    <input type="text" class="form-control" id="description" name="description" value =<?= $category['description']?>>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
</body>
</html>