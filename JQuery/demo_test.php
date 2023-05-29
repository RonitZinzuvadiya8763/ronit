<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $city = $_POST['city'];
    echo $name . " From " . $city;
}
?>