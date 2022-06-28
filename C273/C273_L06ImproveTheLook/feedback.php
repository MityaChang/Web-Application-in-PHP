<!DOCTYPE html>
<html>
    <head>
        <title>Give Feedback</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css"> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/Chart.bundle.min.js" type="text/javascript"></script>
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery.raty.min.js" type="text/javascript"></script>
        <script type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                var areaname = ["Woodlands", "Marsiling", "ChinaTown", "Orchard", "Jurong East", "Paya Lebar", "CityHall", "Sommerset"];
                $("#id_area").autocomplete({
                    source: areaname
                });
                $("#id_last_visit").datepicker({minDate: -730, maxDate: "+0D", dateFormat: "dd/mm/yyyy"});
                $("#slider").slider({
                    value: 0,
                    min: 0,
                    max: 5,
                    step: 1,
                    slide: function (event, ui) {
                        $("#id_num").val(ui.value);
                    }
                });
                $("#id_num").val($("#slider").slider("value"));
                $.fn.raty.defaults.path = 'js/img';
                $('#id_rating').raty({
                    cancel: false,
                    scoreName: 'rate_us',
                    number: 5, //change to 5
                    score: 2
                });
                $("form").validate({
                    rules: {
//                        Additional Challenge 1
                        visitor_name: {
                            required: true,
                            minlength: 2,
                            pattern: /^[a-zA-Z0-9._]{2,}$/
                        },
                        area: {
                            required: true
                        },
                        vistor_comments: {
                            required: true,
                            maxlength: 200
                        },
                        last_visit: {
                            required: true,
                            pattern: /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
                        },
                        Email:{
                            required:true,
                            pattern: /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/
                        }
                    },
                    messages: {
                        visitor_name: {
                            required: "Please enter your name",
                            minlength: "Please enter at least 2 characters"
                        },
                        area: {
                            required: "Please enter your area."
                        },
                        vistor_comments: {
                            required: "Please enter your comments",
                            maxlength: "Please enter less than 200 characters"
                        },
                        last_visit: {
                            required: "Please enter your last vist",
                            pattern: "Please enter in the correct format DD/MM/YYYY"
                        },
                        Email:{
                            required:"Please enter your email",
                            pattern: "Please enter your email in the correct format"
                        }
                    },
                    submitHandler: function () {
                        return true;
                    }
                });
            });
        </script>
    </head>
    <body>
        <?php
        include("navbar.php");
        ?>
        <div class="container">
            <h3>Light Central Library was opened on 4 February 2013<br/>
                Please help us improve by sharing your feedback!<br/>
            </h3>
            <form id="defaultForm" action="doFeedback.php" method="post">
                <div class="form-group">
                    <label for="id_name">Name<a style="color: red">*</a>:</label>
                    <input type="text" class="form-control" id="id_name" name="visitor_name" required>
                </div>
                <div class="form-group">
                    <label for="id_area">Area<a style="color: red">*</a>:</label>
                    <input type="text" class="form-control" id="id_area" name="area" required pattern="\w{2,}">
                </div>
                <div class="form-group">
                    <label for="id_last_visit">Last Visit<a style="color: red">*</a>:</label>                      
                    <input id="id_last_visit" type="text" class="form-control" name="last_visit" required pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}">                           
                </div>
                <div class="form-group">
                    <label for="id_num">Average books borrowed per visit</label>
                    <input id="id_num" type="text" class="form-control" name="num_books" required>
                    <div id="slider"></div>
                </div>
                <div class="form-group">
                    <label for="id_rating">Rate Us:</label>
                    <div class="target-demo" id="id_rating"></div>
                </div>

                <div class="form-group">
                    <label for="id_comments">Comments<a style="color: red">*</a>:</label>
                    <textarea id="id_comments" class="form-control" name="visitor_comments" rows="5" cols="20"></textarea>
                </div>
                <!--Addtional Challenge 2-->
                <div class="form-group">
                    <label for="id_email">Your E-mail<a style="color: red">*</a>:</label>
                    <input id="id_email" class="form-control" name="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </body>
</html>