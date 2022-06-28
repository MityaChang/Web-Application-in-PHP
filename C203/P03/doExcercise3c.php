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
        if(isset($_POST['gender'])){
            $gender=$_POST['gender'];
            if($gender=="M"){
                $message="You have selected Male";
            }else{
                $message="You have selected Female";
            }
            
        } else {
            $message="You have not selected a gender";
        }
        echo $message;
        ?>
    </body>
</html>
