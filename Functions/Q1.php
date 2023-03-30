<?php
declare (strict_type=1);

function convert(string $var){
    print_r(count_chars($var,3));
    // return str_split($var1);
}

$data =convert("Rahul");
print_r($data);
?>
