<!-- Break :-->

<?php
// for($data=1 ; $data<=20; $data++){
//     for($data1=1; $data1<=20; $data1++){
//         if($data1 == 5){
//             break;
//         }
//         echo "$data$data1 ";
//     }
//     echo"<br>";
// }
//  echo "<br>";

// for($data=1 ; $data<=20; $data++){
//     for($data1=1; $data1<=20; $data1++) {
//         if($data1 == 5 or $data1 == 3){
//             break;
//         }
//         echo "$data$data1 ";
//     }
//     echo"<br>";
// }


echo "<br>";

for($data=1 ; $data<=20; $data++){
    for($data1=1; $data1<=20; $data1++){
        if($data1 == 5){
            break 2; // terminate from all for loop .
        }
        echo "$data$data1 ";
    }
    echo"<br>";
}
?>