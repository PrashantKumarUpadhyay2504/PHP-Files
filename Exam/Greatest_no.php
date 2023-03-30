<?php

$a=344;
$b=9000;
$c=87455;
$d=787;

$res=$a>$b && $a>$c && $a>$d?$a:($b>$c && $b>$d ? $b:($c>$d?$c:$d));
echo"Greater is $res";

?>