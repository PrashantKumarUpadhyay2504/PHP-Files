<?php
// fopen("mydoc_section.txt","w");
// $file_handl=fopen("mydoc_section.txt","w");// only foe write 
// var_dump($file_handl);// file path, fileName, pointer position
// fwrite($file_handl,"hello Class this is prashant");
// fread($file_handl,1); // it gives error.

// $file_handl=fopen("mydoc_section.txt","w+"); // "w+" we can write and read.
// fwrite($file_handl,"hello");
// fread($file_handl,1);

// $file_handl=fopen("mydoc_section.txt","r"); // "r" we can read only.
// fwrite($file_handl,"hello"); // it occurs error.

$file_handl=fopen("mydoc_section.txt","r+");// "r+" we can read and write. 

fwrite($file_handl,"heyy");
echo "<br>".fread($file_handl,4); 

?>