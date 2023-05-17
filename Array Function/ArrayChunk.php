<?php

    //array_diff()

    $array = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "<pre>";
    print_r(array_chunk($array, 2));

?>

<!-- Example: 2 splits an array into chunks of new arrays without function -->

<?php

    $array = ["35","37","43","30","24","47","27"];

    $chunksize = 2;
    $splitArray = [];

    $subArrayIndex = 0;

    for($i = 0; $i < count($array); $i++) { // 7 
    
        if (!isset($splitArray[$subArrayIndex])) {
            $splitArray[$subArrayIndex] = [];
        }

        $splitArray[$subArrayIndex][] = $array[$i]; // add element to current subarray(splitArray) $splitArray[35];

        if (count($splitArray[$subArrayIndex]) == $chunksize) { // check value in splitArray is equal to chunksize if yes then increase index of sub array for create new sub array.
            $subArrayIndex++;
        }
    }
    echo "<pre>";
    print_r($splitArray);
    exit;
?>