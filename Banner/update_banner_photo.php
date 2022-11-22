<?php 
session_start();
require '../login_check.php';
require '../db.php';

$banner_image = $_FILES['banner_img'];
$name = $banner_image['name'];
$make_explode = explode('.',$banner_image['name']);
$extension = end($make_explode);
$allow = array('jpg','jpeg', 'png', 'webp', 'JPG','JPEG','PNG');

if(in_array($extension,$allow)){
    if($banner_image['size'] <= 1000000){
        //insert data
        $insert_banner = "INSERT INTO banner_img(img) VALUES ('$name')";
        $make_bannerImg_query = mysqli_query($db_connect,$insert_banner);
        $last_id = mysqli_insert_id($db_connect);
        //make file name
        $file_name = $last_id. '.' .$extension;
        $new_location = '../uploads/banner/'.$file_name;
        move_uploaded_file($banner_image['tmp_name'], $new_location);
        //update database with image name
        $update_bannerImg = "UPDATE banner_img SET img='$file_name' WHERE id='$last_id'";
        $query = mysqli_query($db_connect,$update_bannerImg);
        $_SESSION['successImg'] = "Image Update Successfully";
        header('location:edit_banner.php');

    }else{
        $_SESSION['error'] = "File size is too Large !!";
        header('location:edit_banner.php');  
    }
}else{
    $_SESSION['error'] = "Invalid Extension";
    header('location:edit_banner.php');
}



?>