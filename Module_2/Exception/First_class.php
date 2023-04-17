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

class myException extends Exception{
    function message(){
        echo "Non zero Value Required";
    }
}
 try{
    if($deno== 0){
        throw new myException();
    }else{
        echo $num/$deno;
    }
 }
 catch(myException $obj){
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