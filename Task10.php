<!-- 
  Q:$keys = ['id', 'firstname', 'lastname'];
    $values = [[3, 4, 5], [50, 60, 70], [15, 45, 85]];
  A:[
      [
        'id' ="3",
        'firstname' = "4",
        'lastname' = "5"
      ],
      [
        'id' ="50",
        'firstname' = "60",
        'lastname' = "70"
      ],
      [
        'id' ="15",
        'firstname' = "45",
        'lastname' = "85"
      ]
    ]; 
-->

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

    echo "<pre>";
    print_r($result);

?>