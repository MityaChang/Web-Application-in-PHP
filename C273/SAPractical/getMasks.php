<!DOCTYPE html>
<!--19034275-->
<?php 

include "dbFunctions.php"; 

// SQL query returns multiple database records.
$query = "SELECT * FROM mask"; 
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $mask[] = $row;
}
mysqli_close($link);

echo json_encode($mask);
?>

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
