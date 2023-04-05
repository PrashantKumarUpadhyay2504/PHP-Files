<?php

$num_one=$_POST['Fnumber'];
$num_two=$_POST['Snumber'];

if(isset($_POST['add'])){
    echo "Addition of two numbers : ".$num_one+$num_two;
}

if(isset($_POST['sub'])){
    echo "Subtraction of two numbers : ".$num_one-$num_two;
}

if(isset($_POST['div'])){
    echo "Division of two numbers : ".$num_one/$num_two;
}

if(isset($_POST['mul'])){
    echo "Multiplication of two numbers : ".$num_one*$num_two;
}
?>