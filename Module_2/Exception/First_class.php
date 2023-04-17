<!-- 
Bug:
1 handle : Exception . it is unchecked error;
 
2 Unhandle : Error . it is checked Error 
 



 -->

 <?php
//  error_reporting(0); // it set true or '1' by defaultly 

 $num=10;
 $deno=0;



//  echo $num/$deno;

 try{
    if($deno== 0){
        throw new Exception("Non Zero Value Required <br>");
    }else{
        echo $num/$deno;
    }
 }
 catch(Exception $obj){
    echo"<p> fatal error</p>";
    echo $obj-> getMessage();
    echo " <b>on Line </b>";
    echo $obj->getLine();
    echo $obj->getFile();
    print_r($obj-> getTrace());
    echo $obj-> getTraceAsString();
 }

 finally{
    echo "hey";
 }
 ?>