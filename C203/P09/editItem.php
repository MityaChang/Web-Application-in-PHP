<?php
include "dbFunctions.php";

$theID = $_GET['id'];

$query = "select * from items where id=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);
if (!empty($row)) {
    $id = $row['id'];
    $item = $row['name'];
    $descrption = $row['description'];
    $sold = $row['date_sold'];
    $quality = $row['quality'];
    $price = $row['price'];
    $image = $row['image'];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if (!empty($id)) { ?>
        <form action="sellItem.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                <div>
                    <b>Item Name:</b>
                    <input type="text" name="name" value="<?php echo $item ?>"/>
                    <br/>
                    <b>Description:</b>
                    <textarea name="description" rows="3" cols="30"><?php echo $descrption ?></textarea><br/>
                    <b>Date Sold:</b>
                    <?php echo $sold ?><br/>
                    <b>Quality:</b>
                    <?php $quality = array("okay", "good", "bad"); ?>
                    <select name="quality">
                        <?php
                        for ($i = 0; $i < count($quality); $i++) {
                            $checked = "";
                            if ($quality == $quality[$i]) {
                                $checked = "checked";
                            }
                            echo "<option value='" . $quality[$i] . "'$checked>" . $quality[$i] . "</option>";
                        }
                        ?>
                    </select><br/>
                    <b>Price:</b>
                    <input type="text" name="price" value="<?php echo $price ?>"/><br/>
                    <img src="itemPics/<?php echo $image ?>"width="200"/>

                </div>
                <br/>
                <input type="submit"/>
            </form>

        <?php } ?>
    </body>
</html>
