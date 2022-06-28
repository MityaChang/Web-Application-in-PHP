<?php
$num=5;
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
    </head>
    <body>
        <form action="showCars.php" method="post">
            <?php
            for($i=1;$i<=$num;$i++){
                echo "Car $i";
                ?>
            <input type="text" name="cars[]"/>
            <br><br/>
            <?php
            
            }
            ?>
            <input type="submit" value="Go"/>
           
<!--    Car 1
    <input type="text" name="cars[]" />
    <br/><br/>
    Car 2
    <input type="text" name="cars[]" />
    <br/><br/>
    Car 3
    <input type="text" name="cars[]" />
    <br/><br/>
    <input type="submit" value="Go"/>-->
</form>

        <?php
        // put your code here
        ?>
    </body>
</html>
