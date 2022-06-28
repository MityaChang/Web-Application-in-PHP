<?php

include('dbFunctions.php');

$id = $_GET['id'];

$query = "SELECT * FROM person WHERE id = $id";
$result = mysqli_query($link, $query);

 $display = mysqli_fetch_assoc($result);

echo json_encode($display);
?>

