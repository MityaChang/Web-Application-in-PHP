<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>Table cell 1</td><td>Table cell 2</td>
            </tr>
        </table>

        <br/>
        
        <?php
        $upperLimit=7;
        ?>
        
        <table border="1">
            <tr>
                <th>Table header</th><th>Table header</th>
            </tr>
            <?php
            for($i=0;$i<$upperLimit;$i++){
            ?>
            <tr>
                <td>Table cell</td><td>Table cell</td>
            </tr>
            <tr>
                <td>Table cell</td><td>Table cell </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>
