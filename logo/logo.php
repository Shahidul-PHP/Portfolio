<?php 

require '../db.php';

$id = $_GET['id'];

$select_status = "SELECT * FROM logos WHERE id = $id ";
$make_status_query = mysqli_query($db_connect,$select_status);
$after_assoc = mysqli_fetch_assoc($make_status_query);



if($after_assoc['status'] == 1){
    $update = "UPDATE logos SET status = 0 WHERE id = $id";
    $conection = mysqli_query($db_connect, $update);
    header('location:add_logo.php');
}else{
    $update = "UPDATE logos SET status = 0";
    $conection = mysqli_query($db_connect, $update);
    header('location:add_logo.php');

    $update2 = "UPDATE logos SET status = 1 WHERE id = $id";
    $conection = mysqli_query($db_connect, $update2);
    header('location:add_logo.php');
}










?>