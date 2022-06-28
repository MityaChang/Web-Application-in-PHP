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
 $color=$_POST['selColor'];
        $cost=0;
        if($color=="red"){
            $cost+=5;
        }
        else if($color=="green"){
            $cost+=10;
        }
        else{
            $cost+=15;
        }
        echo "The cost is $cost";  
        ?>
    </body>
</html>
