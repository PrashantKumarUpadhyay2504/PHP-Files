<?php
$file_handle=fopen("doc.txt", "w")
if(fwrite($file_handle,"Welcome to learn file handling in php",100))
{
    echo"data write done";
}else{
    echo"Unable to Write."
}
?>