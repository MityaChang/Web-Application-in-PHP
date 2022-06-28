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
        $cars=$_POST['cars'];
        
        for($i=0;$i<count($cars);$i++){
            echo strtolower($cars[$i])."<br/>";
        }
        ?>
    </body>
</html>
