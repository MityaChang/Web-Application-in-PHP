<?php
session_start();

$msg = "";

if (!isset($_SESSION['user']) or !isset($_SESSION['credit'])) {
    $msg .= "<h4>Please <a href='login.php'>Log in</a> .</h4>";
} else {
    if(['credit']<10){
        $msg .= "<h4>Please <a href='topup.php'>Top up</a> .</h4>";
    }else{
        $msg .= "<h4>Please <a href='Ride_anywhere.php'>Ride Anywhere</a> .</h4>";
    }

}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
