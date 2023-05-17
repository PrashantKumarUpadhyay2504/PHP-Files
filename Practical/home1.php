<?php

$uname="admin";
$password="admin";

session_start();

if(isset($_SESSION['emal'])){
    echo"hello".$_SESSION['emal']." Welcome to home page";
    echo"<button><a href=logout.php>Logout</a></button>";

}else{
    if($uname==$_POST['emal'] && $password==$_POST['pass']){
        $_SESSION['emal']=$uname;
        header("refresh:0,url=home1.php");
    }else{
        echo"<script>alert('invalid username and password')</script>";
        header('refresh:0,url=login1.html');
    }
}


?>