<?php

session_start();
if(isset($_SESSION['uname'])){
session_destroy();
header("refresh:0,url=login.html");
}
else{
     header("refresh:0,url=login.html");
}

?>