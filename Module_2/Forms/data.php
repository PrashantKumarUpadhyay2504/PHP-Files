<?php
$emal=$_POST['emal'];
$paas=$_POST['paas'];

$connection_details=mysqli_connect("localhost","root","","fom");
if(!$connection_details){
    die("The Problem Established");
}

// submit button

if(isset($_POST['submit'])){
    $insert_query="INSERT  INTO login(emal,paas) VALUES ('$emal','$paas')";
    if(mysqli_query($connection_details,$insert_query)){
        header("refresh:0 ; url=Form.html");
    }else{
        echo"data doesn't store to the database .";
    }
}
?>
