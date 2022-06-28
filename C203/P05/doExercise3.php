<?php
$searchName =['name'];

$host = "localhost";
$user = "root";
$pass ="";
$db="c203_p05";
// open connection
$link = mysqli_connect($host, $user, $pass, $db);
// build SQL query
$query="SELECT * FROM members WHERE name='$searchName'";
// execute SQL query
$result =mysqli_query($link,$query)or die(mysqli_error($link));
// close connection
mysqli_close($link);

$row= mysqli_fetch_array($result);

$message="";

if(!empty($row)){
    $name=$row['name'];
    $points=$row['points'];
    
    $message .="Name: $name<br/>Points: $points";
    
}else{
    $message .="no matching record found";
}
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
        echo $message;
        ?>
    </body>
</html>
