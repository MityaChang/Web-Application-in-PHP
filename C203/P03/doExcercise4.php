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
        if(!empty($_POST['name'])){
            $message .="Name: ".$_POST['name'] . "<br/>";
        }
        if(!empty($_POST['email'])&& filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $message .="Email: ".$_POST['email'] . "<br/>";
        }
                if(!empty($_POST['address'])){
            $message .="Address: ".$_POST['address'] . "<br/>";
        }
                if(!empty($_POST['zipcode'])&& strlen($_POST['zipcode'])==6){
            $message .="Postal Code: ".$_POST['zipcode'] . "<br/>";
        }
                if(!empty($_POST['country'])){
            $message .="Country: ".$_POST['country'] . "<br/>";
        }
                if(!empty($_POST['food'])){
            $message .="Food Preference: ".$_POST['food'] . "<br/>";
        }
        else{
            $message .="You have not selected any food preference<br/>";
        }
        echo $message;
        ?>
    </body>
</html>
