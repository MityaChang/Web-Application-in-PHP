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
        $carsList=$_POST['cars'];
        
        for($i=0;$i<count($carsList);$i++){
            echo strtolower($carsList[$i]. "<br/>");
        }
        ?>
    </body>
</html>
