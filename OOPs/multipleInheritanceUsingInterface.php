<?php
    class ParentClass{
        function sayhello(){
            echo "Hello From Rankway";
            echo "<br>";
        }
    }

    interface MyFirstInterface{
        function speakloud();
        function saybye();
    }

    class ChildClass extends ParentClass implements MyFirstInterface{
        function message(){
            echo 'Message: Good Morning';
            echo '<br>';
        }      
        
        function saybye(){
            echo "Bye";
            echo "<br>";
        }

        function speakloud(){
            echo "speakloud called..";
            echo "<br>";
        }
    }     

    $parentObj = new ChildClass();
        echo "<br>";
        echo $parentObj->sayhello();
        echo $parentObj->message();
        echo $parentObj->speakloud();
        echo $MyFirstInterface->saybye();
?>