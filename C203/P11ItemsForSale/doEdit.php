<?php
session_start();
// include a php file that contains the common database connection codes
include ("dbFunctions.php");

//retrieve computer details from the textarea on the previous page
$updateDesc = $_POST['details'];
echo $updateDesc;
//retrieve id from the hidden form field of the previous page
$theID = $_POST['id'];
$msg = "";

//build a query to update the table
//update the record with the details from the form
$queryUpdate = "UPDATE used_items SET description='$updateDesc'WHERE id=$theID";
//execute the query
$resultUpdate = mysqli_query($link, $queryUpdate) or die(mysqli_error($link));

//if statement to check whether the update is successful
//store the success or error message into variable $msg
if ($resultUpdate) {
    $msg = "record successfully updated";
} else {
    $msg = "record not updared";
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
        <br/><br/>
        <?php
        echo $msg;
        ?>
        <form method="post" action="index.php">
            <br/><br/>  
            <input type="submit" class="button" value="Go To Home"/>
        </form>
    </body>
</html>
