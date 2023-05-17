<!-- 
    Q: ["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
    A: ["peter"=>"35","ben"=>"37","joe"=>"43"]; 
-->


<!-- Method-1: using function -->
<?php
    
    $myArray = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
    
    $newArray = array();

    // convert key lowercase
    foreach ($myArray as $key => $value) {
        $newKey = "";
        // echo "$key";
        for ($i = 0; $i < strlen($key); $i++) {
            $char = substr($key, $i, 1); // ("Peter",0,1) // return p
            $char = strtolower($char); // convert string in lower case
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

<!-- Method-2 without function -->
<?php

    $array = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

    $new_array = array();

    foreach ($array as $key => $value) {
        $new_key = "";
        for ($i = 0; $i < strlen($key); $i++) {
            $char = $key[$i];
            if ($char >= 'A' && $char <= 'Z') {
                $char = chr(ord($char) + 32); // convert lowercase letter to uppercase ASCII code
            }
            $new_key .= $char;
        }
        $new_array[$new_key] = $value; // add key-value pair to new array
	}
	
    echo "Without Function";
	echo "<pre>";
	print_r($new_array);

?>
