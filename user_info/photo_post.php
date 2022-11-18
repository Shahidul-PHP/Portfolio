<?php 
session_start();
require '../db.php';

$id = $_POST['id'];
$upload_photo = $_FILES['photo'];
$after_explode = explode('.',$upload_photo['name']);
$extension = end($after_explode);
$allow_ex = array('jpeg', 'jpg', 'png', 'gif', 'webp');


if(in_array($extension,$allow_ex)){
    if($upload_photo['size'] <= 4000000){
        $select_photo = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($db_connect,$select_photo);
        $after_assoc_img = mysqli_fetch_assoc($result);

        $delete_from = '../uploads/users/'.$after_assoc_img['photo'];
        unlink($delete_from);

        $file_name = $id . '.' .$extension;
        $new_location = '../uploads/users/'. $file_name;
        move_uploaded_file($upload_photo['tmp_name'], $new_location);
        //update query for send image in DB
        $update_img = "UPDATE users SET img = '$file_name' WHERE id = $id";
        mysqli_query($db_connect, $update_img);
        header('location:../dashboard.php');
    }else{
        $_SESSION['error'] = "File Size is Too Large ! Max file Size is 3 Mb";
        header('location:profile.php');
    }
}else{
    $_SESSION['error'] = "Invalid Image Extension";
    header('location:profile.php');
}
 















?>