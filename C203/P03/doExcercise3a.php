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
        $num=$_POST['number'];
        if($num>5){
            echo"Number is more than 5";
        }
        else if($num<=5){
            echo "Number is less than or equal to 5";
        }
        else{
            echo "Please enter number only!";
        }
        ?>
    </body>
</html>
