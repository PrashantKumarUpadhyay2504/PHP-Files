<!-- Practice -->

<?php
$var="Prashant's Ku@mar# Upadhyay";
echo addcslashes($var,"Kum");
echo"<br>";
echo addslashes($var);
echo"<br>";
echo bin2hex("var");
echo"<br>";
echo chop($var);
echo"<br>";
echo chop($var,"yay");
echo"<br>";
echo chr(65);
echo"<br>";
echo chunk_split($var , 2, " ");
echo "<br>";
echo convert_uuencode("Piyush");
echo "<br>";
echo convert_uudecode("&4&EY=7-H `");
echo "<br>";
print_r(count_chars($var,1)); // displays only occured character from string in Array.
echo"<br><br>";
print_r(count_chars($var,2));
echo"<br><br>";
print_r(count_chars($var,3));// displays the string character in ASCII Value order.

echo"<br><br>";
print_r(explode('a',$var));
echo"<br><br>";
print_r(implode(",",['h','e','l','l','o']));
echo"<br><br>";
echo join(" ",['w','o','r','l','d']);
echo"<br><br>";
echo md5("Hello");
echo"<br><br>";
echo sha1('Hello');

?>