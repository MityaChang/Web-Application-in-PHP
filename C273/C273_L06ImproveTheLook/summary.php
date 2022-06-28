<?php
include("dbFunctions.php");

// create query
$queryList = "SELECT * FROM feedbacks ORDER BY last_visit desc";

// execute query
$resultList = mysqli_query($link, $queryList) or
        die("Error in query: $query. " . mysqli_error($link));

$query = "SELECT rating, COUNT(rating) FROM feedbacks GROUP BY rating";

// execute query
$result = mysqli_query($link, $query) or die("Error in query: $query. " . mysqli_error($link));

//create an array
$total_ratings = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0);

while ($row = mysqli_fetch_array($result)) {
    $total_ratings[$row['rating']] = $row['COUNT(rating)'];
}

//populate the variables below
$labels = "'Need Improvement', 'Okay', 'Good', 'Very Good', 'Excellent'";
$colours = "'red','orange','yellow','green','blue'";
$data = $total_ratings[1].",".$total_ratings[2].",".$total_ratings[3].",".$total_ratings[4].",".$total_ratings[5];
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Pie and Donut Charts</title>
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/Chart.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                var pieChart = new Chart($("#pieChart"), {
                    type: 'pie',
                    data: {
                        datasets: [{
                                data: [<?php echo $data ?>],
                                backgroundColor: [<?php echo $colours ?>],
                                label: 'Feedback Summary'
                            }],
                        labels: [<?php echo $labels ?>]
                    },
                    options: {
                        responsive: true
                    }
                });


            });
        </script>
        <style>
            body{
                text-align: center;
            }
            #canvas-holder{
                margin-left: 500px;
            }
        </style>
    </head>

    <body>
        <?php
        include("navbar.php");
        ?>
        <div class="container">
            <h3>Rating Distribution</h3>
            <?php
            for ($i = 1; $i <= count($total_ratings); $i++) {
                if ($total_ratings[$i] == 1) {
                    echo "There is 1 user who rated star " . $i;
                } else {
                    echo "There are " . $total_ratings[$i] . " users who rated star " . $i;
                }
                echo "<br />";
            }
            ?>
        </div>
        <div id="canvas-holder" style="width:40%">
            <canvas id="pieChart" />
        </div>
    </body>
</html>
