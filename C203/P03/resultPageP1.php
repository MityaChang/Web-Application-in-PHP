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
        <style>
        body{
                text-align: center;
                                height: 600px;
                background: linear-gradient(to bottom, #0099cc 0%, #ccffff 100%);
                
                
            }
            </style>
    </head>
    <body>
        <?php echo "<h1> Event Organizer</h1> <hr/>";
        
        $title=$_POST['event'];
        $type=$_POST['type'];
        $days=$_POST['days'];
        
        
        $totalCost=0.0;
        $message="";
        if(!empty($title)){
            $message .="Event Title: <br/><b>" . $title . "</b><br/>";
        }
        if(isset($type)){
            $message .="Event Type:<br/><b><font colour='green'>  $type</font></b><br/>";
            
            if($type=="Corporate Meetings"){
                $totalCost+=70;
            }
            else if($type=="Conference"){
                $totalCost+=80;
            }
            else{
                $totalCost+=120;
            }
        }
        
        if(!empty($days)){
            $message .="No of Days:<br/><b> $days</b><br/>";
            $totalCost+=$days*500;
        }
        if($days>3){
            $totalCost=0.9*$totalCost;
        }
        
        $message .="Total cost: <br><b>$". number_format($totalCost,2);
        
        echo $message;
        
        ?>
        <br/><br/>
        <a href="formPageP1.php">Go back to the form page</a>
    </body>
</html>
