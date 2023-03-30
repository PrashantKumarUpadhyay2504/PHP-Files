<?php

echo"<table style='border: 2px solid black; border-collapse:collapse;'>";
for($i=1; $i<=8; $i++){
    echo"<tr>";
    for($j=1; $j<=8 ; $j++){
        if(($i+$j)%2==0 && $i!=$j){
            echo"<td style='border: 2px solid black; height:70px; width:70px; background-color:white; border-collapse:collapse;'></td>";
        }elseif($i==$j){
            echo"<td style='border: 2px solid black; height:70px; width:70px; background-color:pink;border-collapse:collapse;'></td>";
        }else{
            echo"<td style='border: 2px solid black; height:70px; width:70px; background-color:black;border-collapse:collapse;'></td>";
        }
    }
    echo"</tr>";
}
echo"</table>";
?>