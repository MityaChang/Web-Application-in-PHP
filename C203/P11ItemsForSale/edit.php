<?php
session_start();
// include a php file that contains the common database connection codes
include ("dbFunctions.php");

$itemID = $_POST['itemID'];
echo $itemID;

// create query to retrieve a single record based on the value of $compID 
$queryItem = "SELECT * FROM used_items WHERE id=$itemID";
// execute the query
$resultItems = mysqli_query($link, $queryItem) or die(mysqli_errno($link));
// fetch the execution result to an array
$rowItem = mysqli_fetch_array($resultItems);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            .button{
                width: 15%;
                background-color: #3366ff;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
        </style>

    </head>
    <body>
        <h3>Edit your item</h3>
        <hr>
        <form method="post" action="doEdit.php">
            <b>Name:</b><br/>
            <?php echo $rowItem['name'] ?>
            <br/><br/>

            <b>Price:</b><br/>
            $<?php echo $rowItem['price'] ?>
            <br/><br/>

            <b>Editable description:</b><br/>
            <textarea rows="5" cols="30"
                      name="details"><?php echo $rowItem['description'] ?>
            </textarea>
            <br/><br/>

            <input type="hidden" name="id"
                   value="<?php echo $rowItem['id'] ?>"/>
            <input type="submit" class="button" value="Update Item"/>
        </form>
    </body>
</html>
