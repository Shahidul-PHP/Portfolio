<?php 
session_start();
require '../db.php';

$id = $_GET['id'];

$delete = "DELETE FROM logos WHERE id=$id";
$make_query = mysqli_query($db_connect,$delete);

$_SESSION['success'] = "Logo deleted Successfully";
header('location:add_logo.php')



?>