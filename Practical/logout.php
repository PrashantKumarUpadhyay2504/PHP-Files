<?php
session_start();

if(isset($_SESSION['emal'])){
    session_destroy();
    header('refresh:0,url=login1.html');
}else{
    header('refresh:0,url=login1.html');
}

?>