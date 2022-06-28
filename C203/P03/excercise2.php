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
        
        $score=60;
        if($score>=50){
            echo "You passed the exam";
        }
        elseif($score>70){
            echo"You got a grade 'A' for the exam";
        }else{
            echo "You failed the exam";
        }
        
        ?>
    </body>
</html>
