<?php
  class ParentClass {
    private function welcome(){
      echo "Parent Class Called<br>";
    }
  }

  class ChildClass extends ParentClass{
    // public $age = 20;
    function show(){
      return $this->welcome();
      // echo "Child Class Called<br>";
    }
  }
  
  $obj = new ChildClass;
  $obj->welcome();
  $obj->show();
  echo '<br>';
  
  // $obj1 = new ParentClass;
  // $obj1->welcome();
?>