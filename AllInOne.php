<?php

    $array = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    $upper_keys = array();

    foreach ($array as $key => $value) {
        $upper_keys[] = strtoupper($key);
        //$upper_keys[] = $upper_key;
    }
    
    echo "<pre>";
    echo "Task 1: ";
    echo "<br><br>";
    print_r($upper_keys);
    exit;

?>
<?php

    $array = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    $arrayValues = array();

    foreach ($array as $key => $value) {
        $arrayValues[] = $value;
    }

    echo "<pre>";
    echo "Task 2: ";
    echo "<br><br>";
    print_r($arrayValues);

?>

<?php
    
    $array = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    
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
    
    echo "Task 3.1: Using Function";
    echo "<pre>";
    
    print_r($newArray);

?>

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

	echo "Task 3.2 : Without Function";
	echo "<pre>";
	print_r($new_array);

?>

<?php
    
    $myArray = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    
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
    
    echo "Task 4.1 : Using Function";
    echo "<pre>";
    print_r($newArray);
    
?>

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
	
    echo "Task 4.2 : Without Function";
	echo "<pre>";
	print_r($new_array);

?>

<?php

    $myArray = array("35","37","43","30","24","47","27");
    
    echo "Task 5.1: Lower to Upper Without Function: ";
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

<?php

    $myArray = array("35","37","43","30","24","47","27");
    
    echo "Task 5.2: Upper to Lower Without Function: ";
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

<?php    
    
    $myArray = array("35","37","43","30","24","47","27");
    sort($myArray);
    
    echo "Task 5.3: Lower to Upper Using Function: ";
    $arrlength = count($myArray);
    
    echo "<pre>";
	print_r($myArray);

?>

<?php 

    $myArray = array("35","37","43","30","24","47","27");
    rsort($myArray);
  	
    echo "Task 5.4: Upper to Lower Using Function: ";
    $arrlength = count($myArray);
    
    echo "<pre>";
    print_r($myArray);
    
?>

<?php
    
    $original_array = ["35","37","43","30","24","47","27"];
    
    $new_array = array_chunk($original_array, 3);
    
    echo "Task 6.1: Using function";
    echo "<pre>";
    print_r($new_array);
    
?>

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
    
    echo "Task 6.2: Without function";
    echo "<pre>";
    print_r($newArray);

?>

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

    echo "Task 7:";
    
    echo "<pre>";
       
    echo "Array for string and nagetive value s: \n\n";
    print_r($string_negative_array); //print string and nagetive value

    echo "<br>";

    echo "Array for positive values: \n\n";
    print_r($positive_array); //print positive value
    
?>


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
    
    echo "Task 8:";

	echo "<pre>";
    print_r($mergedArr);

?>

<?php

    $arr = array(
        array(
        'id' => 5698,
        'first_name' => 'Peter',
        'last_name' => 'Griffin',
        ),
        array(
        'id' => 4767,
        'first_name' => 'Ben',
        'last_name' => 'Smith',
        ),
        array(
        'id' => 3809,
        'first_name' => 'Joe',
        'last_name' => 'Doe',
        )
        );

    $last_names = array(); // initialize an empty array

    foreach ($arr as $value) {
        $last_names[] = $value['last_name']; // add last name to the array
    }
    
    echo "Task 9:";
    echo "<pre>";
    print_r($last_names); // print the array of last names

?>

<?php

    $keys = ['id', 'firstname', 'lastname'];
    $values = [[3, 4, 5], [50, 60, 70], [15, 45, 85]];

    $result = [];

    foreach ($values as $value) {
      $temp_array = [];
      foreach ($keys as $index => $key) {
          $temp_array[$key] = $value[$index];
      }
      $result[] = $temp_array;
    }

	echo "Task 10:";
    echo "<pre>";
    print_r($result);

?>