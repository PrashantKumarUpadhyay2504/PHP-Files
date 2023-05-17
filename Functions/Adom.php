<?php 
declare(strict_types=1);

function adomcheck(int $num){
    $real_num=$num;
    $real_num=$real_num * $real_num;
    $real_num=strrev("$real_num");
    $real_num=sqrt("$real_num");
    $real_num=strrev("$real_num");
    if($real_num==$num){
        print_r("yes");
    }else{
        print_r("No");
    }
}
echo"<input type=text name= num value= num >";
echo"<input type=submit name= adom value= admon >";
$num=$_POST['num'];
if(isset($_POST['adom'])){
    adomcheck(num);
}
?>