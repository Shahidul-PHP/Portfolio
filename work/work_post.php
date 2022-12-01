<?php
session_start();
require '../db.php';

//variable declare
$user_id = $_POST['user_id'];
$category = $_POST['category'];
$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];

//insert data only in database
$insert_work = "INSERT INTO works(user_id,category,sub_title,title,desp)VALUES('$user_id','$category','$sub_title','$title','$desp')";
$make_query = mysqli_query($db_connect, $insert_work);
$last_id = mysqli_insert_id($db_connect);


// thumbnail image insert in Database
$thumb_img = $_FILES['thumb_img'];

$after_explode = explode('.', $thumb_img['name']);
$extension = end($after_explode);
$allowed = array('jpg','jpeg','png','JPG','JPEG','PNG');


if(in_array($extension,$allowed)){
    if($thumb_img['size'] <= 10000000){
        $file_name = $last_id. '.' .$extension;
        $new_location = '../uploads/work/thumb/'.$file_name;
        move_uploaded_file($thumb_img['tmp_name'], $new_location);     
        //update in database for image insert
        $update = "UPDATE works SET thumb_img='$file_name' WHERE id=$last_id";
        $query = mysqli_query($db_connect, $update);
        header('location:work.php');
    }else{
        $_SESSION['sizeError'] = "Max File Size Limit Cross. 10 MB Allowed";
        header('location:work.php');
    }
}else{
    $_SESSION['error'] = "Invalid Extension";
    header('location:work.php');
}


// preview image insert in Database
$feat_img = $_FILES['feat_img'];

$after_explode = explode('.', $feat_img['name']);
$extension = end($after_explode);
$allowed = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG');


if (in_array($extension, $allowed)) {
    if ($feat_img['size'] <= 10000000) {
        $file_name = $last_id . '.' . $extension;
        $new_location = '../uploads/work/feat/' . $file_name;
        move_uploaded_file($feat_img['tmp_name'], $new_location);
        //update in database for image insert
        $update_feat = "UPDATE works SET feat_img='$file_name' WHERE id=$last_id";
        $query = mysqli_query($db_connect, $update_feat);
        header('location:work.php');
    } else {
        $_SESSION['er'] = "Max File Size Limit Cross. 10 MB Allowed";
        header('location:work.php');
    }
} else {
    $_SESSION['err'] = "Invalid Extension";
    header('location:work.php');
}

// move in work file
$_SESSION['work'] = "Skills are Addedd Suuccesfully";
header('location:work.php');


//ending the code


?>