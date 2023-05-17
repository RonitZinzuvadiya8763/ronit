<!-- 
    Q:[35, "abc", -43, 30, 24, "jck", 27, -5];
    A:["abc", -43,"jck",-5]
      [35,30, 24, 27]
-->

<?php

    $original_array = [35, "abc", -43, 30, 24, "jck", 27, -5];

    $string_and_negative_array = array(); // for store string and nagetive value
    $positive_array = array(); // for store positive value

    foreach ($original_array as $value) //ex: 35 as value
    {
        if (is_string($value) || $value < 0) // check is_string(35) || 35 < 0 [condition false]
        {
            $string_negative_array[] = $value;
        } else 
        {
            $positive_array[] = $value; // store 35 in $positive array
        }
    }

    echo "<pre>";
    
    echo "Array for string and nagetive value s: \n\n";
    print_r($string_negative_array); //print string and nagetive value

    echo "<br>";

    echo "Array for positive values: \n\n";
    print_r($positive_array); //print positive value
    
?>