<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Delete a comment</title>
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
        <form name="frmDelete" action="doDeleteReview.php" method="post">
            <label for="idRestId"><b>Restaurant: </b></label><br><br>
<select id="idRestId" name="restId">
<option value="1">Our Place At Three-West</option>
<option value="2 ">Great Mouse Cook</option>
<option value="3 ">Fine Chicken Corner</option>
</select><br><br/><br/><br/>
<input type="submit" value="Delete All Review for the Restaurant" class='button'/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
