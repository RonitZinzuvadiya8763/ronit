<?php
class Task
{
    function arrayShift($array){
        foreach($array as $value) {
            if (in_array($value, $array)){                
                return $value;
            }
        }
    }
    function arraySlice($array, $element){ // 2
        $slicedArray = [];
        $slicedkey = 0;
        foreach($array as $key => $value) {
            if(!($element > $key)){ // 2 > 0
                $slicedArray[$slicedkey] = $value;
                $slicedkey = $slicedkey + 1;
            }
        }
        return $slicedArray;
    }
    function arraySearch($array, $search){
        foreach($array as $key => $value) {
            if($value == $search){
                return $key;
            }
        }
    }
    function arrayChangeKeyCase($array)
    {
        $newArray = [];
        foreach ($array as $key => $value) {
            $newArray[strtoupper($key)] = $value;
        }
        return $newArray;
    }
    function arrayChunk($array, $chunksize)
    {
        $main = [];
        $index = 0;

        echo "Example-2: array_chunk() '35','37','43','30','24','47','27'";
        for ($i = 0; $i < count($array); $i++) {

            $main[$index][] = $array[$i];

            if (count($main[$index]) == $chunksize) { 
                $index++;
            }
        }
        return $main;
    }
    function arrayColumn($array, $fieldname) 
    {        
        $values = [];
        foreach ($array as $value) { 
            $values[] = $value[$fieldname];
        }
        return $values;
    }
    // function arrayCombine($fname)
    // {
    //     $combineArray = [];   
    //     foreach ($fname as $value) {
    //         if (is_array($value)) {
    //             singleArray($value, $result);
    //         } else {
    //             $combineArray[$value];
    //         }
    //     }
    //     return $combineArray;
    // }
    function array_count_values($array)
    {
        $countArray = [];

        foreach ($array as $value) {
            if (!isset($countArray[$value])) {
                $countArray[$value] = 0;
            }
            $countArray[$value]++;
        }
        return $countArray;
    }
    function array_diff_ukey($arr1, $arr2, $callback)
    {
        $result = [];
        foreach ($arr1 as $key1 => $val1) {
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
    function arrayFill($array_fill)
    {
        $start = 3;
        $end = 4;
        $increse = 1;

        for ($i = $start; $increse <= $end; $i++) {
            $array_fill[$i] = 'blue';
            $increse = $increse + 1;
        }
        $myArr = $array_fill;
        return $myArr;
    }
    function fillKeys($keys)
    {
        $values = "blue";
        foreach ($keys as $value) { // a                
            $filled_array[$value] = $values;
        }
        return $filled_array;
    }
    function flip($array)
    {
        foreach ($array as $key => $value) { //"a"=>"red"
            $result[$value] = $key; // red => a
        }
        return $result;
    }
    function intersect($array1, $array2)
    {
        $result = [];
        foreach ($array1 as $key1 => $value1) { // a=>red
            // e=>red
            // echo "$value2";
            // exit;
            if (in_array($value1, $array2)) { // red === red
                $result[$key1] = $value1;
            }

        }
        return $result;
    }
    function intersectAssoc($array1, $array2)
    {
        $result = [];
        foreach ($array1 as $key => $value) { //a => red
            if (isset($array2[$key]) && $array2[$key] === $value) { //check isset and check $array2[a] === red both are true "add key and value in $result array.."
                $result[$key] = $value; // add key and valur to new array
            }
        }
        return $result;
    }
    function intersectKey($array1, $array2)
    {
        $result = [];
        foreach ($array1 as $key => $value) { //a => red
            if (isset($array2[$key])) {
                $result[$key] = $value;
            }
        }
        return $result; // return new array
    }
    function keyExists($array)
    {
        $keys = array_keys($array);
        $val = 'Ben';
        if (in_array($val, $keys)) {
            echo "key exist";
        }
    }
    function key($array)
    {
        foreach ($array as $key => $value) { //Peter => 35, Ben => 37, Joe => 43
            $key_collection[] = $key; // store Peter in $key_collection[]
        }
        return $key_collection;
    }
    function map($numbers)
    {
        foreach ($numbers as $number) { // 1, 2, 3, 4, 5
            $result[] = $number * $number; // 1, 4, 9, 16, 25
        }
        return $result;
    }
    function merge(array $arrays)
    {
        $mergeArray = [];

        foreach ($arrays as $array) {
            foreach ($array as $finalArray) {
                $mergeArray[] = $finalArray;
            }
        }

        return $mergeArray;
    }
    function pad($array, $size, $value)
    {
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
    function pop($array)
    {
        $popIndex = (count($array) - 1);

        array_splice($array, $popIndex, 1);
        return $array;
    }
    function product($array)
    {
        $n = count($array);

        $result = 1;
        for ($i = 0; $i < $n; $i++) // 0 < 4
        {
            $result = $result * $array[$i]; // 1*5 so result = 5
        }
        return $result;
    }
    function push($array, $newvalue)
    {
        $newvalue = explode(',', $newvalue);

        foreach ($newvalue as $value) // 0 => blue
        {
            $array[] = trim($value);
        }

        return $array;
    }
    function reverse($array)
    {
        $size = sizeof($array);
        $newArray = [];
        for ($i = $size - 1; $i >= 0; $i--) {
            $newArray[] = $array[$i];
        }
        return $newArray;
    }
    function random($array)
    {
        $num = rand(1, count($array));
        return $array[$num - 1];
    }
}


$array = ["a"=>"red","b"=>"green","c"=>"blue"];
$taskObj = new Task();
$result = $taskObj->arrayShift($array);

echo "<pre>";
print_r($result);
exit;

$array = ["red","green","blue","yellow","brown"];
$taskObj = new Task();
$result = $taskObj->arraySlice($array, 2);

echo "<pre>";
print_r($result);
exit;

// $fname = ['mmm', ["35", "37", ['23'], ['90', ['569', ['96']]]], ["43", "30"], ["24", "47"], ["27"]];
// // $combineArray = [];
// $taskObj = new Task();
// $result = $taskObj->arrayCombine($fname);

// echo "<pre>";
// print_r($result);
// exit;

$array = ["a"=>"red","b"=>"green","c"=>"blue"];
$taskObj = new Task();
$result = $taskObj->arraySearch($array, 'green');

echo "<pre>";
print_r($result);
exit;


$array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
$taskObj = new Task();
$result = $taskObj->arrayChangeKeyCase($array);

echo "<pre>";
print_r($result);
exit;


$array = ["35", "37", "43", "30", "24", "47", "27"];
$taskObj = new Task();
$result = $taskObj->arrayChunk($array, 4);

echo "<pre>";
print_r($result);
exit;


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
$taskObj = new Task();
$result = $taskObj->arrayColumn($array, 'first_name');

echo "<pre>";
print_r($result);
exit;


// $fname = ['mmm', ["35", "37", ['23'], ['90', ['569', ['96']]]], ["43", "30"], ["24", "47"], ["27"]];
// // $combineArray = [];
// $taskObj = new Task();
// $result = $taskObj->arrayCombine($fname);

// echo "<pre>";
// print_r($result);
// exit;


$array = ["A", "Cat", "Dog", "A", "Dog"];
$taskObj = new Task();
$result = $taskObj->array_count_values($array);

echo "<pre>";
print_r($result);
exit;

$arr1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "blue"];
$arr2 = ["a" => "blue", "b" => "black", "e" => "blue"];
$taskObj = new Task();
$result = $taskObj->array_diff_ukey($arr1, $arr2, 'strcmp');

echo "<pre>";
print_r($result);
exit;

$array_fill = [];
$taskObj = new Task();
$result = $taskObj->arrayFill($array_fill);

echo "<pre>";
print_r($result);
exit;

$keys = ["a", "b", "c", "d"];
$taskObj = new Task();
$result = $taskObj->fillKeys($keys);

echo "<pre>";
print_r($result);
exit;

$array = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$taskObj = new Task();
$result = $taskObj->flip($array);

echo "<pre>";
print_r($result);
exit;

$array1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$array2 = ["e" => "red", "f" => "green", "g" => "blue", "h" => "sky"];
$taskObj = new Task();
$result = $taskObj->intersect($array1, $array2);

echo "<pre>";
print_r($result);
exit;

$array1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$array2 = ["xa" => "red", "b" => "grexen", "c" => "blue"];
$taskObj = new Task();
$result = $taskObj->intersectAssoc($array1, $array2);

echo "<pre>";
print_r($result);
exit;

$array1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$array2 = ["xa" => "rexd", "b" => "grexen", "c" => "blue"];
//$allarray = [$array1, $array2];
$taskObj = new Task();
$result = $taskObj->intersectKey($array1, $array2);

echo "<pre>";
print_r($result);
exit;

$array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
$taskObj = new Task();
$result = $taskObj->keyExists($array);

echo "<pre>";
exit;

$array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
$taskObj = new Task();
$result = $taskObj->key($array);

echo '<pre>';
print_r($result);
exit;

$array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];

$numbers = [1, 2, 3, 4, 5];
$taskObj = new Task();
$result = $taskObj->map($numbers);

echo '<pre>';
print_r($result);
exit;

$array1 = ['One', 'Two', 'Three'];
$array2 = ['Four', 'Five', 'Six'];
$array3 = ['Seven', 'Eight', 'Nine'];
$a2 = ['Seven', 'Ten'];
$mergedArray = [$array1, $array2, $array3, $a2];
$taskObj = new Task();
$result = $taskObj->merge($mergedArray);

echo '<pre>';
print_r($result);
exit;

$array = array(1, 2, 3);
$total_element = 5;
$value = 5;
$taskObj = new Task();
$result = $taskObj->pad($array, $total_element, $value);

echo '<pre>';
print_r($result);
exit;

$array = ["red", "green", "blue", "masti", "hello", "ronit"];
$taskObj = new Task();
$result = $taskObj->pop($array);

echo '<pre>';
print_r($result);
exit;

$array = [5, 5, 6, 8];
$taskObj = new Task();
$result = $taskObj->product($array);

echo '<pre>';
print_r($result);
exit;

$array = ["red", "green"];
$taskObj = new Task();
$result = $taskObj->push($array, "blue, grey, ronit");

echo '<pre>';
print_r($result);
exit;

$array = [1, 2, 3, 4];
$taskObj = new Task();
$result = $taskObj->reverse($array);

echo '<pre>';
print_r($result);
exit;

$array = ["red", "green", "blue", "yellow", "brown"];
$taskObj = new Task();
$result = $taskObj->random($array);

echo $result;
echo '<br>';
exit;

?>