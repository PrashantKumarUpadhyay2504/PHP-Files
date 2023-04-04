<?php
setcookie("Marks",'Prashant',time()+10);

if(isset($_COOKIE['Marks'])){
    setcookie("Marks",'',time()-(60*60*324));
}
?>