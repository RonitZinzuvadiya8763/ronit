<?php
class ParentClass
{
  protected function vehicle()
  {
    echo "I am Vehical From Protected.<br>";
  }
}

class ChildClass extends ParentClass
{
  public function callParentProtectedFunction()
  {
    return $this->vehicle();
  }
}

// Protected
// $ppro = new ParentClass;
// $ppro->vehicle();
//  // Unable to call protected method in same class

// $cpro = new ChildClass;
// $cpro->vehicle();
 // Unable to call protected method directly using child object you need to create method in child class and call parent class protected method.
$cpro = new ChildClass;
$cpro->callParentProtectedFunction();