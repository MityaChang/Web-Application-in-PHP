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
        <form name="frmInsert" action="doInsertReview.php"
method="post" class="formLayout">
<label for="idRestId"><b>Restaurant Name: </b></label><br>
<select id="idRestId" name="restId">
<option value="1">Our Place At Three-West</option>
<option value="2 ">Great Mouse Cook</option>
<option value="3 ">Fine Chicken Corner</option>
</select><br><br/>
<hr style="height:1px;width:250px;text-align: left;color:black;background-color:black"><br/>
<label for="idRating1 "><b>Your Rating:</b></label><br/>
<input type="radio" id="idRating1" name="rating" value="1"/>1<span style="color:gold;">&starf;</span>
<input type="radio" id="idRating2" name="rating" value="2"/>2<span style="color:gold;">&starf;</span>
<input type="radio" id="idRating3" name="rating" value="3"/>3<span style="color:gold;">&starf;</span>
<input type="radio" id="idRating4" name="rating" value="4"/>4<span style="color:gold;">&starf;</span>
<input type="radio" id="idRating5" name="rating " value="5"/>5<span style="color:gold;">&starf;</span>
<br/><br/>
<hr style="height:1px;width:250px;text-align: left;color:black;background-color:black"><br/>
<label for="idComment"><b>Comment:</b></label><br>
<textarea id="idComment" name="comment" rows="6" cols="35 "></textarea>
<br/><br/>
<hr style="height:1px;width:250px;text-align: left;color:black;background-color:black"><br/>
<input type="submit" value="Add Review"class="button"/>
</form>
        <?php
        // put your code here
        ?>
    </body>
</html>
