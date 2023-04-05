<?php
$username = "admin";
$password = "admin";
session_start();

if(isset($_SESSION['uname'])){
    echo "<h1 align=right>Hello,".$_SESSION['uname']."</h2>";
    echo "<h1 align=center>welcome to home screen</h1>";
    echo "<a href=product.php>Click here for products</a>";
    echo "<br><a href=home.php>Click here for Home</a>";
    echo "<br><a href=about.php>Click here for About Us</a>";
}
else{
     if($username == $_POST['uname'] && $password == $_POST['upass']){
          $_SESSION['uname']=$username;
         header("refresh:0,url=home.php");
     }
     else{
          echo "<script>alert('invalid username or password')</script>";
          header("refresh:0,url=login.html");
     } 
}
?>