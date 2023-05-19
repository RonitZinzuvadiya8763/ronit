<?php
  class ParentClass {
    public function vehicle(){
      //return $this->vehicle();
      echo "I am Vehical.<br>";
    }

    protected function vehicle1(){
      echo "I am Vehical1.<br>";
    }

    private function vehical2(){
      echo "I am Vehical2.<br>";
    }
  }

  class ChildClass extends ParentClass{
  }
  
  //public
  // $pub = new ParentClass;
  // $pub->vehicle();

  //protected
  // $ppro = new ParentClass;
  // $ppro->vehicle();

  // $cpro = new ChildClass;
  // $cpro->vehicle();
  
  //private
  // $ppri = new ParentClass();
  // $ppri->vehicle2(); // private function
  
  $cpri = new ChildClass;
  $cpri->vehicle(); // public function
  
?>