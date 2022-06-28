<?php
$color = array();
$color[0] = "green";
$color[1] = "blue";
$color[2] = "yellow";
$color[3] = "orange";

$randomNo = mt_rand(0, 3);  

$response['color'] = $color[$randomNo];
$response['date'] = date("d-m-Y");
echo json_encode($response);
?>

