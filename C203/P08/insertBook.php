<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

$Insert = mysqli_connect($host, $username, $password, $db);

$queryCat = "SELECT * FROM book_categories";

$resultCat = mysqli_query($Insert, $queryCat);

while ($row = mysqli_fetch_array($resultCat)) {
    $arrCat[] = $row;
}

mysqli_close($Insert);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Book Rental</title>
        <style>
            h2{
                text-align: center;
                font-style: oblique;
            }
            h1{
                text-align: center;
            }
            form{
                font-size: 15px;
                font-weight: bold;
            }
             div{
                text-align: center;
                padding-left: 600px;
            }
            .button{
                 height: 40px;
                background-color: lightgreen;
                color:white;
                font-size: 20px;
                border-radius: 50px;
            }
            </style>
    </head>
    <body>
        <h2><a href="bookList.php">View Book List</a> | <a href="insertBook.php">Insert a New Book</a> | <a href="searchBook.php">Search Books</a></h2>
        
        <h2><u>Insert a New Book</u></h2>
        <div><form method="post" action="doInsertBook.php">
            <table>
                <tr>
                    <td width="40"><label for="idTitle">Title:</label></td>
                    <td><input type="text" id="idTitle" name="title"  /></td>
                </tr>
                <tr>
                    <td><label for="idCat">Category:</label></td>
                    <td>
                        <select id="idCat" name="category">
                            <?php
                            for ($i = 0; $i < count($arrCat); $i++) {
                                ?>
                                <option value="<?php echo $arrCat[$i]['c_id']; ?>">
                                    <?php echo $arrCat[$i]['name']; ?>
                                </option>
                                <?php } ?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="idPages">Number of pages:</label>
                    </td>
                    <td>
                        <input type="text" id="idPages" name="pages" size="10" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="idQty">Quantity:</label>
                    </td>
                    <td>
                        <input type="text" id="idQty" name="quantity" size="10"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="idRent">Rent Price:</label>
                    </td>
                    <td>
                        <input type="text" id="idRent" name="rent" size="10"/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="button" type="submit" value="SUBMIT"></td>
                </tr>
            </table>
        </form></div>
    </body>
</html>
