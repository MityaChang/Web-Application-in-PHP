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
        $colorList=$_POST['color'];
        
        for($i=count($colorList)-1;$i>=0;$i--){
echo ($i+1)." ".$colorList[$i]." bottle hanging on the wall<br/>";
        }
        ?>
        
    </body>
</html>
