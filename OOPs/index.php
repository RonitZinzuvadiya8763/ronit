<?php

// include("protectedModfier.php");
// exit;

include("publicModifier.php");
exit;

include("includeRequiredUse1.php");
echo "hello";
echo "<br>Include file doesn't exist still rest of code will run<br>";
print_r($name);
echo "<br>This file is required";
exit;

include("multipleInheritanceUsingInterface.php");
echo "hello";
exit;
include("multipleInheritanceUsingTraits.php");
exit;
include("singleInheritance.php");
exit;
include("basic-oop.php");