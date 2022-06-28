<?php
$weight = $_POST['weight'];
$number = $_POST['number'];
$time = $_POST['time'];
$method = $_POST['method'];

if (empty($_POST['addition'])) {
    $additionString = "";
} else {
    $addition = $_POST['addition'];
    $additionString = implode(", ", $addition);
}
$message = "";

$host = "localhost";
$user = "root";
$pass = "";
$db = "c273_p03";

$link = mysqli_connect($host, $user, $pass, $db);

$query = "INSERT INTO books(book_weight, num_books, ship_time, ship_method, extra_additions)";
$query .= "VALUES ('$weight', $number, '$time', '$method', '$additionString')";

$result = mysqli_query($link, $query) or die($link);

if ($result) {
    $message = "Record inserted successfully";
} else {
    $message = "Record insertion failed";
}


mysqli_close($link);
?>
<html lang="en">
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
        </script>
        <style>
            body{
                text-align: center;
            }
            </style>
    </head>
    <body>

        <?php echo $message ?>
        <br/><br/><br/>
        <form method="post" action="shipCostCalculator.php">
            <input type="submit" id="calculate" class="btn btn-info btn-block" value="Back to Main Page"/>
        </form>
    </body>
</html>
