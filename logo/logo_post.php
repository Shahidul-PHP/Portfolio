<?php 
session_start();
require '../db.php';


$logo = $_FILES['logo'];
$after_explode = explode('.',$logo['name']);
$extension = end($after_explode);
$allow = array('jpg','png','webp');
$name = $logo['name'];


if(in_array($extension,$allow)){
    if($logo['size'] <= 4000000){
        // data insert in database
        $insert= "INSERT INTO logos(logo) VALUES('$name')";
        mysqli_query($db_connect,$insert);
        //make file name
        $last_id = mysqli_insert_id($db_connect);
        $file_name = $last_id . '.' .$extension;
        $new_location = '../uploads/logo/' .$file_name;
        move_uploaded_file($logo['tmp_name'], $new_location);
        // send update image data in database
        $update =  "UPDATE logos SET logo='$file_name' WHERE id = $last_id";
        mysqli_query($db_connect,$update);
        header('location:add_logo.php');  
    }else{
        $_SESSION['error'] = "File size is Too Large";
        header('location:add_logo.php'); 
    }
}else{
    $_SESSION['error'] = "Invalid Logo Extension ! only png allowed";
    header('location:add_logo.php');
}




















?>