<?php

function AdomNo($num){
    $new_num=$num;
    $new_num=$new_num*$new_num;
    $new_num=strrev("$new_num");
    $new_num=sqrt($new_num);
    $new_num=strrev("$new_num");
    if($new_num==$num){
        echo"Yes";
    }else{
        echo"No";
    }
}
AdomNo(11);
?>