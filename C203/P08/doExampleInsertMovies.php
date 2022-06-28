<?php
$theTitle = $_POST['title'];
$directorID = $_POST['director'];
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";
// open connection 
$link = mysqli_connect($host, $username, $password, $db);

// build sql query
$queryInsert="INSERT INTO example_movies(d_id,title) VALUES ('$directorID','$theTitle')";
        

// execute sql query
$resultInsert= mysqli_query($link, $queryInsert)or die('Error querying database');

// process the result
if($resultInsert){
    $message="record insert successfully";
}else{
    $message="record insertion failed";
}

// close connection
mysqli_close($link);
?>
<!DOCTYPE html>
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
