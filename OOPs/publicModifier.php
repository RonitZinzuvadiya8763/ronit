<?php
  class ParentClass {
    public $name = "Ronit"; 
    function welcome(){
      echo "Parent Class Called";
    }
  }

  class ChildClass extends ParentClass{
    public $age = 20;
    function show(){
      echo "Child Class Called<br>";
    }
  }

  $obj = new ChildClass;
  echo $obj->age;
  echo $obj->$name;
  echo "<br>";
  $obj->show();
  $obj->welcome();
?>