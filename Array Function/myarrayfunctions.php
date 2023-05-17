<!-- Without Functions -->

<!-- Example-25: array_rand() using class and fuction -->

<?php
    class Task
    {
        function random($array)
        {
            $num = rand(1, count($array));
            return $array[$num - 1];
        }
    }

    $array = ["red", "green", "blue", "yellow", "brown"];
    $taskObj = new Task();
    $result = $taskObj->random($array);

    echo $result;
    echo '<br>';

    // $array = ["abc", "xyz", "ppp", "qqq", "hhjhj", "OOO", "ppp"];
    // $result = random($array);
    // echo $result;
    // echo '<br>';

    exit;

?>

<!-- Example-25: array_rand() using foreach -->

<?php

    $array = ["red","green","blue","yellow","brown"];

    function custom_array_rand($array) {
        $keys = array();
        foreach ($array as $key => $value) {
            $keys[$key] = $value;
        }
        $randomKey = $keys[mt_rand(0, count($keys) - 1)]; // generate random integer
        return $randomKey;
    }

    $randomKey = custom_array_rand($array);

    echo "array_rand() using foreach <br><br>";
    echo $randomKey;
    exit;

?>

<!-- Example-24: array_reverse() using for -->

<?php

  $array = [1, 2, 3, 4];
  $size = sizeof($array); // 4

  for($i=$size-1; $i>=0; $i--){ // 3; 3>=0; 3--
      echo $array[$i]; // return 4
  }
  exit;

?>

<!-- Example-23: array_push() using foreach -->
<!-- Insert element in the end -->

<?php
 
    $array = ["red","green"];
    $newvalue = ["blue","grey"];

    foreach ($newvalue as $value) // 0 => blue
    {
        $array[] = $value;            
    }
    echo "<pre>";
    print_r($array);
    exit;

?>

<!-- Example-21: array_product() using for -->
<!-- Product of an array values (5*5*6*8) -->

<?php

    $array = [5,5,6,8];
    $n = count($array); // 4
    function product($array, $n) // $array, $n = 4
    {
        $result = 1;
        for ($i = 0; $i < $n; $i++) // 0 < 4
        {
            $result = $result * $array[$i]; // 1*5 so result = 5
        }
        return $result;
    }

    $output = product($array, $n); // $array , 4
    print($output);
    exit;

?>

<!-- Example-20: array_pop() using foreach -->
<!-- Delete last element from array -->

<?php
 
    $array = ["red","green","blue"];

    $pop_array= (count($array) - 1); // 2

    //$element = 0
    //print_r($array);

        foreach ($array as $key => $value) // 0 => red
        {
            if($key != $pop_array){ // 0 = 2
                $newarray[$key] = $value; // 0 red
            }
        }
    echo "<pre>";
    print_r($newarray);
    exit;

?>

<!-- Example-19: array_pad() using foreach -->
<!-- The array_pad() function inserts a specified number of elements, with a specified value, to an array. -->

<?php

    $array = array(1, 2, 3);

    $total_element = 5;
    $value = 5;

    function my_custom_array_pad($array, $size, $value) { // $size = 5, $value = 5
        $array_size = count($array); // 3
        $diff = abs($size - $array_size); // abs(5 - 3) = -2
        if ($diff <= 0) { // -2 <= 0
            return $array;
        }
        if ($size > $array_size) { // 5 > 3
            for ($i = $array_size; $i < $size; $i++) { // $i=3; $i < 5; $i++
                $array[$i] = $value; // $array[3] = 5;
            }
        } else {
            for ($i = $array_size - 1; $i >= $size; $i--) { // $i = 3-1; 2 >= 3
                unset($array[$i]);
            }
        }
        return $array;
    }

    $padded_array = my_custom_array_pad($array, $total_element, $value); // array,5,5
    echo "<pre>";
    print_r($padded_array);
    exit;

?>

<!-- Example-18: array_merge() using foreach -->

<?php

    $array1 = ['One', 'Two', 'Three'];
    $array2 = ['Four', 'Five', 'Six'];
    $array3 = ['Seven', 'Eight', 'Nine'];
    $a2 = ['Seven', 'Ten'];

    function arrayMerge(array $arrays) {
        $mergeArray = [];

        foreach ($arrays as $array) {
            foreach($array as $finalArray) {
                $mergeArray[] = $finalArray;
            }
        }

    return $mergeArray;
    }

    $output = arrayMerge([$array1, $array2, $array3, $a2]);
    echo "<pre>";
    print_r($output);
    exit;

?>

<!-- Example-18: array_merge() using for loop -->

<?php

    $array1 = ['1','2','3','4','5'];
    $array2 = ['a','b','c','d','e'];
    
    $count = count($array2); // count number of element in $b array // store 5

        for($i = 0; $i < $count; $i++) // 0 < 5
            {
                $array1[] = $array2[$i];  // each element from $b[] is store inside the $a[] ]// each element  1 by 1 store inside the array $a[]
            }
    echo "<pre>";
    print_r($array1); // print array1 with new values
    exit;

?>

<!-- Example-17: array_map() -->
<!-- The array_map() function sends each value of an array -->

<?php

    $numbers = [1,2,3,4,5];

    $result = [];

    foreach ($numbers as $number) { // 1, 2, 3, 4, 5
        $result[] = $number * $number; // 1, 4, 9, 16, 25
    }

    echo "<pre>";
    print_r($result);
    exit;

?>

<!-- Example-17: array_keys() -->
<!-- Return all keys from array -->

<?php

    $array = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

    foreach ($array as $key => $value) { //Peter => 35, Ben => 37, Joe => 43
        $key_collection[] = $key; // store Peter in $key_collection[]
    }
    
    echo "<pre>";
    echo "array_keys()";
    echo "<br><br>";
    print_r($key_collection);
    exit;

?>

<!-- array_key_exist() -->

<?php

    $array = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
    $checkkey = ['Peter'];

    foreach ($array as $key => $value) { //Peter => 35, Ben => 37, Joe => 43
        if($array != ""){
            if(in_array($key, $checkkey)){
                echo "key exist";
            }
        }         
    }
    
    echo "<pre>";
    
    echo "<br><br>";
   // print_r($key_collection);
    exit;

?>

<!-- Example-16: array_intersect_key() -->

<?php

    //array_intersect_key: compares the keys of two (or more) arrays, and returns the matches.
    // expected output: Array ( [a] => red [b] => green [c] => blue )
    $array1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
    // $array2 = ["a"=>"red","b"=>"green","c"=>"blue"];
    $array2 = ["xa"=>"rexd","b"=>"grexen","c"=>"blue"];

    function custom_array_intersect_key($array1, $array2) {
        $result = [];
        foreach ($array1 as $key => $value) { //a => red
            if (isset($array2[$key])) { 
                $result[$key] = $value; 
            }
        }
        return $result; // return new array
    }
    
    $result = custom_array_intersect_key($array1, $array2);
    print_r($result); // print $result array
    exit;

?>

<!-- Example-15: array_intersect_assoc() -->

<?php

    //array_intersect_assoc: compares the keys and values of two (or more) arrays, and returns the matches.
    // expected output: Array ( [a] => red [b] => green [c] => blue )
    $array1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
    // $array2 = ["a"=>"red","b"=>"green","c"=>"blue"];
    $array2 = ["xa"=>"rexd","b"=>"grexen","c"=>"blue"];

    function custom_array_intersect_assoc($array1, $array2) {
        $result = [];
        foreach ($array1 as $key => $value) { //a => red
            if (isset($array2[$key]) && $array2[$key] === $value) { //check isset and check $array2[a] === red both are true "add key and value in $result array.."
                $result[$key] = $value; // add key and valur to new array
            }
        }
        return $result; // return new array
    }
    
    $result = custom_array_intersect_assoc($array1, $array2);
    print_r($result); // print $result array
    exit;

?>

<!-- Example-14: array_intersect() -->

<?php

    //array_intersect: compares the values of two (or more) arrays, and returns the matches.
    // expected output: Array ( [a] => red [b] => green [c] => blue )
    $array1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
    $array2=["e"=>"red","f"=>"green","g"=>"blue", "h"=>"sky"];
    
    function my_function($array1, $array2) {
        $result = [];
        foreach($array1 as $key1=>$value1) { // a=>red
             // e=>red
                // echo "$value2";
                // exit;
                if(in_array($value1, $array2)) { // red === red
                    $result[$key1] = $value1;
                }
            
        }
        return $result;
    }

    $result = my_function($array1, $array2);
    print_r($result);
    exit;

?>

<!-- Example-13: array_flip() -->

<?php

    $array=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];

    $result=[];

    foreach($array as $key => $value){ //"a"=>"red"
        $result[$value] = $key; // red => a
    }
    echo "<pre>";
    print_r($result);
    exit;

?>

<!-- Example-12: array_fill_keys() -->
<!-- $keys=array("a","b","c","d"); -->
<!-- $a1=array_fill_keys($keys,"blue"); -->
<?php

    echo "Example-12: array_fill_keys()";
    $keys = ["a", "b", "c", "d"];
    $values = "blue";
	$filled_array = [];

    foreach($keys as $value) { // a
    //	print_r($keys);
    //  exit;
    	
        $filled_array[$value] = $values;
       // $hello[$filled_array]; 
       // echo $key;
       // print_r($filled_array);
    }
    echo "<pre>";
    print_r($filled_array);
    exit;

?>

<!-- Example-11: array_fill() -->
<?php

    echo "Example-11: array_fill()";
    $array_fill = [];
    $start = 3;
    $end = 4;
    $increse = 1;
    
    for ($i = $start; $increse <= $end; $i++) {
        $array_fill[$i] = 'blue';
        $increse = $increse+1;
    }
    $myArr = $array_fill;
    echo "<pre>";
    print_r($myArr);
    echo "<br>";
    exit;

?>

<!-- Example-10: array_diff_ukey() -->
<!-- check key and compare -->
<?php

    echo "Example-10: array_diff_ukey()";
    $arr1 = ["a"=>"red","b"=>"green","c"=>"blue"];
    $arr2 = ["a"=>"blue","b"=>"black","e"=>"blue"];

    function myfunction($arr1, $arr2, $callback) {
        $result = array();
        foreach ($arr1 as $key1 => $val1) { // "a" => "red"
            $key_diff = true;
            foreach ($arr2 as $key2 => $val2) {
                if ($key1 == $key2) {
                    $key_diff = false;
                    continue;
                }
            }
            if ($key_diff) {
                $result[$key1] = $val1;
            }
        }
        return $result;
    }

    $result = myfunction($arr1, $arr2, 'strcmp'); // compare keys
    echo "<pre>";
    print_r($result); // Output: Array ( [c] => blue )
    exit;

?>

<!-- Example-9: array_diff_uassoc() --> 
<!-- Pending -->
<!-- if key and value both match no print otherwise print array1-->
<!-- expected output: Array ( [a] => red [c] => blue ) -->
<?php

    echo "Example-9: array_diff_uassoc()";
    $array1 = ["a"=>"red","b"=>"green","c"=>"blue"];
    $array2 = ["d"=>"red","b"=>"green","e"=>"blue"];

    $samekeyandvalue = [];

    foreach($array1 as $key1=>$value1) { //"a"=>"red"
        if (!in_array($key1, $array2)){ 
            $samekeyandvalue[$value1] = $key;
        }
    }
    echo "<pre>";
    print_r($diffKey);
    exit;

?>

<!-- Example-8: array_diff_key() -->

<?php

    echo "Example-8: array_diff_key()";
    $arr1 = ["a"=>"red","b"=>"green","c"=>"blue","f"=>"red"];
    $arr2 = ["a"=>"red","c"=>"blue","d"=>"pink"];

    function custom_array_diff_key($arr1, $arr2) {
        $result = array();
        foreach ($arr1 as $key => $val) {
            if (!array_key_exists($key, $arr2)) {
                $result[$key] = $val;
            }
        }
        return $result;
    }

    $result = custom_array_diff_key($arr1, $arr2);
    echo "<pre>";
    print_r($result); // Output: Array ( [b] => green )
    exit;

?>

<!-- Example-7: array_diff_assoc() on associative array -->

<?php

    echo "Example-7: array_diff_assoc()";
    $array1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","f"=>"hi"];
    $array2 = ["a"=>"red","b"=>"green","c"=>"blue"];

    $diffArray = [];

    foreach ($array1 as $key=>$value) { // d => yellow
        foreach($array2 as $key1=>$value1){
            if (!isset($array2[$key]) && !in_array($value, $array2)) { // check key and value
                $diffArray[$key] = $value;
            }
        }
    }

    echo "<pre>";
    print_r($diffArray);
    exit;

?>

<!-- Example-6: array diff() on simple array-->

<?php

    echo "Example-6: array_diff()";
    $array1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
    $array2 = ["e"=>"red","f"=>"green","g"=>"blue"];

    $diffArray = [];

    foreach ($array1 as $key=>$value) {
        if (!in_array($value, $array2)) {
            $diffArray[$key] = $value;
        }
    }

    echo "<pre>";
    print_r($diffArray);
    exit;

?>

<!-- Example-5: array_count_values() -->

<?php

    echo "Example-5: array_count_values()";
    $array = ["A", "Cat", "Dog", "A", "Dog"];

    $countArray = [];

    foreach ($array as $value) { // A
        if (!isset($countArray[$value])) { // check A is not in $countArray
            $countArray[$value] = 0;
        }
        $countArray[$value]++; // if same value occure it match in countArray value increase by 1. 
    }

    echo "<pre>";
    print_r($countArray);
    exit;

?>

<!-- Example-4: array_combine() -->

<?php

    echo "Example-4: array_combine()";
    $fname = ['mmm', ["35", "37", ['23'], ['90', ['569', ['96']]]], ["43", "30"], ["24", "47"], ["27"]];

    $combineArray = [];

    function singleArray($array, &$result)
    {
        foreach ($array as $value) {
            if (is_array($value)) {
                singleArray($value, $result);
            } else {
                $result[] = $value;
            }
        }
    }

    singleArray($fname, $combineArray);
    echo "<pre>";
    print_r($combineArray);
    exit;

?>


<!-- Example-3: array_column() -->

<?php

    echo "Example-3: array_column()";
    $array = [
        [
            'id' => 5698,
            'first_name' => 'Peter',
            'last_name' => 'Griffin',
        ],
        [
            'id' => 4767,
            'first_name' => 'Ben',
            'last_name' => 'Smith',
        ],
        [
            'id' => 3809,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        ]
    ];

    $lastName = [];

    foreach ($array as $value) {
        $lastName[] = $value['last_name'];
        // echo "<pre>";
        // // echo "$value";
        // print_r($lastName);
        ///  exit;
    }
    echo "<pre>";
    // echo "$value";
    print_r($lastName);
    exit;

?>

<!-- Example-2: array_chunk() -->

<?php

    $array = ["35", "37", "43", "30", "24", "47", "27"];

    $chunksize = 2;
    $splitArray = [];

    $subArrayIndex = 0;

    echo "Example-2: array_chunk() '35','37','43','30','24','47','27'";
    for ($i = 0; $i < count($array); $i++) { // 7 

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

<!-- Example-1: array_change_key_case() -->

<?php

    $array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];

    echo "Example-1: array_change_key_case() <br>";

    foreach ($array as $key => $value) {
        $new_key = "";

        for ($i = 0; $i < strlen($key); $i++) { // Peter

            $char = $key[$i]; //P

            if ($char >= 'a' && $char <= 'z') {
                $char = chr(ord($char) - 32); // convert lowercase letter to uppercase ASCII code
            }
            $new_key .= $char;
            echo "<pre>";
            // print_r($new_key);
        }
        print_r($new_key);
    }
    // echo "Change array key in uppe case: Peter=>35, Ben=>37, Joe=>43];";
    echo "<pre>";
    exit;

?>


<!--------------------------------------------- ending---------------------------------------->




<?php
    function test_odd($var)
    {
        return ($var & 1);
    }

    $a1 = array(1, 3, 2, 3, 4);
    echo "<pre>";
    print_r(array_filter($a1, "test_odd"));
    exit;

?>

<?php

    echo "array_fill_keys";
    $keys = ["a", "b", "c", "d"];
    $a1 = array_fill_keys($keys, "blue");
    echo "<br>";
    echo "<pre>";
    print_r($a1);
    exit;

?>

<!-- Without Functions -->

<!-- Example: 1 change key in uppercase -->


<?php

    $array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];

    $upper_keys = array();

    foreach ($array as $key => $value) {
        $new_key = "";

        for ($i = 0; $i < strlen($key); $i++) { // Peter

            $char = $key[$i]; //P

            if ($char >= 'a' && $char <= 'z') {
                $char = chr(ord($char) - 32); // convert lowercase letter to uppercase ASCII code
            }
            $new_key .= $char;
            echo "<pre>";
            // print_r($new_key);
        }
        print_r($new_key);
    }

    echo "<pre>";
    exit;

?>

<!-- Example: 2 Get value -->

<?php

    $array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];

    $get_values = array();

    foreach ($array as $key => $value) {
        $get_values[] = $value;
    }
    echo "<pre>";
    echo "Task:2 Get Value <br>";
    echo "Without Function: \n\n";
    print_r($get_values);
    exit;

?>

<!--- Array function --->

<?php

    echo "Array functions:<br>";
    echo "-------------------------------------------<br>";
    echo "array_change_key_case";

    $array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
    echo "<pre>";
    print_r(array_change_key_case($array, CASE_UPPER));
    echo "-------------------------------------------";
    exit;

?>

<?php

    echo "array_chunk";

    $array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
    echo "<pre>";
    print_r(array_chunk($array, 2));
    echo "-------------------------------------------";
    exit;

?>

<?php

    echo "array_column";

    $array = [
        ['id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin'],
        ['id' => 4767, 'first_name' => 'Ben', 'last_name' => 'Smith'],
        ['id' => 3809, 'first_name' => 'Joe', 'last_name' => 'Doe']
    ];

    echo "<pre>";
    print_r(array_column($array, 'last_name'));
    echo "-------------------------------------------";
    exit;
    
?>

<?php

    echo "array_combine";

    $fname = ["Peter", "Ben", "Joe"];
    $age = ["35", "37", "43"];

    $c = array_combine($fname, $age);

    echo "<pre>";
    print_r($c);
    echo "-------------------------------------------";
    exit;

?>

<?php

    echo "array_count_values";

    $a = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
    echo "<pre>";

    print_r(array_count_values($a));
    echo "-------------------------------------------";
    exit;

?>

<?php

    echo "array_diff";

    $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
    $a2 = ["e" => "red", "f" => "green", "g" => "blue"];

    $result = array_diff($a1, $a2);
    echo "<pre>";
    print_r($result);
    echo "-------------------------------------------";
    exit;

?>

<?php

    echo "array_diff_assoc";

    $a1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
    $a2 = ["a" => "red", "b" => "green", "c" => "blue"];

    $result = array_diff_assoc($a1, $a2);
    echo "<pre>";
    print_r($result);
    echo "-------------------------------------------";
    exit;

?>

<?php

    echo "array_diff_key";

    $a1 = ["a" => "red", "b" => "green", "c" => "red"];
    $a2 = ["a" => "red", "b" => "green", "d" => "blue"];

    $result = array_diff_key($a1, $a2);
    echo "<pre>";
    print_r($result);
    echo "-------------------------------------------";
    exit;

?>

<?php

    echo "array_diff_uassoc";
    function mycfunction($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = ["a" => "red", "b" => "green", "c" => "blue"];
    $a2 = ["d" => "red", "b" => "green", "e" => "blue"];

    $result = array_diff_uassoc($a1, $a2, "mycfunction");
    echo "<pre>";
    print_r($result);
    echo "-------------------------------------------";
    exit;

?>

<?php

    echo "array_diff_ukey";
    function myfunction1($a, $b)
    {
        if ($a === $b) {
            return 0;
        }
        return ($a > $b) ? 1 : -1;
    }

    $a1 = ["a" => "red", "b" => "green", "c" => "blue"];
    $a2 = ["d" => "red", "b" => "green", "e" => "blue"];

    $result = array_diff_ukey($a1, $a2, "myfunction1");
    echo "<pre>";
    print_r($result);
    echo "-------------------------------------------";
    exit;
?>

<?php

    echo "array_fill";
    $a1 = array_fill(3, 4, "blue");
    $b1 = array_fill(0, 2, "red");
    echo "<pre>";
    print_r($a1);
    echo "<br>";
    print_r($b1);
    echo "-------------------------------------------";
    exit;

?>