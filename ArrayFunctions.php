<?php
class Task
{
    function asort($array)
    {
        $value = array_values($array); // 3
        for ($i = 0; $i < count($value); $i++) { // 0 < 3
            for ($j = $i + 1; $j < count($value); $j++) { // 1, 1 < 3
                if ($value[$i] > $value[$j]) { //value[0] > value[1]
                    $temp = $value[$j];
                    $value[$j] = $value[$i];
                    $value[$i] = $temp;
                }
            }
            $name = array_keys($array, $value[$i], true)[0];
            // print_r($name);
            $result[$name] = $value[$i];
        }
        return $result;
    }
    function arsort($array)
    {
        $value = array_values($array); // 3
        for ($i = 0; $i < count($value); $i++) { // 0 < 3
            for ($j = $i + 1; $j < count($value); $j++) { // 1, 1 < 3
                if ($value[$i] < $value[$j]) { //value[0] < value[1]
                    $temp = $value[$j];
                    $value[$j] = $value[$i];
                    $value[$i] = $temp;
                }
            }
            $name = array_keys($array, $value[$i], true)[0];
            // print_r($name);
            $result[$name] = $value[$i];
        }
        return $result;
    }    
}

$array = ["Peter"=>"35","Ben"=>"57","Joe"=>"43"];
$taskObj = new Task();
$result = $taskObj->krsort($array);

echo "<pre>";
print_r($result);
exit;

$array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
$taskObj = new Task();
$result = $taskObj->asort($array);

echo "<pre>";
print_r($result);
exit;

$array = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
$taskObj = new Task();
$result = $taskObj->arsort($array);

echo "<pre>";
print_r($result);
exit;
