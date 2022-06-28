<?php

$weight = $_GET['weight'];
$height = $_GET['height'];
$age = $_GET['age'];
$gender = $_GET['gender'];

$bmr = 0;
if ($gender == "M") {
    $BMR = 66 + (13.7 * $weight) + (5 * $height) - (6.8 * $age);
} else {
    $BMR = 655 + (9.6 * $weight) + (1.8 * $height) - (4.7 * $age);
}

echo "Your BMR is $BMR"
?>
