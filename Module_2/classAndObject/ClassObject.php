<?php
/*Requirements : 
1. security

*/

// class stu{
//     public $name="akash";

//     private $wallet_amt=56457;

//     public $isAlive = true;
//     public function set(){
//         $this->name='rohan';
//     }
// }
// $name = new stu;
// $name_two =new stu();
// $name_three =new stu; 
// $name_two->set();
// echo $name->name;
// echo $name_two->name;
// echo $name_three->name;


class building{
    
    public $wall_color="white";

    protected $floor="Waterfall";

    private $money="nill";

    public function __destruct(){
        echo this->$money;
    }
}
$obj=new ReflectionProperty("building","money");
$obj->setAccessible(true); // it takes false by defaultly. 
echo $obj->getValue();


// 
?>