<?php

include "dbFunctions.php";

// SQL query returns multiple database records.
if (isset($_GET['food'])) {
    $food = $_GET['food'];

    $query = "SELECT * FROM nutrition WHERE food='$food'";
    $result = mysqli_query($link, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $nutrition[] = $row;
    }
    mysqli_close($link);

    echo json_encode($nutrition);
}
?>
