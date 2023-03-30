<?php

// Rules:- 

//   Function with argument with return type
//   Function with argument without return type
//   Function without argument with return type
//   Function without argument without return type 


//  Snytax :
/*
function function_name(){
    Statement;
}
*/

// function msg(){
//     printf("Hello Class");
// }
// echo msg();

// 1.  Function without argument without return type (example):

// function add(){
//     $val1=56;
//     $val2=66;

//     $result= $val1 + $val2;
//     echo $result;
// }

// add();
// echo"<br>";
// add(12,43);
// echo"<br>";

//2. Function without argument with return type

// function add(){
//     $val1=56;
//     $val2=66;

//     $result= $val1 + $val2;
//     echo $result;
//     // return exit();
//     return $result;
// }

// function add():int{  // declared the return type 
//     $val1=56;
//     $val2=66;

//     $result= $val1 + $val2;
//     echo $result;
//     // return exit();
//     return (string) $result;
// }

// $data=add();
// // echo add(23,55);
// echo $data;
// echo"<br>";
// // var_dump($data);
// var_dump(add());
// echo "<br>";



// Function with argument  without return type:

// function add($val1 , $val2)
// {
//     $result = $val1 + $val2;
//     echo"$result";
// }
 
// add(10 ,20);

// Function with argument  with return type:

// function add($val1 , $val2)
// {
//     $result = $val1 + $val2;
//     return $result;
// }

// $data=add(10 ,20);


// eg Former 
// function add($val1=0  , $val2=0)
// {
//     $result = $val1 + $val2;
//     return $result;
// }
 
// $data=add(10 ,20);

// eg:
declare (strict_types=1);

function add(int $val1  ,int  $val2=0)
{
    $result = $val1 + $val2;
    return $result;
}

$data=add(23,56);
echo $data;




?>