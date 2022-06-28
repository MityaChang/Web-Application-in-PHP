<?php
include ("dbFunctions.php");

$deleteCapa = $_POST['capacity'];

$queryDelte = "DELETE FROM name WHERE capacity>$deleteCapa";


$status = mysqli_query($link, $queryDelte)or die(mysqli_error($link));

if ($status) {
    $message = "Hotel has been deleted.";
} else {
    $message = "Hotel delete failed.";
}
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
        ?>
    </body>
</html>
