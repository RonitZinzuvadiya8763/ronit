<!-- 
    Q: ["35","37","43","30","24","47","27"];
    A: lower to upper;
    A: upper to lower;
    A: lower and upper using function;
-->

<!-- Method-1: lower to upper Without function -->

<?php

    $myArray = ["35","37","43","30","24","47","27"];
    
    echo "Lower to Upper Without Function: ";
    $arrlength = count($myArray);

    for ($i = 0; $i < $arrlength; $i++) {
        for ($j = $i + 1; $j < $arrlength; $j++) {
            if ($myArray[$i] > $myArray[$j]) 
            {
                $temp = $myArray[$i];
                $myArray[$i] = $myArray[$j];
                $myArray[$j] = $temp;
            }
        }
    }

    echo "<pre>";
    print_r($myArray);
    
?>

<!-- Method-2: upper to lower Without function -->

<?php

    $myArray = ["35","37","43","30","24","47","27"];
    
    echo "Upper to Lower Without Function: ";
    $arrlength = count($myArray); // 7

    for ($i = 0; $i < $arrlength; $i++) {
        for ($j = $i + 1; $j < $arrlength; $j++) {
            if ($myArray[$i] < $myArray[$j]) 
            {
                $temp = $myArray[$i];
                $myArray[$i] = $myArray[$j];
                $myArray[$j] = $temp;
            }
        }
    }

    echo "<pre>";
    print_r($myArray);
    
?>

<!-- Method-3: using function -->

<?php    
    
    $myArray = ["35","37","43","30","24","47","27"];
    sort($myArray);
    
    echo "Lower to Upper Using Function: ";
    $arrlength = count($myArray);
    
    echo "<pre>";
	print_r($myArray);

?>

<?php 

    $myArray = ["35","37","43","30","24","47","27"];
    rsort($myArray);
  	
    echo "Upper to Lower Using Function: ";
    $arrlength = count($myArray);
    
    echo "<pre>";
    print_r($myArray);
    
?>