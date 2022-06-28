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
        <?php
        
        $reps=$_POST['reps'];
        
        for($i=1;$i<=$reps;$i++){
            echo $i."<br/>";
        }
        ?>
    </body>
</html>
