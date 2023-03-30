<?php
// Conditional Or Decision making Statement.

// 1. if Statement :
// eg.

echo"Hello";
if(5)
{
    echo"Piyush";
}
echo"bye";

// 2. Nest if (if(if()))
// 3. Ladder if


// Looping in PHP:
//1. while()
//2. Do..while()
//3. for

// echo"<table style='border:2px solid red'>";

// for($count = 1; $count<=100; $count++){
//     echo"<tr>";
//     echo"<td style='border:2px solid; height'>$count</td>";
//     echo"</tr>";
// } 
// echo"</table>";


// count 1 to 100 

echo"<table style='border: 2px solid black;background-color:aqua' align=center>";
$val=1;
for($i=0 ; $i<10; $i++){
    echo"<tr>";
    for($j=0 ; $j<10; $j++){
        echo"<td style = 'border: 2px solid black;background-color : white'>$i$j</td>";
        $val++;
    }
    echo"</tr>";
}
echo"</table>";

// for($i=1 ; $i<10 ; $i++){
//     echo
// }
?>
