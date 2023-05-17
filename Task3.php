<!-- 
    Q: ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
    A: ["PETER"=>"35","BEN"=>"37","JOE"=>"43"]; 
-->


<!-- Method-1: using function -->
<?php
    
    $array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
    
    $newArray = array();

    // convert key uppercase
    foreach ($array as $key => $value) {
        $newKey = "";
        // echo "demo";
        for ($i = 0; $i < strlen($key); $i++) {
            $char = substr($key, $i, 1); // ("Peter",0,1) // return P
            $char = strtoupper($char);
            $newKey .= $char;
        }
        $newArray[$newKey] = $value;
        // $upper_key = strtoupper($key);
        // $upper_keys[] = $upper_key;
    }
    
    echo "Using Function";
    echo "<pre>";
    print_r($newArray);

?>

<!-- Methos-2 without function -->
<?php

    $array = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

    $new_array = array();

    foreach ($array as $key => $value) {
        $new_key = "";
        for ($i = 0; $i < strlen($key); $i++) {
            $char = $key[$i];
            if ($char >= 'a' && $char <= 'z') {
                $char = chr(ord($char) - 32); // convert lowercase letter to uppercase ASCII code
            }
            $new_key .= $char;
        }
        $new_array[$new_key] = $value; // add key-value pair to new array
	}

	echo "Without Function";
	echo "<pre>";
	print_r($new_array);

?>
