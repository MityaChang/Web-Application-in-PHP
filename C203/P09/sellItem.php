<?php
include "dbFunctions.php";
$theID=$_POST['id'];
$newName=$_POST['name'];
$newDescription=$_POST['description'];
$newQuality=$_POST['quality'];
$newPrice=$_POST['price'];

$msg="";
$query="UPDATE items SET name='$newName',description='$newDescription'"
        . ",quality='$newQuality',price='$newPrice' WHERE id=$theID";

$result= mysqli_query($link, $query) or die(mysqli_error($link));

if($result){
    echo $msg="record successfully updated";
}
else{
    echo $msg="record not updated";
}
?>