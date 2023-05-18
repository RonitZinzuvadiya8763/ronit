<?php
    class ParentClass{
        function sayhello(){
            echo "Hello From Rankway";
            echo "<br>";
        }
    }

    trait ThirdClass{
        function saybye(){
            echo 'Bye';
            echo '<br>';
        }
    }

    class ChildClass extends ParentClass{
        use ThirdClass;
        function message(){
            echo 'Message: Good Morning';
            echo '<br>';
        }        
    }

    $parentObj = new ChildClass();
        echo "<br>";
        echo $parentObj->sayhello();
        echo $parentObj->message();
        echo $parentObj->saybye();