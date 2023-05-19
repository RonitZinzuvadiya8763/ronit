<?php
class ParentClass
{
    public function vehicle()
    {
        echo "I am Vehical From Public.<br>";
    }

}

class ChildClass extends ParentClass{}

// Public
$ppro = new ParentClass;
$ppro->vehicle();

$cpro = new ChildClass;
$cpro->vehicle();
