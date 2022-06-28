<?php
include "dbFunctions.php";

$query = "select * from items";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>List of items</h1>

        <table border="1" cellpadding="0" cellspacing="0">
            <tr>
                <th>Restaurant Name</th>
                <th>Date Sold</th>
                <th>Quality</th>
                <th>Price</th>
                <th>Image</th>
                <th>Edit</th>  
            </tr>
            <?php
            for ($i = 0; $i < count($arrContent); $i++) {
                $id = $arrContent[$i]['id'];
                $name = $arrContent[$i]['name'];
                $dateSold = $arrContent[$i]['date_sold'];
                $quality = $arrContent[$i]['quality'];
                $price = $arrContent[$i]['price'];
                $image = $arrContent[$i]['image'];
                if ($image == "none") {
                    $image = "none.jpg";
                }
                ?>
                <tr>
                    <td><a href="itemDetails.php?id=<?php echo $id; ?>"><?php echo $name; ?></a></td>
                    <td><?php echo $dateSold; ?></td>
                    <td><b><?php echo $quality; ?></b></td>
                    <td>$<?php echo $price; ?></td>
                    <td><img src="itemPics/<?php echo $image; ?>"width="100" height="100"/></td>
                    <td><a href="editItem.php?id=<?php echo $id; ?>">Edit</a></td>
                </tr>
                <?php
            }
            ?>
        </table>


    </body>
</html>
