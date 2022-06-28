<?php
$Title = $_POST['title'];
$Category = $_POST['category'];
$Pages = $_POST['pages'];
$Quantity = $_POST['quantity'];
$Rent = $_POST['rent'];

$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

$doInsert = mysqli_connect($host, $username, $password, $db);

$queryInsert = "INSERT INTO books(c_id, title, pages, qty, rent_price) VALUES ($Category, '$Title', '$Pages', '$Quantity', '$Rent')";

$resultInsert = mysqli_query($doInsert, $queryInsert) or die('Error in querying database');

if ($resultInsert) {
    $message = "<b>Book Information Submitted Successfully</br></b>";
} else {
    $message = "Book Information Submitted Failed";
}

if ($resultInsert) {
    $success = "yes";
} else {
    $message = "Book insertion failed";
    $success = "no";
}

mysqli_close($doInsert);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                text-align: center;
                font-size: 20px;
            }
            </style>
    </head>
    <body>
        <?php
        if ($success == "yes") {
            $message .= "The book you insert:";
            $message .= "Title: <b>" . $Title . "</b></br>";
            $message .= "Quantity: <b>" . $Quantity . "</b></br>";
            $message .= "Number of pages: <b>" . $Pages . "</b></br>";
            $message .= "Rent Price: <b>$" . $Rent . "</b></br>";
            $message .= "<br><b>record inserted successfully</b>";
            echo "<br>";
            echo $message;
//            header("Location:http://localhost/P08/insertBook.php");
        } else if ($success == "no") {
            echo $message;
        }
        ?>
    </body>
</html>
