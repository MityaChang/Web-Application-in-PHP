
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search Books</title>
        <style>
            h2{
                text-align: center;
                font-style: oblique;
            }
            h1{
                text-align: center;
                font-style: oblique;
            }
            form{
                font-size: 15px;
                font-weight: bold;
                text-align: center;
            }
            a{
                font-size: 20px;
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
        <h2><a href="bookList.php">View Book List</a> | <a href="insertBook.php">Insert a New Book</a> | <a href="searchBook.php">Search Books</a></h2>
        
         <h1>Search Books</h1>
         
         <form method="post"action="dosearchBook.php">
             <a>Book Name contains:</a></br>
             <input type="text" name="bookName" placeholder="E.g. th" >
             <br/><br/>
             <input class="button" type="submit" value="SEARCH">
         </form>
            <?php
        // put your code here
        ?>
    </body>
</html>
