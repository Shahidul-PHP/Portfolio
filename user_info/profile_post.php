<?php 
require '../db.php';


$id =     $_POST['id'];
$name =   $_POST['name'];
$email =  $_POST['email'];
$password = $_POST['password'];

$after_hash = password_hash($password,PASSWORD_DEFAULT);

if(empty($password)){
    $update_info = "UPDATE users SET name='$name', email = '$email' WHERE id= $id";
    mysqli_query($db_connect, $update_info);
    header('location:../dashboard.php');
}else{
    $update_info = "UPDATE users SET name='$name', email = '$email', password='$after_hash' WHERE id= $id";

    mysqli_query($db_connect, $update_info);
    header('location:../dashboard.php');
}











?>