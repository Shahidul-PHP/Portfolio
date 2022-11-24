<?php
session_start();
require '../db.php';


$about_img = $_FILES['photo']; 

$after_explode = explode('.',$about_img['name']);
$extension = end($after_explode);
$allow = array('jpg','png','webp','jpeg','PNG','JPG','JPEG');
$name = $about_img['name'];


if(in_array($extension,$allow)){
    if($about_img['size'] <= 4000000){
        // data insert in database
        $insert= "INSERT INTO about_img(img) VALUES('$name')";
        mysqli_query($db_connect,$insert);
        //make file name
        $last_id = mysqli_insert_id($db_connect);
        $file_name = $last_id . '.' .$extension;
        $new_location = '../uploads/about_image/' .$file_name;
        move_uploaded_file($about_img['tmp_name'], $new_location);
        // send update image data in database
        $update =  "UPDATE about_img SET img='$file_name' WHERE id = $last_id";
        mysqli_query($db_connect,$update);
        header('location:about_img.php');  
    }else{
        $_SESSION['success'] = "Image Uploaded Successfully";
        $_SESSION['error'] = "File size is Too Large";
        header('location:about_img.php'); 
    }
}else{
    $_SESSION['error'] = "Invalid Image Extension";
    header('location:about_img.php');
}



?>


























?>