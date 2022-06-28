<?php
$searchTitle=$_POST['title'];

$host = "localhost";
$user = "root";
$pass ="";
$db="c203_p05";

$link = mysqli_connect($host, $user, $pass, $db);

$query="SELECT * FROM movies where title='$searchTitle'";

$result =mysqli_query($link,$query)or die(mysqli_error($link));
// close connection
mysqli_close($link);

$row= mysqli_fetch_array($result);

$message="";

if(!empty($row)){
    $name=$row['title'];
    $points=$row['movie_duration'];
    
    $message .="Name: $name<br/>Movie Duration: $points";
    
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
        echo $message;
        // put your code here
        ?>
    </body>
</html>
