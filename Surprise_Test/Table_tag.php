<?php


echo"<table style='border:2px solid black; background-color:bisque'>";

for($start=2 ; $start<=20; $start++){
    echo"<tr>";
    for($cnt=1 ; $cnt<=10 ; $cnt++){
        $res=$start*$cnt;
        echo" <td style='border:2px solid black; background-color:aquamarine;' align='center'>$start x $cnt= $res<br></td>";
    }
    echo"</tr>";
    
}
?>


