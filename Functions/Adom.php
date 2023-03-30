<?php 

function adomcheck(int $num){
    $real_num=$num;
    $real_num=$real_num * $real_num;
    $real_num=strrev("$real_num");
    $real_num=sqrt("$real_num");
    $real_num=strrev("$real_num");
    if($real_num==$num){
        echo"yes";
    }else{
        echo"No";
    }
}
adomcheck(12);
?>