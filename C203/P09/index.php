<?php
include "dbFunctions.php"; 
$query = "SELECT * FROM travel_highlights ORDER BY id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>We Were There</title>
        <style>
            body{
                text-align: center;
            }
            div{
                text-align: center;
                 padding-left: 550px;
                 
            }
            table{
                font-size: 20px;
            }
            h1{
                font-family: cursive;
                font-stretch: expanded;
                font-style: italic;
            }
            h2{
                font-family: fantasy;
                font-stretch: expanded;
            }
            th{
                background-color: #58cedb;
                color: #2965d6;
            }
            td{
                background-color: #96fad4;
            }

        </style>
    </head>
    <body>
        <h1>We Were There</h1>
        <hr>
        <h2>All Travel Highlights</h2>
        <div>
        <table border="1" cellpadding="0" cellspacing="0">
            <tr>
                <th>Title</th>
                <th>City</th>
                <th>Picture</th>
                <th>Length (days)</th>
                <th>Total Spent</th>
                <th>Edit</th>
            </tr>
            <?php
            for ($i = 0; $i < count($arrContent); $i++) {
                $id = $arrContent[$i]['id'];
                $title = $arrContent[$i]['title'];
                $city = $arrContent[$i]['city'];
                $length_days = $arrContent[$i]['length_days'];
                $total_spending = $arrContent[$i]['total_spending'];
                $picture = $arrContent[$i]['picture'];
                ?>
                <tr>
                    <td><a href="travelDetails.php?travelID=<?php echo $id; ?>"><?php echo $title; ?></a></td>
                    <td><?php echo $city; ?></td>
                    <td><img src="travelPics/<?php echo $picture; ?>" width="150" alt="<?php echo $title; ?>"></td>
                    <td><?php echo $length_days; ?></td>
                    <td>$<?php echo $total_spending; ?></td>
                    <td><a href="editTravel.php?travelID=<?php echo $id; ?>">Edit</a></td>
                    </tr>
                    <?php
                }
                ?>
        </table>
            </div>
    </body>
</html>
