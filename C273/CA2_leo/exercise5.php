<?php
$labels = "'Manufacturing', 'Retail', 'Light Industry', 'Commuting', 'Orientation'";
$colours = "'red','orange','yellow','green','blue'";
$data = "10,20,30,40,50";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

                var doughnutChart = new Chart($("#doughnutChart"), {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                                data: [<?php echo $data ?>],
                                backgroundColor: [<?php echo $colours ?>],
                                label: 'Feedback Summary'
                            }],
                        labels: [<?php echo $labels ?>]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Chart.js Doughnut Chart'
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        }
                    }
                });

                var barChart = new Chart($("#barChart"), {
                    type: 'bar',
                    data: {
                        datasets: [{
                                data: [<?php echo $data ?>],
                                backgroundColor: "lightblue",
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

    </head>

    <body>

        <p>pie chart example 1.</p>
        <div id="canvas-holder" style="width:40%">
            <canvas id="pieChart" />
        </div>

        <p>doughnut chart example 2.</p>
        <div id="canvas-holder" style="width:40%">
            <canvas id="doughnutChart" />
        </div>

        <p>bar chart example 3.</p>
        <div id="canvas-holder" style="width:40%">
            <canvas id="barChart" />
        </div>


    </body>


</html>