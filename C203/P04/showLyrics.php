<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Your Lyrics</title>
        <style>
                        body{
                height: 600px;
                background-image: url('stave.png');
                background-size:100% 100% ;
                
            }
            </style>
    </head>
    <body>
        
        <?php
        $actionList=$_POST['action'];
        $lineList=$_POST['line'];
        
        if(isset($_POST['addword'])){
            $addWordArray=$_POST['addword'];
        }
        else{
            $addWordArray=[];
        }
        
        $lyrics="<h1>Come Sing with me</h1><br/>";
        for($i=0;$i<count($actionList);$i++){
            $lyrics .="<br/>";
            $lyrics .= strtoupper($actionList[$i]);
            $lyrics .=" " . strtolower($lineList[$i]);
            $lyrics .="<br/>";
            
            if(count($addWordArray)==2){
                if($i % 2==0){
                    $lyrics .="yeah";
                } else{
                    $lyrics .= "great";
                }
                $lyrics .= "<br/>";
            }
            else if(count($addWordArray)==1){
                $lyrics .=$addWordArray[0];
                $lyrics .= "<br/>";
            }
            
        }
        ?>
        <?php echo $lyrics; ?>
    </body>
</html>
