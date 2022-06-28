<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="CSS/problemStylesheet.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
        <style>
            textarea{
                min-width: 50%;
                max-width: 73%;
                min-height: 20px;
                max-height: 60px;
            }
            .button{
                height: 40px;
                background-color: darkblue;
                color:white;
                font-size: 20px;
                border-radius: 50px;
            }
            

        </style>
    </head>
    <body>

        <form name="frmContant" method="post" action="doContact.php">
            <h1>Contact Form :</h1>
            <div id="orange">
            Your name: <input id="idName" type="text" name="name" placeholder="e.g.Shawn"/>
            <br/>
            Email Address: <input id="idEmail" type="email" name="email" placeholder="xxxx@xxmail.com" />
            <br/>
            Subject:<input id="idSubject" type="text" name="subject" />
            <br/></div>
            <br/>
            <div id="blue">
            Message:
            <br/>
            <textarea id="idFeedback" rows="8" cols="20" name="feedback"  ></textarea>
            <br/><br/></div><br/>
            <input type="submit" value="Submit Form" class="button"id="submission"/>
        </form>

        <?php
        // put your code here
        ?>
    </body>
</html>
