<?php
session_start();
require '../db.php';

$about = $_POST['about'];

$update = "UPDATE about SET about = '$about'";
$result = mysqli_query($db_connect,$update);

$_SESSION['about'] = 'About updated Suceessfully';
header('location:about.php');


?>