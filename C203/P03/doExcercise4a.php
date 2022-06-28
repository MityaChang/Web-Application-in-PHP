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
        <style></style>
    </head>
    <body>
        <?php
        $book_weight=$_POST['book_weight'];
        $book_amount=$_POST['book_amount'];
        $ship_time=$_POST['shipping_time'];
        $ship_method=$_POST['shipping_method'];
        
        $total_weight=$book_weight*$book_amount;
        
        $total_cost=$total_weight*0.5;
        
        if($ship_time=="1-2"){
            $total_cost+=40;
        }
        else if($ship_time=="3-5"){
            $total_cost+=25;
        }
        else{
            $total_cost+=10;
        }
        if($ship_method=="sea"){
            $total_cost+=40;
        }else{
            $total_cost+=30;
        }
        
        echo "Total cost for the delivery: $ ". number_format($total_cost,2);
        ?>
    </body>
</html>
