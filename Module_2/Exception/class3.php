<?php
//error_reporting(0);
echo "<form action='$_SERVER[PHP_SELF]' method='post'>
Enter the value of Numerator<input type='number' name='numerator'>
<br>Enter the value of Denominator
<input type='number' name='denominator'> 
<br><input type='submit' name='result' value='output'><br></form>";

if($_SERVER['REQUEST_METHOD']=='POST')
{
$numerator = $_POST['numerator'];
$deno = $_POST['denominator'];
class DivisionByzerooo extends Exception{
function errOrMessage(){
return $this->getMessage();
}
 
}
try{
if($deno==0)
{
throw new DivisionByzerooo("Provide valid number except 0");
}
}catch (DivisionByzerooo $eg)
{
echo $eg->getMessage();
}
}

if($_SERVER['REQUEST_METHOD']=='POST') {
$numerator = $_POST['numerator'];
$deno = $_POST['denominator'];

class NumberisGreaterException extends Exception
{
function errorMessage()
{
return $this->getMessage();
}
}

class NumberisNegativeException extends Exception
{
function errorMessage()
{
return $this->getMessage();
}
}

try {
if ($deno == 0) {
throw new Exception('Provide a valid denominator except 0');

}
if ($deno > $numerator) {
throw new NumberisGreaterException("provide a number less than or equal to $numerator");
}
if ($deno < 0) {
throw new NumberisNegativeException("Provide a valid number greater than 0");
}


echo $numerator / $deno;
} catch (Exception $e) {
echo $e->getMessage();
} catch (NumberisNegativeException $e) {
echo $e->getMessage();
} catch (NumberisGreaterException $e) {
echo $e->getMessage();
}
}
?>