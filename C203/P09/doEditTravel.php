<?php
include "dbFunctions.php";
$travelID = $_POST['id']; //retrieve id from the hidden form field
$newStory = $_POST['story']; //retrieve story from the textarea
$msg = "";
$query = "UPDATE travel_highlights
SET story='$newStory'
WHERE id = $travelID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
if ($result) {
    $msg = "record successfully updated";
} else {
    $msg = "record not updated";
}
echo $msg;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .button{
                height: 40px;
                background-color: green;
                color:white;
                font-size: 20px;
                border-radius: 50px;
            }
            
            form{
                text-align: center;
            }
            </style>
    </head>
    <body>
        <form method="post" action="index.php">
            <input class="button" type="submit" value="Back to travel story"/>
            </form>
    </body>
</html>
