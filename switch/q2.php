<!-- WA PHP Script having one string data $data="brownfox jumps over the lazy black dog " we have to perform the following operation as per the 

a) length of string is > 10 charater and < =22 character split given string in to an array using white space .
b) if length is >22 character and <=30  swap string the "black" to "brown"
c) length is >30 and <=35 character then replace the word "lazy" to "acting".
d)if length is >35 character you have to split the string into chunks having 10 character each.

-->

<?php
$data="brown fox black is good  ";

echo strlen($data);
echo"<br>";
switch(strlen($data)>10 && strlen($data) <= 22){
    case 1:
        print_r(str_split($data,1));
        break;
    case 0:switch(strlen($data) >22 && strlen($data) <=30) {
        case 1:
                echo strtr($data,"brown","black");
            break;
        case 0:switch(strlen($data)>30 && strlen($data) <=35){
            case 1:
                echo str_replace("lazy","acting",$data);
                break;
            case 0:
                switch(strlen($data) >35)
                {
                    case 1:
                        echo chunk_split($data,10,"#@");
                    break;
                }
                break;
            }
        break;
    }
    break;
}

?>