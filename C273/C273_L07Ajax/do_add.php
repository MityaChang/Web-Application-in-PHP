<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

$sum = $num1 + $num2;
$response["result"] = $sum;
echo json_encode($response);

?>

