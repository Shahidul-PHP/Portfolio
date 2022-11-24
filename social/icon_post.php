<?php 
session_start();
require '../db.php';

$icon = $_POST['icon'];
$link = $_POST['link'];

$insert_icon = "INSERT INTO social(icon,link) VALUES('$icon','$link')";
$make_query = mysqli_query($db_connect,$insert_icon);

$_SESSION['done'] = "Icon Added Succesfully";
header('location:social.php');



?>