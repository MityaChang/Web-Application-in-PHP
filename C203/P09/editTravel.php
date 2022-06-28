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
            p{
                font-family: cursive;
                font-weight: bold;
            }
            img{
                border-style:double;
                border-width: 3px;
            }
            .button{
                 height: 40px;
                background-color: darkblue;
                color:white;
                font-size: 20px;
                border-radius: 50px;
            }

        </style>
    </head>
    <body>
        <h1>Edit your content</h1><hr>
    <img width="300" height="300" src="travelPics/<?php echo $row['picture'] ?>"/><br/>
    Title:<p> <?php echo $row['title'] ?></p>
    <br/>
    City: <?php echo $row['city'] ?>
    <br/>
    Length (in days): <?php echo $row['length_days'] ?> days
    <br/>
    Total cost: $<?php echo $row['total_spending'] ?>
    <br/><br/>
    <form method="post" action="doEditTravel.php">
        Editable story:
        <br/>
        <textarea name="story" rows="11" cols="36"><?php echo $row['story'] ?>
            </textarea>
            <br/><br/>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>
            <input class="button" type="submit" value="Update"/>
    </form>

</body>
</html>
