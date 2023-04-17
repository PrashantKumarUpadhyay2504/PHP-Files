<?php
// // writing the file by the code . 
// $file_handle=fopen("doc.txt", "w");
// if(fwrite($file_handle,"Welcome to learn file handling in php"))
// {
//     echo"data write done";
// }else{
//     echo"Unable to Write.";
// }
// fclose($file_handle);


// // reading the file 
// $file_handle=fopen("doc.txt", "r");
// $file_size=filesize("doc.txt");
// $data= fread($file_handle, $file_size);
// echo str_replace("\n","<br>",$data);
// fclose($file_handle);

// fget () working : 
// $file_handle=fopen("doc.txt", "r");
// echo fgets($file_handle);
// echo fgets($file_handle);
// echo fgets($file_handle);
// fclose($file_handle);

// // feof()
// $file_handle=fopen("doc.txt", "r");
// while(!feof($file_handle)){
//     echo fgets($file_handle);
//     echo"<br>";
// }


// 
$file_handle=fopen("doc.txt", "r");
while(!feof($file_handle)){
    $data = fgetc($file_handle);
    if($data ==='\n'){
        $data="<br>";
    }
    echo $data;
}



// //  file_exists()
// $file_handle=fopen("doc.txt", "r");
// if(file_exists($file_handle)){
//     echo"1";
// }else{
//     echo "2";
// }


?>