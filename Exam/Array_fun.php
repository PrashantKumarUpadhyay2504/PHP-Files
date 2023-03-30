<?php
$arr=[10,20,30,40,50,60];

print_r($arr);

echo"<br>";

foreach($arr as $var){
    echo $var ." ";
}

echo "<br>";
// Indexing 

foreach($arr as $ind=>$value){
    echo $ind."-".$value." ";
}

// Arrays Function :

echo"<br>";
print_r(array_chunk($arr,2));
echo"<br>";
$arr1=["OS"=>45,"cn"=>55,"php"=>67,"dbms"=>90];

print_r(array_change_key_case($arr1,2)); // it convert the string of key in associative Array lowercase to uppercase.  
echo"<br>";

$var=[1,4,6,9,2,7,8];
$var1=[67,90,87,76,55,66,43];

print_r(array_combine($var,$var1));
echo"<br>";

print_r(array_count_values($var1));
echo"<br>";

$var=array(12,90,77,56,45,34,9,8,67);
$var1=[9,45,56];
print_r(array_diff($var,$var1));

echo"<br>";
$arr=["math"=>78,"cn"=>56,"eng"=>90,"php"=>77];
$arr1=["cn"=>56];
print_r(array_diff_key($arr,$arr1));

echo"<br>";

$num=[10,20,30,40,50];
$num1=[70,5,44,34,23];
print_r(array_diff_assoc($arr,$arr1));

$num=[10,20,30,40,50];
$num1=[1,20,3,40,5];
echo"<br>";
print_r(array_intersect($arr,$arr1));
echo"<br>";
print_r(array_intersect_key($arr,$arr1));

echo"<br>";

$data=array_fill(100,200,0);
print_r($data);

echo"<br><br>";
$arr1=['a','b','c','d','e'];
print_r(array_fill_keys($arr1,90));
echo"<br><br>";
print_r(array_pad([10,20],20,"new"));
echo"<br><br>";

$arr1=[10,20,30,4,5,6,2,80];
$data=[10,20,4,2,1,3];
echo"<br>";
print_r(array_splice($arr1,3,1,$data));
echo"<br>";
echo array_search(4,$data); // It displays only index no. 

echo"<br>";

print_r(array_slice($data,-5,-1));

?>