<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome to Event Organizer!</title>
        <style>
            body{
                text-align: center;
                                height: 600px;
                background: linear-gradient(to bottom, #0099cc 0%, #ccffff 100%);
                
            }

            .button{
                background-color: #2BD824;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }

            h1{
                width: 500px;
                margin:0 auto;
                text-align: center;

                colour:
            }
            h2{
                width: 400px;
                margin:0 auto;
                text-align: center;

                colour:
            }
            h3{
                width: 400px;
                margin:0 auto;
                text-align: center;

                colour:
            }
        </style>
    </head>
    <body>

        <h1> Welcome to Event Organizer App!</h1>
        <h2>You can organize your fantastic event over here!<br></h2>
        <h3>Please fill in the form below</h3>
        <hr style="height:1px;width:500px;text-align: left;color:black;background-color:black"><br>
        <form action="resultPageP1.php" method="post">
            <h5>-----<label for="idEvent"><b>EVENT NAME</b><font color="red">*</font></label>-----<h5>
            <input type="text" id="idEvent" name="event" autofocus placeholder="Enter your event title" required><br/>
            <br>
            <hr style="height:1px;width:400px;text-align: left;color:black;background-color:black">
            
            <h5>-----<label for="id_Event_type"><b>EVENT TYPE<b><font color="red">*</font></label>-----</h5>
            <select id="id_Event_type" name="type">
                <option value="Corporate Meetings">Corporate Meetings</option>
                <option value="Conference">Conference</option>
                <option value="Banquets">Banquets</option>
            </select><br/>
            
            <br>
            <hr style="height:1px;width:400px;text-align: left;color:black;background-color:black">
            <h5>-----<label for="idDays">NUMBER OF DAYS TO BOOK<font color="red">*</font></label>-----</h5>
            <input type="number" id="idDays" size="2" min="0" max="6" name="days" placeholder="Days" required=""/><br/>
            
            <br>
            <hr style="height:1px;width:400px;text-align: left;color:black;background-color:black"><br>
            <input type="submit" class="button" value="SEND" id="btnSubmit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" class="button" value="CLEAR" id="btnReset">
            

    </body>
</html>
