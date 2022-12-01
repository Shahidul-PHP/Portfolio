<?php 
session_start();
require '../db.php';

$service_title = $_POST['service_title'];
$service_detail = $_POST['service_detail'];
$icon = $_POST['icon'];


$insert = "INSERT INTO service_list(icon,service_title,service_detail) VALUES('$icon','$service_title', '$service_detail')";
$insert_query = mysqli_query($db_connect,$insert);
header('location:add_service.php');



?>