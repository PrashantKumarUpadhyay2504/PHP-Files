<?php
// // single quoated 
// // Double quoated
// $var = 78;
// $str_data = "hello class";
// $stu_data = 'btech secton G';
// var_dump($var);
// echo "<br>";
// var_dump($str_data);
// echo "<br>";
// printf($str_data);
// echo "<br>";
// var_dump($stu_data);
// echo"<br>";
// print "hello class '$var'";
// //Escape Sequence
// print "hello class \n$var"; //yeh browser mai new line pr print nhi hoga maagr php console pr hoga
// print "hello class <br>$var"; // yeh browser pr new line mai print hoga mgr console mai nhi hoga
// //Documentation string
// // $str_dataset = <<< mystring;
// // hello' class' welcome to "learn" php 
// //$mystring;
// echo "<br>";
// echo $str_dataset;
// // echo phpinfo();
// echo"<br>";
// echo get_current_user();
// $data = "hello class btech";
// echo addcslashes($data,"se"); //kuch specified characters k aage back slash lga dega ur string return krega.
// echo"<br>";
// $data = "hello clas's btech";
// echo addslashes($data);
// // bin2hex() : Convert binary data into hexadecimal representation
// echo "<br>";
// $data = "hellom class btech";
// echo bin2hex("hello");
// // chop() yeh sirf right end se work krta hai.
// echo"<br>";
// $data = "ram ";
// var_dump($data);
// echo "<br>";
// $var_new =chop($data,'m');
// var_dump($var_new);
// echo "<br>";
// echo chop("Hello ram y"," yam");
// //chr()character ko return krta hai specific ascii character se.
// echo "<br>";
// echo chr(65);
// //chunk spilt() string ko chhote chhote parts mai break kr deta hai
// echo "<br>";
// echo chunk_split("hello",2,",");
// echo convert_uuencode("Shivam");
// echo "<br>";
// echo convert_uudecode("&4VAI=F%M ");
// // count chars() returns information about character used in array.
// echo "<br>";
// echo count_chars("hello"); 
// echo "<br>";
print_r(count_chars("hello ",1)); //it display only the occurance in the String. 
echo "<br><br>";
print_r(count_chars("hello welcome to the php",2)); // it display all the occurs and not occurance in the string.
echo "<br>";
print_r(count_chars("hello welcome to the php",3)); //it display the charactor acc. to the alphabet order.

// // explode("saparator","String"); -
// echo "<br>";
// print_r(explode("e","Hello World!"));

// // implode("Glue","Array"); -
// echo "<br>";
// print_r(implode(" ",['h','e','l','l','o']));
// //  join(); - It is use to covert the array to string.
// echo join(); //alias of implode

// echo htmlentities("<a href=https://www.google.com>click Here</a>"); // it is used to encode
// echo"<br>";
// echo html_entity_decode("&lt;a href=https://www.google.com&gt;click Here&lt;/a&gt;"); //  it is used to decode
// echo"<br>";

// echo htmlspecialchars("Hello");
// echo"<br>";
// echo htmlspecialchars_decode("Rajendra");

// echo( lcfirst("HeLlO"));  //It is used to change the first character (uppercase to lowecase).
// echo"<br>";
// echo(ucfirst("heLlO"));   //It is used to change the first character (lowercase to uppercase).
// echo"<br>";
// echo(ucwords("heLlO claSS")); // Output : HeLlO ClaSS
// echo"<br>";
// $str1="HELLO , WORLD";
// echo(strtolower($str1)); // It is used to convert the string Uppercase to lowercase.
// echo"<br>";
// $str2="hello ,WoRld";
// echo(strtoupper($str1));// It is used to convert the string lowercase to Uppercase.
// echo"<br>";
// echo ltrim("  hello");  // It is used to trim or remove the space from left side . 
// echo"<br>";
// echo rtrim("  hello Sir ");  // It is used to trim or remove the space from right side . 
// echo"<br>";
// echo trim(" He ll o ");  // It is used to trim or remove the space from Both side . 
// echo"<br>";
// echo md5("Hello");
// // echo md5_file(); // It is used to encode or decode the data of file.
// echo"<br>";
// echo sha1('Hello');
// // echo sha1_file();

// $str1="hello class welcome to the php.";
// echo"<br>";
// echo str_replace("class","Section G",$str1); // it is used to replace the word or character .
// //  str_replace(find,replace,string,count)
// echo"<br>";
// echo str_ireplace("ClaSs","Section G",$str1); // same as previous replace function but it works case insensitive.
// echo"<br>";
// echo metaphone("Hello classm");  //

// # number_format():
// echo"<br>";
// echo number_format("10000"); // Output: 10,000
// echo"<br>";
// echo number_format("10000",3); // Output: 10,000.000
// echo"<br>";
// echo number_format("10000",3,':'); // Output: 10,000:000
// echo"<br>";
// echo number_format("10000",3,':',"#"); //Output: 10#000:000

// echo"<br>";
// echo strpos("hello","l"); //it displays the index of character from the string.
// echo"<br>";
// echo stripos("welcome","C"); //it displays the index of character from the string.(with case insensitive)
// echo"<br>";
// echo strlen("Hello class."); // it displays the length of the string.
// echo"<br>";

// #strcmp(): it is used to compare the string to each other.

// $str1="Hello";
// $str2="Welcome";
// echo strcmp($str1,$str2); //if the length of string is different then it returns -1 .
// echo"<br>";

// $str2="Hello";
// echo strcmp($str1,$str2); //if strings are same in case-sensitive and length then it returns the 0 .
// echo"<br>";

// $str2="He";
// echo strcmp($str1,$str2); //if strings are different to each other  and length then it returns the 1 .

// #str_shuffle(): it is used to rearrangement of the strings characters . 
// echo"<br>";
// echo str_shuffle("hello"); // it rearranges the characters of the string.

// #str_repeat(String,Integer(time)): 
// echo"<br>";
// echo str_repeat("hello",4); //hellohellohellohello

// #str_pad("String",Integer(times),"Special character(any)"):
// echo"<br>";
// echo str_pad("hello",20,"$"); //hello$$$$$$$$$$$$$$$

// /*Same as the repeat function :
// 1. strstr(String,character)
// 2. stristr() 
// 3. strtr(String, searching character , replace character)
//     a. Using with Associative array : 
//         $var=["hilla"=>"hi", "warld"=>"Class"];
//         echo strtr("hilla warld",$var);
// 4. substr(String , Integer(index));
// */
// echo strstr("hello","o");
// echo"<br>";
// echo strtr("Hilla Warld","ia","eo");
// echo"<br>";

// $var=["hilla"=>"hi", "warld"=>"Class"];
// echo strtr("hilla warld",$var); //hi Class
// echo "<br>";

// echo substr("hello world",3);//llo world
// echo "<br>";
// echo substr("hello world",-5); //world

// $strg="hello everyone this is prashant.";
// // echo"<br>"."hello";
// print_r(str_split($strg));//Array ( [0] => h [1] => e [2] => l [3] => l [4] => o [5] => [6] => e [7] => v [8] => e [9] => r [10] => y [11] => o [12] => n [13] => e [14] => [15] => t [16] => h [17] => i [18] => s [19] => [20] => i [21] => s [22] => [23] => p [24] => r [25] => a [26] => s [27] => h [28] => a [29] => n [30] => t [31] => . )
// echo"<br>";
// echo"<br>";
// print_r(str_split($strg,3)); //Array ( [0] => hel [1] => lo [2] => eve [3] => ryo [4] => ne [5] => thi [6] => s i [7] => s p [8] => ras [9] => han [10] => t. )


?>