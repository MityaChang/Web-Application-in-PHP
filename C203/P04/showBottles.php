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
        $colorList=$_POST['colour'];
        $actionList=$_POST['action'];
        
        for($i=0;$i<count($colorList);$i++){
            echo ($i+1)." ".strtolower($colorList[$i]);
            echo "bottle ".strtolower($actionList[$i])." on the wall<br/>";
        }
        ?>
    </body>
</html>
