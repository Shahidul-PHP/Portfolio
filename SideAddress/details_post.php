<?php
session_start();
require '../db.php';


$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$update_address = "UPDATE side_address SET address='$address', phone='$phone', email='$email'";

$update_query = mysqli_query($db_connect, $update_address);

$_SESSION['success'] = "Edited Suucessfully";
header('location:details.php');






?>