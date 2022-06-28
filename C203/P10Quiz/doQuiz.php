<?php
$pet = $_GET['pet'];
?>

<html>
    <body>
        <form action="doNext.php" method="post">
                        <?php if ($item === "dog") { ?>
            Canid<checkbox default="yes" id="pet">
                <?php } else { ?>
                        Canid <checkbox Name="dog"id="item">
            <?php } ?>
            <input type="checkbox" name="Canid" value="Canid" />
            <input type="submit" name="Submit" value="Submit" />

        </form>
    </body>
</html>
