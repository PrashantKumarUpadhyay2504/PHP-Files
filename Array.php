<?php

$arr=[10,20,30,40,50,60];

print_r($arr); // Array ( [0] => 10 [1] => 20 [2] => 30 [3] => 40 [4] => 50 [5] => 60 )
// foreach(Array(Any kind) as Any User defined variable)
echo "<br>";
foreach ($arr as $var){
    echo " <b style='color:red'>$var</b>"; //10 20 30 40 50 60
}
echo "<br>";
foreach ($arr as $index =>$value){
    echo $index."-" .$value.",";
}

$arr1=["os"=>34,"cn"=>45,"automata"=>90];

echo "<br>";
foreach ($arr1 as $index =>$value){
    $index_new=strtoupper($index);
        echo " Marks of <b style= 'color: red;'>$index_new</b> : <b style = 'color: blue;'>$value </b>"."<br>";
}
# Functions of Array:

// 1.array() : to create an array . 
// 2.array_chunk(name of array,size): 
$num1=[1,2,3,4,5,6,7];
$num2=[8,9,10,11];
print_r(arrray_filp(num1));


echo "<br>";
print_r(array_chunk($arr,2));
echo "<br>";
print_r(array_change_key_case($arr1));
echo "<br>";
print_r(array_change_key_case($arr1,2));
echo "<br>";
// print_r(array_column($arr1));
$var=[1,2,3,4,5,6,7,8];
$var1=[2,2,3,2,1,4,5,3];
print_r(array_combine($var,$var1)); //Array ( [1] => 2 [2] => 2 [3] => 3 [4] => 2 [5] => 1 [6] => 4 [7] => 5 [8] => 3 )
echo "<br>";
// array_count_values(Array);
print_r(array_count_values($var1)); // it counts the duplicate element in the array.
echo "<br>";
echo count($var); // it displays the length of the array .
$var=[10,20,30,40,50];
$var1=[20,30];
echo "<br>";
print_r(array_diff($var,$var1));// it is only for the indexed array . 
echo "<br>";

// To delete element from array:

$arr=[10,20,30,40,50,60,70];
$arr_new=[20,30,40];
// For indexed Array:

echo "<br>";
print_r(array_diff($arr,$arr_new));

// Associative Array :
$arr=["math"=>90,"c++"=>88,"Java"=>78,"php"=>99,"CN"=>77];
$arr_new=["math"=>90,"php"=>99];

echo "<br>";
print_r(array_diff_key($arr,$arr_new));//For Associative Array
echo "<br>";
print_r(array_diff_assoc($arr,$arr_new));//For Associative Array
// echo "<br>";

// Intersection: to display the common elements from array . 
$num1=[1,2,3,4,5,6,7,8];
$num2=[3,4,5,6,7];
// For index Array : 
print_r(array_intersect($num1,$num2 ));
echo"<br>";

// array_fill(Start , no element, value) : 
$data=array_fill(100, 200, 0);
print_r($data );

echo"<br>";
$key_set=['a','b','c','d','e'];
$new_data=array_fill_keys($key_set,20); //array_fill_keys(key array,value);
print_r($new_data);


#for Associative Array:
// arrray_flip(trans);
// array_keys(input);
// array_key_exists(key,array);
// array_search(value, array ); // true or false 
echo"<br>";
print_r(array_pad([10,20],20,"new")); //array_pad(array,no. of time ,String);


// it works from last element . and it worls on particular element .
print_r(array_push($key_set,22) );  //array_push(array , inserting element in array) ;
echo"<br>";
print_r(array_pop($key_set)); // same as array_diff() function can be use for deletion of the element . 

// unset(array) delete an element by indexed wise.
echo"<br>";
$data=[12,3,4,2,32,66,78,9,7,6];
print_r(array_product($data));
// array_shift(array);

echo"<br>";
$arr1=[10,20,30,4,5,6,2,80];
$res=array_slice($arr1,2);  // array_slice(array,start);
print_r($res);//Array ( [0] => 30 [1] => 4 [2] => 5 [3] => 6 [4] => 2 [5] => 80 )
echo"<br>";
print_r(array_slice($arr1,2,5));// array_slice(array,start,end);
  //Array ( [0] => 30 [1] => 4 [2] => 5 [3] => 6 [4] => 2 )

$arr1=[10,20,30,4,5,6,2,80];
$data=[10,20,4,2,1,3];
echo"<br>";
print_r(array_splice($arr1,3,3,$data)); // array_splice(array, index(user choice), no. of replaceing element from another array , array2 );
echo"<br>";
print_r($arr1);


// Sorting Function:
//it works on indexed array:
echo"<br>";
sort($arr1); // sort(array);
print_r($arr1);
echo"<br>";
rsort($arr1);//descending
print_r($arr1);

// Associative
ksort($arr1);  // ascending order by key
krsort($arr1); //descending order  by key
asort($arr1); // ascending order by value
arsort($arr1)//descending by values
// array_multisort([30,20,12,34,55,33],SORT_DESC,$arr1,$data);

?>