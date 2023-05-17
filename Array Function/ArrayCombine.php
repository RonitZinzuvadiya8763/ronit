<?php

    echo "array_combine";

    $fname = ["Peter","Ben","Joe"];
    $age = ["35","37","43"];

    $c = array_combine($fname,$age);

    echo "<pre>";
    print_r($c);
    echo "-------------------------------------------";

?>