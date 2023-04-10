<?php
$nam=$_POST['nam'];
$eml=$_POST['eml'];
$cnt=$_POST['cnt'];
$aadhr=$_POST['aadhr'];
$pswd=$_POST['pswd'];
$cpswd=$_POST['cpswd'];

$connection=mysqli_connect("localhost","root","","regist");
class __connection{
    function connect(){
    if(!mysqli_connect("localhost","root","","regist")){
        die("Trouble established");
    }
    }
}
if(strlen($pswd)>=8)
    if(mysqli_query($connection,"INSERT INTO form(nam, eml, cnt, aadhr, pswd, cpswd) VALUES ('$nam','$eml','$cnt','$aadhr','$pswd','$cpswd')")){
        header("refresh:0,url=form.html");
    }
else{
    echo "Not inserted";
}

?>