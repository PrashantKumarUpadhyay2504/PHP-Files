<?php
//  oops for databases
// $con= new mysqli();
// $con->query();

class con_est{
    public $con;
    function __construct($usernam,$uname,$pass,$db){
        $this->con=mysqli_connect($usernam,$uname,$pass,$db);
    }
}
$obj=new con_est('localhost','root','','sectiong');
?>