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
        $start=$_POST['start'];
        $end=$_POST['end'];
        for($i=$start;$i<$end;$i++){
            echo $i."<br/>";
        }
        
        ?>
    </body>
</html>
