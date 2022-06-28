<?php
$theTitle = $_POST['movieTitle'];
$theDuration = $_POST['duration'];
$message="";

 

$host = "localhost";
$user = "root";
$pass = "";
$db = "c203_p05";

 

$link = mysqli_connect($host, $user, $pass, $db);

 

$query = "INSERT INTO movies(title,movie_duration) VALUES('$theTitle','$theDuration')";

 

$result = mysqli_query($link, $query) or die('Error querying database');

 

if($result) {
    $message = "record insert successfully";
} else { 
    $message = "record insertion failed";
}


 

mysqli_close($link);
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
        echo $message;
        ?>
    </body>
</html>
