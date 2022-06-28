<?php
// include a php file that contains the common database connection codes
include ("dbFunctions.php");

//retrieve id from the hidden form field of the previous page (index.php)
$theID = $_POST['itemID'];
echo $theID;

//build a query to delete a specific record based on id
$queryDelte = "DELETE FROM used_items WHERE id=$theID";
$status = mysqli_query($link, $queryDelte)or die(mysqli_error($link));
//if statement to check whether the delete is successful
//store the success or error message into variable $message
if ($status) {
    $message = "Item has been deleted.";
} else {
    $message = "Item delete failed.";
}
//Close database link
 mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            .button{
                width: 10%;
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
        <?php
        echo $message;
        ?>
        <form method="post" action="index.php">
            <br/><br/>  
            <input type="submit" class="button" value="Go To Home"/>
        </form>
    </body>
</html>
