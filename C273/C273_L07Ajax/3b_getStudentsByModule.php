<?php
include('dbFunctions.php');

if (isset($_GET['module_code'])) {
    $moduleCode = $_GET['module_code'];
    $query = "SELECT s.student_id, s.first_name, s.last_name , a.class FROM student s,allocation a Where s.student_id = a.student_id And a.module_code = '$moduleCode' order by student_id";

    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $display[] = $row;
    }

    mysqli_close($link);
    echo json_encode($display);
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
