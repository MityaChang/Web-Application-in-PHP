<?php
include('dbFunctions.php');

$cat_id = $_GET["cat_id"];
$categories = Array();

$query = "SELECT id,name FROM flowers WHERE cat_id = $cat_id";
$result = mysqli_query($link, $query);

while($row = mysqli_fetch_assoc($result)){
    $categories[] = $row;
}
echo json_encode($categories);
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
