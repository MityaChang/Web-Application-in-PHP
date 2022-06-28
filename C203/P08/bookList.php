<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

$Display = mysqli_connect($host, $username, $password, $db);
if (!$Display) {
    die("Could not connect: " . mysqli_connect_error($link));
}
//echo "Connected successfully";

$querySelect = "SELECT b.title, c.name, b.pages, b.qty, b.rent_price
               FROM books b
               INNER JOIN book_categories c ON c.c_id = b.c_id 
               ORDER by 2 asc";

$resultDisplay = mysqli_query($Display, $querySelect)
        or die("Query error: $querySelect. " . mysqli_error($Display));

while ($selectRow = mysqli_fetch_assoc($resultDisplay)) {
    $arrResult[] = $selectRow;
}
mysqli_close($Display);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Book List</title>
        <style>
            tr:nth-child(even) {background: lightgreen}
            tr:nth-child(odd) {background: lightyellow}

            table {
                border-collapse: collapse;
            }

            table th td{
                border: 1px solid black;
            }
            h2{
                text-align: center;
            }
            h1{
                text-align: center;
            }
            div{
                text-align: center;
                padding-left: 500px;
            }
            

        </style>
    </head>
    <body>
        <h2><a href="bookList.php">View Book List</a> | <a href="insertBook.php">Insert a New Book</a> | <a href="searchBook.php">Search Books</a></h2>

        <h1><u>Books for Rent</u></h1>

        <div><table border="1">
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Pages</th>
                <th>Quantity</th>
                <th>Rent Price</th>
            </tr>
            <?php
            // put your code here
            for ($i = 0; $i < count($arrResult); $i++) {
                ?>  
                <tr>
                    <td><?php echo $arrResult[$i]['title']; ?></td>
                    <td><?php echo $arrResult[$i]['name']; ?></td>
                    <td><?php echo $arrResult[$i]['pages']; ?></td>
                    <td><?php echo $arrResult[$i]['qty']; ?></td>
                    <td><?php echo $arrResult[$i]['rent_price']; ?></td>
                </tr></div>
                <?php
            }
            ?>
                </div>
    </body>
</html>
