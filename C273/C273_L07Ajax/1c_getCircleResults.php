<?php
$type = $_GET['type'];
$radius = $_GET["radius"];
$formula = 0;
if($type =="area"){
    $formula = 3.142 * $radius * $radius;
}else{
    $formula = 3.142 * 2 * $radius;
}

$ans['result'] = number_format($formula,2);
echo json_encode($ans);

?>
