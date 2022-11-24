<?php 

require '../db.php';

$id = $_GET['id'];

$select_status = "SELECT * FROM about_img WHERE id = $id ";
$make_status_query = mysqli_query($db_connect,$select_status);
$after_assoc = mysqli_fetch_assoc($make_status_query);



if($after_assoc['status'] == 1){
    $update = "UPDATE about_img SET status = 0 WHERE id = $id";
    $conection = mysqli_query($db_connect, $update);
    header('location:add_img.php');
}else{
    $update = "UPDATE about_img SET status = 0";
    $conection = mysqli_query($db_connect, $update);
    header('location:add_img.php');

    $update2 = "UPDATE about_img SET status = 1 WHERE id = $id";
    $conection = mysqli_query($db_connect, $update2);
    header('location:about_img.php');
}
