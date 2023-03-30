<?php

//1-Write a PHP script to:
//a) Transform a string all uppercase letters.
echo"1. (a)". strtoupper("hello worldm!");

echo"<br>";
//b) Transform a string all lowercase letters.
echo"1. (b)" .strtolower("HELLO WORLD.");
echo"<br>";

//c) Make a string's first character uppercase.
echo"1. (c)".ucfirst("hello programming!");
echo"<br>";

//d) Make a string's first character of all the words uppercase.
echo"1. (d)". ucwords("hello programming world");
echo"<br><br>";

//2-Write a PHP script to split the following string.
//Sample string: '082307'
//Expected Output: 08:23:07
$str1= '082307'; 
echo "2.".substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
echo"<br><br>";


//3- Write a PHP script to check whether a string contains a specific string?
//Sample string: 'The quick black fox jumps over the white dog'.
// Check whether the said string contains the string 'over'.
echo"3. ";
$str2 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str2,'over') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }


 echo"<br><br>"."4.";
//4-Write a PHP script to convert the value of a PHP variable to string.
$x =  20;            
$str3 = (string)$x; 
if ($x === $str3) 
{
  echo "They are the same"."\n";
}
else
{
echo "They are not same"."\n";
}

echo"<br><br>"."5.";

//5-Write a PHP script to get the last three characters a string.
//Sample string: 'ak@creation.com'
//Expected output: 'com'
$str4 = 'ak@creation.com';
echo substr($str1, -3)."\n";


echo"<br><br>"."6.";

//6-Write a PHP script to format values in currency style.
//Sample values: 'value1 = 65.45 , value2=104.35'
//Expected result: '169.80'
$v1 = 65.45;
$v2 = 104.35;
echo sprintf("%1.2f", $v1+$v2)."\n";

echo"<br><br>"."7.";

//7-Write a PHP script to generate simple random password[do not use rand() function] from a given string. Sample String: '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
//Note: Password length may be 6,7,8 etc.
function password_generate($userinput) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $userinput);
}
  echo password_generate(7)."\n";

  echo"<br><br>"."8.";

//8-Write a PHP script to replace the first 'the' of the following string with 'That'
//Sample date: 'the moon is round in the shape'
//Expected Result: 'That moon is round in the shape'.
$str5 = 'the moon is round in the shape';
echo preg_replace('/the/', 'That', $str5, 1)."\n"; 


echo"<br><br>"."9.";


//9-Write a PHP script to find the first character that is different between two strings:
//String1: 'facebook'
//String2: 'faceboll'
//Expected Result: First difference between to strings at position 6: "O" VS "I"
$str6 = 'facebook';
$str7 = 'faceboll';
$str_pos = strspn($str6 ^ $str7, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str6[$str_pos], $str7[$str_pos]);
printf("\n");

echo"<br><br>"."10.";

//10-Write a PHP script to put a string in an array.
//Sample strings : &quot;Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp
// above the world so high,\nLike a diamond in the sky.&quot;;
// Expected Result (using var_dump()) : array(4) { [0]=&gt; string(30) &quot;Twinkle, twinkle,
// little star,&quot; [1]=&gt; string(26) &quot;How I wonder what you are.&quot; [2]=&gt; string(27) &quot;Up
// above the world so high,&quot; [3]=&gt; string(26) &quot;Like a diamond in the sky.&quot; }

$str8 = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arr = explode("<br>", $str8);
var_dump($arr);





?>