<?php


$host = 'localhost';
$user = 'root';
$password ='';
$database = 'instantodc';

$conn = mysqli_connect($host,$user,$password,$database);

if($conn == false){
    echo "Error During Connection" . mysqli_connect_error();
}


?>