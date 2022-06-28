<?php
$num=$_POST['num'];
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
        <form action="showFruits.php" method="post">
            <?php
            for($i=1;$i<=$num;$i++){
                echo "Fruit $i";
                ?>
            <input type="text" name="fruits[]"/>
            <br><br/>
            <?php
            }
            ?>
            <input type="submit" value="Go"/>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
