<?php

echo "<br>";

for($data=1 ; $data<=5; $data++){
    for($data1=1; $data1<=5; $data1++){
        if($data1 == 5&& $data1 == 3){
            continue;
        }
        echo "$data$data1 ";
    }
}

?>
