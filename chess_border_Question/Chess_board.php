<!-- Chess Board  -->

<?php
echo"<table style = 'border: 2px solid black; border-collapse:collapse; 'align=center;>";
for($row=1 ; $row<=8 ; $row++){
    echo"<tr>";
    for($col=1 ; $col<=8 ; $col++){
        if(($row+$col)%2==0 && $i!=$j){
            echo"<td style='border:2px solid black; height:70px ; width:70px; background-color:white;'> </td>";
        }
        elseif($i==$j)
        {
            echo"<td style='border:2px solid black; height:70px ; width:70px; background-color:pink;'></td>";
        }else{
            echo"<td style='border:2px solid black; height:70px ; width:70px; background-color:black;'></td>";
        }
    }
    echo"</tr>";
}
echo"</table>";
?>