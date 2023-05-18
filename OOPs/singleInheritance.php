<?php
    class ParentClass{
        function welcome(){
            echo "hi";
            echo "<br>";
        }
    }

    class ChildClass extends ParentClass{
        function message(){
            echo 'hello ronit';
        }        
    }

    $parentObj = new ChildClass();
        echo "<br>";
        echo $parentObj->welcome();
        echo $parentObj->message();
