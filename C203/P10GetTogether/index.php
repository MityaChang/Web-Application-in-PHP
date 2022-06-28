<!DOCTYPE html>
<?php
session_start();

$msg = "";
if (!isset($_SESSION['username'])) {
    $msg = "<h3>Get Together</h3>";
    $msg .= "<h4>Please <a href='login.php'>Log in</a> .</h4>";
} else {
    $msg .= "<h4> Hi " . $_SESSION['username'] . "!</h4>";
    $msg .= "<p> Full Name: " . $_SESSION['name'] . "</p>";
    $msg .= "<p> Birth Date: " . $_SESSION['birthdate'] . "</p>";

    $msg .= "<a href='logout.php'>Logout</a>";
}

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Get Together - Where the neighborhood comes together!</title>
    </head>
     <body style="background-color: <?php echo $_SESSION['color_pref'] ?>;">
        <?php echo $msg; ?>


    </body>
</html>