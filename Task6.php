<!-- 
    Q:["35","37","43","30","24","47","27"];
    A:Create array with 3(n) values like [ ["35","37","43"], ["30","24"]] using function 
-->

<!-- Method-1: using function -->

<?php
    
    $original_array = ["35","37","43","30","24","47","27"];
    
    $new_array = array_chunk($original_array, 3);
    
    echo "<pre>";
    print_r($new_array);
    
?>

<!-- Method-2: using for loop -->

<?php

    $myArray = ["35", "37", "43", "30", "24", "47", "27"];

    $newArray = array();
    $subArray = array();

    for ($i = 0; $i < count($myArray); $i++) {
        array_push($subArray, $myArray[$i]);
        if (count($subArray) == 3) {
            array_push($newArray, $subArray);
            $subArray = array();
        }
    }

    // Add remaining elements if any here 27 will remain
    if (count($subArray) > 0) {
        array_push($newArray, $subArray);
    }
    
    echo "<pre>";
    print_r($newArray);

?>