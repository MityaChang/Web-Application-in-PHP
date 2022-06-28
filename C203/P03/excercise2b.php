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
        $score=70;
        $grade="";
        $color="";
        if($score>=70){
            $grade="A";
            $color="green";
        }else if($score>=60){
            $grade="B";
            $color="orange";
        }
        else{
            $grade="F";
            $color="red";
        }
        echo "Your grade is <b><font color=$color>$grade</font></b>";
        
        ?>
    </body>
</html>
