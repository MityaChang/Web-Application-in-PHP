<?php
include "dbFunctions.php";
$theID = $_GET['travelID'];
$query = "SELECT * FROM travel_highlights WHERE id=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            body{
                text-align: center;
                font-size: 25px;
            }
            div{
                 text-align: center;
                 padding-left: 750px;
                 font-size: 25px;
            }
            h3{
                font-family: cursive;
            }
            p{
                border-style: dashed;
            }
            img{
                border-style:double;
                border-width: 3px;
            }

        </style>
    </head>
    <body>
        <?php if (!empty($row)) { ?>
            <div style="width:400px;">
                <h3><?php echo $row['title'] ?></h3>
                <hr>
                City: <?php echo $row['city'] ?>
                <br/>
                Length (in days): <?php echo $row['length_days'] ?> days
                <br/>
                Total cost: $<?php echo $row['total_spending'] ?>
                <br/><br/>
                <img width="300" height="300" src="travelPics/<?php echo $row['picture'] ?>"/>
                <br/><br/>
                <p><?php echo $row['story'] ?></p>
            </div>
        <?php } ?>
        <br/>
        <hr>
        <a href="index.php">Back to Travel Highlight List</a>

    </body>
</html>
