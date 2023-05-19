<?php
class ParentClass
{
    public function vehicle()
    {
        echo "I am Vehical.<br>";
    }

}

class ChildClass extends ParentClass
{
    // public function callParent()
    // {
    //     return $this->vehicle();
    // }
}

// Public
$ppro = new ParentClass;
$ppro->vehicle();

$cpro = new ChildClass;
$cpro->vehicle();
// $cpro->callParent();
