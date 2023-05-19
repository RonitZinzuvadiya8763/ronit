<?php
class ParentClass
{
  private function vehicle()
  {
    echo "I am Vehical From Private.<br>";
  }

  protected function callPrivateFromParentClass()
  {
   return $this->vehicle();
  }

}

class ChildClass extends ParentClass
{
  public function callParentProtectedFunction()
  {
    return $this->vehicle();
  }

    public function callProtected()
    {
      return $this->callPrivateFromParentClass();
    }
  
}

// Private
// $ppro = new ParentClass;
// $ppro->vehicle();
//  // Unable to call protected method in same class

// $cpro = new ChildClass;
// $cpro->vehicle();

 // Unable to call protected method directly using child object you need to create method in child class and call parent class protected method.
// $cpro = new ChildClass;
// $cpro->callParentProtectedFunction();

// $ppro = new ParentClass;
// $ppro->callPrivateFromParentClass();

$child = new ChildClass;
$child->callProtected();