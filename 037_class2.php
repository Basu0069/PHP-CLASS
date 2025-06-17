<?php
class student{

    public $regno,$name;
    public function get_details()
    {
        $regno=23;
        $name="Angad";
        echo $regno,$name;

    }
}
class derived extends student{
    public function get_details(){
        echo "I am in derived class";
    }
}




$obj=new derived();
$obj->get_details();


?>