<?php
session_start();
require '../db.php';

$title = $_POST['title'];
$desp = $_POST['desp'];
$percentage = $_POST['percentage'];


$insert ="INSERT INTO skills(title_sk,desp_sk,percentage)VALUES('$title', '$desp', '$percentage')";

$make_query = mysqli_query($db_connect,$insert);
$_SESSION['skill'] = "Skills are Addedd Suuccesfully";
header('location:add_skill.php');


?>