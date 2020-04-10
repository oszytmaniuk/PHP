<?php


class Z{
    public $a = "zoo";
}
class Y extends Z{
    public $a = "yoo";
}
class X extends Y{
    
}

$obj = new X();
echo $obj->a;