<!--19034275-->

<!DOCTYPE html>
<?php
include 'dbFunctions.php';
$maskcolour = $_POST['maskcolour'];
$masktype = $_POST['masktype'];

$query = "INSERT INTO mask(color , type) VALUES ('$maskcolour','$masktype')";
$result = mysqli_query($link, $query);

return $result;
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
