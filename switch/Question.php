<!-- WA PHP script to find greatest no. among 4 using switch statement .  -->

<?php
$val1=12;
$val2=34;
$val3=68;
$val4=54;

switch($val1>$val2 && $val1>$val3 && $val1>$val4){
    case 1:
        echo"$val1 is greater than $val2 , $val3 and $val4";
    break;
    case 0:
        switch($val2>$val3 && $val2>$val4){
            case 1: 
                echo"$val2 is greater than $val1 , $val3 and $val4";
            break;
            case 0:
                switch($val3>$val4){
                    case 1: 
                        echo"$val3 is greater than $val1 , $val2 and $val4";
                    break;
                    case 0:
                        echo"$val4 is greater than $val1 , $val2 and $val3";
                    break;
                }
                break;
        }
        break;
        default:
        echo"Invalid Comparision . ";
        break;
    }
?>
