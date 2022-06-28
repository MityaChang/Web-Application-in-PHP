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
        
        $message="";
        
        if(isset($_POST['fruits'])){
            $fruitArray=$_POST['fruits'];
            
            $message .="The selected fruits are: ";
            for($i=0;$i<count($fruitArray);$i++){
                $message .=" ".$fruitArray[$i];
            }
        }
        else{
            $message .="you have not selected any fruits";
        }
        echo $message;
        ?>
    </body>
</html>
