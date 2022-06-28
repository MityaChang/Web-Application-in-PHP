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
        <h2>Select the color of each bottle</h2>
        
        <form action="doExcercise3c.php" method="post">
            <label for ="idBottle1">Bottle 1</label>
            <select name ="color[]">
                <option value="green">green</option>
                <option value="red">red</option>
                <option value="blue">blue</option>
                </select>
            <br/><br/>
            <label for ="idBottle2">Bottle 2</label>
                        <select name ="color[]">
                <option value="green">green</option>
                <option value="red">red</option>
                <option value="blue">blue</option>
                </select>
            <br/><br/>
                        <label for ="idBottle3">Bottle 3</label>
                        <select name ="color[]">
                <option value="green">green</option>
                <option value="red">red</option>
                <option value="blue">blue</option>
                </select>
            <br/><br/>
             <input type="submit" value="Go"/>
                
        <?php
        // put your code here
        ?>
    </body>
</html>
