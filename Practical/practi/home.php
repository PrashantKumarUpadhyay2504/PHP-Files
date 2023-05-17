<?php
$username = "admin";
$useremail= "admin";
session_start();

if(isset($_SESSION['unm'])){
    echo"Welcome to HOME PAGE ";
}else{
    if($username == $_POST['unm'] && $useremail == $_POST['emal']) {
        $_SESSION['unm'] = $username;
        header('refresh:0,url=home.php');
    }else{
        echo"<script>alert('Invalid Username and Useremail')</script>";
        header("refresh:0,url=login.html");
    }
}
?>