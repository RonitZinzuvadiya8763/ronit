<!-- 
    Q: ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
    A: ["35","37","43"]; 
-->

<?php

    $array = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

    $arrayValues = array();

    foreach ($array as $key => $value) {
        $arrayValues[] = $value;
        //$upper_keys[] = $upper_key;
    }

    // foreach ($array as $value) {
    //     $arrayValues[] = $value;
    // }
    echo "<pre>";
    print_r($arrayValues);

?>