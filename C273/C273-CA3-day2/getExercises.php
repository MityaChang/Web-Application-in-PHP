<?php

include "dbFunctions.php"; 

// SQL query returns multiple database records.
$query = "SELECT * FROM exercise order by exercise_id"; 
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $exercise[] = $row;
}
mysqli_close($link);

echo json_encode($exercise);
?>
