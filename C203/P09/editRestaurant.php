<?php
include "dbFunctions.php";

$theID = $_GET['id'];

$query = "select * from restaurants where rest_id=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);
if (!empty($row)) {
    $resID=$row['rest_id'];
    $resname = $row['name'];
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if(!empty($resID)) { ?>
        <form action="doEditRestaurant.php" method="post">
            <input type="hidden" name="id" value="<?php echo $resID?>"/>
            <div>
                Restaurant Name:
                <input type="text" name="name" value="<?php echo $resname ?>"/>
                <br/><input type="submit"/>
                </div>
            </form>
        
        <?php } ?>
    </body>
</html>
