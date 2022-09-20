<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $errors =[];
    $id = $_GET['id'];
    $name =         htmlspecialchars(trim($_POST['name']));
    $description =  htmlspecialchars(trim($_POST['description']));

    if(empty($name)){
       $errors[]="The name is empty!<br>"; 
    }elseif(strlen($name)<3){
        $errors[]="Category Name must be greater than 3 characters!";  
    }

    if(empty($description)){
        $errors[]="The description is empty!<br>";   
    }
    if(empty($errors)){
            $query = "UPDATE `categories`
            SET `name`='$name',`description`='$description'
            WHERE id = '$id'
            ";
        $result =mysqli_query($conn,$query);
        $affectedrows=mysqli_affected_rows($conn);
        echo "<div class='alert alert-success'>
        Category Inserted Successfully</div>";
    }
    else {
        
            ?>
            <div class="alert alert-danger">
            
            <ul>
            
            <?php
            foreach($errors as $error){
            echo "<li>error</li>";
            }
            ?> 
            </ul>
            </div>
            <?php
        
    }


}else{
    header("location:add.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    
</body>
</html>