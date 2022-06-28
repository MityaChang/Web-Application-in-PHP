<?php
$num=$_POST['num'];
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
//$theme=$_POST['theme'];
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                height: 600px;
                background-image: url('stave.png');
                background-size:100% 100% ;
                
            }
            .button{
                background-color: #24A6CB;
                border: none;
                color: white;
                padding: 5px 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }
            </style>
    </head>
    <body>
        <h2> Create Your Lyrics </h2>
        <hr/>
        <form action="showLyrics.php" method="post">
            
        <?php
        for($i=1;$i<=$num;$i++){
            ?>
            <label>Create verse <?php echo $i; ?>: </label>
            <select name="action[]">
                <option value="Wish you">Wish you</option>
                <option value="I'd like to">I'd like to</option>
                <option value="Let's do">Let's do</option>
            </select>
            
            &nbsp;
            <input type="text" size="23" name="line[]"/>
            <br/>
        <?php } ?>
            <p>Additional words for verses:<br/></p>
            <input type="checkbox" name="addword[]" value="yeah"/>Yeah
            <input type="checkbox" name="addword[]" value="Great"/>Great
            <input type="checkbox" name="addword[]" value="yah"/>Yah
            <input type="checkbox" name="addword[]" value="yeet"/>YEET
            <br/><br/>
            
            <input type="submit" class="button" value="Submit">
        </form>
        
    </body>
</html>
