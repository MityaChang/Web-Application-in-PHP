<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <link href="stylesheets/bookServiceStyleSheet.css" rel="stylesheet" type="text/css"/>
    <img src="images/Service Banner.jpg" alt=""/>
    <title>Andy's Car service booking</title>
</head>
<body>
    <hr style="height:1px;width:500px;text-align: left;color:black;background-color:black">
    <br>
    <div id='head'>
        <!--Using list to represent the tags-->
        <li><h1> Andy's car Servicing Company </h1></li>
        <li><p>The best car service Company</p><li>
    </div>
    <br>
    <hr style="height:1px;width:500px;text-align: left;color:black;background-color:black">
    <h3>Booking Details</h3> 
    <!--form submission-->
    <form action="doBookService.php" method="post">
        <label>Name: </label>
        <br/>
        <input class="inv" type="text" name="user" required/>
        <br/><br/>
        <label>Service Centre: </label>
        <br/>
        <select name="centre" class="inv">
            <option value="Paya Lebar">Paya Lebar</option>
            <option value="Ang Mo Kio">Ang Mo Kio</option>
            <option value="Bishan">Bishan</option>
        </select>
        <br/><br/>
        <label>Service Date: </label>
        <br/>
        <input class="inv" type="date" name="service_date"required/>
        <br/><br/>
        <label>Service Request: </label>
        <br/>
        <textarea class="inv" rows="3" cols="30" name="service_request"required></textarea>
        <br/><br/>
        <input type ="submit" value ="Book" class='button'>

    </form>
</body>
</html>
