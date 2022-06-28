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
        $fruitList=$_POST['fruits'];
        
        for($i=0;$i<count($fruitList);$i++){
            echo strtolower($fruitList[$i])."<br/>";
        }
        ?>
    </body>
</html>
