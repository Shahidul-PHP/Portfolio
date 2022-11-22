<?php
session_start();
require '../db.php';


$id = $_GET['id'];
$delete = "DELETE FROM banner_img WHERE id=$id";
$result = mysqli_query($db_connect,$delete);


$_SESSION['delete'] = "Image Deleted Successfully";
header('location:edit_banner.php');










?>