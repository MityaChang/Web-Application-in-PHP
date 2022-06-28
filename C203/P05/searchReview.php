<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search Review</title>
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
        <h2> Search For Latest Restaurant Review</h2>
        <hr style="height:1px;width:450px;text-align: left;color:black;background-color:black"><br/>
        <form name="frmSearch" method="post" action="doSearchReview.php">
            <label for= "idRestName"><b>Restaurant Name :</b></label><br><br>
<input id="idRestName" type="text" name="restName"placeholder='e.g.Apple Restaurant'/><br/>
<br/>
<input type="submit" value= "Search"class='button'/> <br/>
</form>
        <?php
        // put your code here
        ?>
    </body>
</html>
