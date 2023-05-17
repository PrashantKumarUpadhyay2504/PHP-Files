<?php
// setcookie(name,value,expiry_time,path,domain) 
setcookie("Marks",get_current_user(),time()+10);

if(isset($_COOKIE['Marks'])){
    echo $_COOKIE['Marks'];
}

echo"<a href=third.php> click here</a>";
?>