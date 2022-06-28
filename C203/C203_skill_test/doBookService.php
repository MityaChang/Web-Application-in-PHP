<?php
//Set DB connection parameters
//$host = "localhost": MySQL server and Web server reside in the same computer
$host = "localhost";
$username = "root";
$password = "";
$db = "AndyCarServiceDB";
//Establish the connection to the database
//Use die() and mysqli_connect_error() functions for error handling
$link = mysqli_connect($host, $username, $password, $db)
        or die(mysqli_connect_error());
//Assign data retreived from form to the following variables respectively
$name = $_POST['user'];
$service_centre = $_POST['centre'];
$service_date = $_POST['service_date'];
$service_request = $_POST['service_request'];
//Establish the Databse statement
$query = "INSERT INTO service(user, centre, service_date, service_request) VALUES ('$name', '$service_centre', '$service_date', '$service_request')";
//Execute the statement
$result = mysqli_query($link, $query) or die(mysqli_error($link));
//Display different result
if ($result) {
    echo "Your booking is successful. See you soon. <br/><br/> Your Booking Date:<b> $service_date</b>"
    . "<br/><br/>  Service Center:<b>$service_centre</b>"
    . "<br/><br/>  Service Request:<b>$service_request</b>";
} else {
    echo "Your booking failed. Please try again.";
}
//Close link
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>doBookService</title>
        <link href="stylesheets/bookServiceStyleSheet.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--        Go back to the Main page-->
<?php
echo "<br/><br/><a href='bookService.php'>Submit another Booking Service</a>";
?>

    </body>
</html>
