<!-- 
    Q:['mmm', ["35", "37", ['23'], ['90', ['569', ['96']]]], ["43", "30"], ["24", "47"], ["27"]];
    A: sort arrays into single array 
-->

<!-- Method:1 Using in-built function -->

<?php

    $arr = ['mmm', ["35", "37", ['23'], ['90', ['569', ['96']]]], ["43", "30"], ["24", "47"], ["27"]];

    $mergedArr = [];
    
    foreach ($arr as $item) {
        if (is_array($item)) {
            $mergedArr = array_merge($mergedArr, $item);
        } else {
            $mergedArr[] = $item;
        }
    }
    
    echo "<pre>";
    print_r($mergedArr);
    
?>

<!-- Method:2 Using custom function -->

<?php

    $arr = ['mmm', ["35", "37", ['23'], ['90', ['569', ['96']]]], ["43", "30"], ["24", "47"], ["27"]];

    $mergedArr = [];

    function singleArray($array, &$result) {
        foreach($array as $value) {
            if(is_array($value)) {
                singleArray($value, $result);
            } else {
                $result[] = $value;
            }
        }
    }
    
    singleArray($arr, $mergedArr);
    
    echo "<pre>";
    print_r($mergedArr);

?>