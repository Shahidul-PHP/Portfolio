<?php
session_start();
require '../db.php';

$count = $_POST['count'];
$title = $_POST['title'];

$insert = "INSERT INTO feature(count,title) VALUES('$count', '$title')";
$query = mysqli_query($db_connect,$insert); 
header('location:feat.php');


?>