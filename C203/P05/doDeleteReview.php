<?php
$deleteReview=$_POST['restId'];
$host="localhost";
$username = "root";
$password = "";
$db="c203_p05";
$link=mysqli_connect($host, $username, $password, $db);

$query="DELETE FROM reviews WHERE reviews.rest_id = '$deleteReview'";


$result=mysqli_query($link, $query) or die(mysqli_error($link));
mysqli_close($link);
$message="";

if ($result){
            $message = "<b>All Reviews for the Restaurant are deleted</b>";
        }

        else {
            $message = "Review Delete fail";
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
        <h1>Delete Restaurant Review</h1>
        <hr style="height:1px;width:450px;text-align: left;color:black;background-color:black"><br/>
        <?php   
        echo $message;
        // put your code here
        ?>
        <form name="frmDeleteback" action="deleteReview.php"
method="post" class="formLayout">
                    <br><br/>
            <input type="submit" value="Delete another Review"class="button"/>
            
    </body>
</html>
