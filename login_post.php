<?php 
session_start();
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];
$flag = true;


$select = "SELECT COUNT(*)  as find FROM users WHERE email = '$email'";
$make_query = mysqli_query($db_connect,$select);
$make_assoc = mysqli_fetch_assoc($make_query);

if($make_assoc['find'] == 1){
    $select_pass = "SELECT * FROM users WHERE email = '$email'";
    $make_query_pass = mysqli_query($db_connect, $select_pass);
    $make_assoc_pass = mysqli_fetch_assoc($make_query_pass);
print_r($make_assoc_pass['password']);
    if(password_verify($password, $make_assoc_pass['password'])){
        $_SESSION['login_confirm'] = 'success';
        $_SESSION['id'] = $make_assoc_pass['id'];
        header('location:dashboard.php');
        $flag = false;
    }else{
        if(empty($password)){
            $_SESSION['Passerror'] = "Enter a Password First";
            header('location:login.php');
            $flag = false;
        }else{
            $_SESSION['Passerror'] = "You Entered a Wrong Password";
            header('location:login.php');
            $flag = false;
        } 
    }
}else{
    if(empty($email)){
        $_SESSION['error'] = "Enter Your Email";
        header('location:login.php');
        $flag = false;
    }else{
        $_SESSION['error'] = "Invalid Email Address";
        header('location:login.php');
        $flag = false;
    }
    $_SESSION['login_value'] = $email;
    header('location:login.php');
}

?>