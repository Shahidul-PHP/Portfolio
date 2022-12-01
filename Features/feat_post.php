<?php
session_start();
require '../db.php';

$count = $_POST['count'];
$title = $_POST['title'];

$update = "UPDATE feature SET count='$count', title='$title'";
$rr = mysqli_query($db_connect,$update);
header('location:feat.php');

?>