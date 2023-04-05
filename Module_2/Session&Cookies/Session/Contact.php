<?php
session_start();
if(isset($_SESSION['uname'])){
     echo "<h1 align=right>Hello,".$_SESSION['uname']."</h2>";
     echo "<h2>welcome to contact page</h2>";
     echo "<a href=product.php>Click here for products</a>";
     echo "<br><a href=home.php>Click here for Home</a>";
     echo "<br><a href=about.php>Click here for About Us</a>";
     echo "<br><button><a href=logout.php style='text-decoration:none'>Logout</a></button>";
}
else{
     header("refresh:0,url=login.html");
}
?>