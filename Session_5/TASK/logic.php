<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Catigory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="all.php">The Main Table</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      
    </div>
  </div>
</nav>
    </div>
</body>
</html>





<?php 

include 'connect.php';

if(isset($_POST['submit'])){
$errors=[];

$name = htmlspecialchars(trim($_POST['name']));
$description = htmlspecialchars(trim($_POST['description']));

if(empty($name)){
    $errors[]="The name is empty!<br>"; 
}elseif(strlen($name)<3){
    $errors[]="Category Name must be greater than 3 characters!";  
}
if(empty($description)){
    $errors[]="The name is empty!<br>";
}
if(empty($errors)){
    $query = "INSERT INTO `categories` (`name`,`description`)
            VALUES ('$name','$description')";
    $result =mysqli_query($conn,$query);
    $affectedrows=mysqli_affected_rows($conn);
    echo "<div class='alert alert-success'>
    Category Inserted Successfully</div>";
}
else{
    ?>
    <div alert alert-danger>
        <ul>
            <?php
            foreach($errors as $error){
                echo "<li class='alert alert-danger'>$error</li>";
            }
            ?>
        </ul>
    </div>
    <?php
}
}
else{
    header("location:add.php");
    exit;
}


?>


