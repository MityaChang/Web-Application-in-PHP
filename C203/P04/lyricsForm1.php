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
            body{
                text-align: center;
                height: 600px;
                background-image: url('stave.png');
                background-size:100% 100% ;
                
            }
            
             h1{
                width: 500px;
                margin:0 auto;
                text-align: center;

                colour:
            }
            input[type=number]{
                font-style: bold;
      
                box-sizing: border-box;
                border: 2px solid black;
                
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
        <h1>Create Your Lyrics</h1>
        <hr>
        
        
        <form action="lyricsForm2.php" method="post">
            <br/><br/>
                        <label for="idNo"><b>Number of verses</b>:</label><br/><br/>
                        <input type="number" id="idNo" name="num" width="50%"min="0" max="10"
                               maxlength="2"/>
            <br/><br/>
            <input type="submit" class="button" value="Submit">
           
            
        <?php
        // put your code here
        ?>
    </body>
</html>
