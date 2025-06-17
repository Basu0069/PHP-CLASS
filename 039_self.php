<?php
class A {
    public static $a =0;
    public static function inc(){
        self::$a++;
    }

public function display(){
    echo self::$a;
}


}
$obj= new A();
A::inc();
A::inc();
$obj->display();

?>