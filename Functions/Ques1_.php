 <!-- WA PHP Script having a func which reads a string value in the execution function you have change the string into array 
 and return given array in ascending order. */ -->

 <!--WA PHP Script  to check the given is adom or not using function as an argument 
eg:  
        12-> square(12)=144 -> rev(144)=441 -> sq_root(441)=21-> then if(12==21) then "Adom" else "Not"
-->
<!-- WA PHP Script which execute are loop statement starting value upto the ending value inside the working loop 
you have to diplay the counter digits in the given formation 
if the counter is multiple of 3 then display nitish instead of this value , 
if the counter is multiple 5 then display "Kumar"    -->


<?php

for($count=1;$count<=20; $count++){
        if($count%3==0){
                echo"nitish"."<br>";
        }elseif($count%5==0){
                echo"Kumar"."<br>";
        }elseif($count%3==0 && $count%5==0){
                echo"nitish kumar"."<br>";
        }else{
                echo"__"."<br>";
        }
}

?>