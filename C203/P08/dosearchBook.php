<?php
$bookName = $_POST['bookName'];

$host = "localhost";
$username = "root";
$password = "";
$db = "c203_p08";

$Search = mysqli_connect($host, $username, $password, $db);

$searchBook = "Select b.title, c.name as category , b.pages, b.qty, b.rent_price 
        FROM books b
        INNER JOIN book_categories c ON c.c_id = b.c_id
        WHERE b.title LIKE '%$bookName%' 
        ORDER BY 2 asc";


$searchedResult = mysqli_query($Search, $searchBook);

while ($result = mysqli_fetch_assoc($searchedResult)) {
    $arrResult[] = $result;
}

mysqli_close($Search);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Books searched</title>
        <style>
            h2{
                text-align: center;
                font-style: oblique;
            }
            h1{
                text-align: center;
                font-style: oblique;
            }
            div{
                text-align: center;
                padding-left: 540px;
            }

        </style>
    </head>
    <body>
        <h2><a href="bookList.php">View Book List</a> | <a href="insertBook.php">Insert a New Book</a> | <a href="searchBook.php">Search Books</a></h2>
        <h1>Search Books - Titles containing '<?php echo $bookName; ?>':</h1>

        <div><?php
        if ($arrResult == NULL) {
            echo "No records are found";
        } else {
            ?>
            <table border="1">
                <tr>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Pages</th>
                    <th>Quantity</th>
                    <th>Rent Price</th>
                </tr>
                <?php
                for ($i = 0; $i < count($arrResult); $i++) {
                    ?>
                    <tr>
                        <td><?php echo $arrResult[$i]['title']; ?></td>
                        <td><?php echo $arrResult[$i]['category']; ?></td>
                        <td><?php echo $arrResult[$i]['pages']; ?></td>
                        <td><?php echo $arrResult[$i]['qty']; ?></td>
                        <td><?php echo $arrResult[$i]['rent_price']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        <?php } ?></div>
    </body>
</html>
