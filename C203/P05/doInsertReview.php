<?php
$theID=$_POST['restId'];
$theRating=$_POST['rating'];
$theComment=$_POST['comment'];

$host="localhost";
$username = "root";
$password = "";
$db="c203_p05";

$link=mysqli_connect($host, $username, $password, $db);

$query="INSERT INTO reviews(rest_id,rating,comment)
    Values($theID,$theRating,'$theComment')";

$status= mysqli_query($link, $query)or die(mysqli_error($link));

mysqli_close($link);

$message = "";
if ($status) {
$message.= "Rating: " . $theRating. "<br/>";
$message.= "Comment: " . $theComment. "<br/><br/>";
$message .= "<b>Review Submitted Successfullyl</b>";

}else{
$message="Review Submission Failed";
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
        <title>Insert Review</title>
        <style>
    h1{
        text-align: center;
        }
        body{
            text-align: center;
            background-image: url('Bg.png');
                background-repeat: no-repeat;
                background-size: 100%;
        }
        .button{
                background-color: #24A6CB;
                border: none;
                color: white;
                padding: 5px 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <h1>Insert Restaurant Review</h1>
        <hr style="height:1px;width:450px;text-align: left;color:black;background-color:black"><br/>

        <?php
        // put your code here
        echo $message;
        ?>
                <form name="frmInsertback" action="insertReview.php"
method="post" class="formLayout">
                    <br><br/>
            <input type="submit" value="Submit another review"class="button"/>
    </body>
</html>
