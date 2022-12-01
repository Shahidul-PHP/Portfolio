<?php
session_start();
require '../db.php';

$id = $_POST['id'];
$tt  = $_POST['tt'];
$dd  = $_POST['dd'];


$update = "UPDATE service_list SET service_title='$tt', 

service_detail='$dd' WHERE id = $id";

$ss = mysqli_query($db_connect,$update);

$_SESSION['dd'] = "Service Updated Successfully";
header('location:add_service.php');


?>