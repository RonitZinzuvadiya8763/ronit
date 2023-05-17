<!-- 
    Q: ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
    A: ["PETER","BEN","JOE"]; 
-->

<?php

    $array = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

    $upper_keys = array();

    foreach ($array as $key => $value) {
        $upper_keys[] = strtoupper($key);
        //$upper_keys[] = $upper_key;
    }
    
    echo "<pre>";
    print_r($upper_keys);

?>