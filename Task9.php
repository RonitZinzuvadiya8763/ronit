<!-- 
    A: create array for lastname values 

    $arr = array( 
                array('id' => 5698, 'first_name' => 'Peter', 'last_name' => 'Griffin',),
                array('id' => 4767, 'first_name' => 'Ben', 'last_name' => 'Smith',),
                array('id' => 3809, 'first_name' => 'Joe', 'last_name' => 'Doe',)
            ); 
-->


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
    
    echo "<pre>";
    print_r($last_names); // print the array of last names

?>