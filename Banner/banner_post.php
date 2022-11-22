<?php
session_start();
require '../login_check.php';
require '../db.php';


$sub_title = $_POST['sub_title'];
$title = $_POST['header'];
$desp = $_POST['desp'];


$update_banner = "UPDATE banner SET sub_title='$sub_title', title='$title', desp='$desp' ";

$update_query = mysqli_query($db_connect,$update_banner);

$_SESSION['success'] = "Edited Suucessfully";
header('location:edit_banner.php');

?>