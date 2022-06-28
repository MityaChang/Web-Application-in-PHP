<?php
include('dbFunctions.php');

$f_id = $_GET['f_id'];

$query = "SELECT description,picture FROM flowers WHERE id = $f_id";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

$desc['description'] = $row['description'];
$desc['picture'] = $row['picture'];

echo json_encode($desc);
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
