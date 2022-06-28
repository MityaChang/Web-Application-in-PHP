<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap 4 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                $("form").submit(function () {

                    var bookWt = $("[id=weight]").val();
                    var bookAmt = $("[id=number]").val();
                    var shipMtd = $("[name=method]").val();
                    var shipTime = $("[name=time]:checked").val();
                    var message = "";
                    message += "Book Weight (kg): " + bookWt + "\n";
                    message += "Number of books: " + bookAmt + "\n";
                    message += "Method: " + shipMtd + "\n";
                    message += "Shipping options (days): " + shipTime + "\n";
                    //calculation of cost 
                    var totalCost = bookWt * bookAmt * 0.5;

                    if (shipMtd == "air") {
                        totalCost += 30;
                    } else {
                        totalCost += 40;
                    }

                    if (shipTime == "1-2") {
                        totalCost += 40;
                    } else if (shipTime == "3-5") {
                        totalCost += 25;
                    } else {
                        totalCost += 10;
                    }

                    message += "\nExtra additions: ";
                    $("[name='addition[]']:checked").each(function () {
                        var extra = $(this).val();
                        message += extra + " ";
                        if (extra == "better box") {
                            totalCost += 10;
                        } else if (extra == "weekend delivery") {
                            totalCost += 15;
                        } else if (extra == "gift wrap") {
                            totalCost += 15;
                        } else {
                            totalCost += 45;
                            message += "\nYou have selected all extra services";
                        }
                    });
                    //Further challenge part 1
                    var allChecked = $('[type=checkbox]:checked').length;
                    if (allChecked == 3) {
                        alert("You have selected all extra services");
                    }
                    //Further challenge part 2
                    if (bookAmt > 3) {
                        totalCost *= 0.85;
                    } else {
                        totalCost *= 0.9;
                    }

                    message += "\n\n The total shipping cost is $" + totalCost.toFixed(2);
                    var strconfirm = confirm(message);
                    if (strconfirm == false) {
                        $("form").trigger("reset");
                        return false;
                    } else {
                        return true;
                    }
                });
            });
        </script>
        <style>
            h1{
                text-align: center;
            }
            .center{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
        </style>
    <img src="img/shipping.jpg" alt="" class="center"/>
</head>
<body>
    <div class="container">
        <hr>
        <h1>Shipping Cost Calculator</h1>
        <hr>
        <form method="post" action="doShipCostCalculator.php">
            <div class="form-group">
                <label for="weight">Book weight(in kg)<a style="color: red">*</a>:</label>
                <input type="text" class="form-control" name="weight" required id="weight ">
            </div>

            <div class="form-group">
                <label for="number">Number of book to buy<a style="color: red">*</a>:</label>
                <input type="text" class="form-control" name="number" required id="number ">
            </div>

            <div class="form-group">
                <label>Shipping Time</label><a style="color: red">*</a>:
                <input type="radio" name="time" id="short" value="1 - 2" checked><label for="short"> 1 - 2 days</label>
                <input type="radio" name="time" id="medium" value="3 - 5"><label for="medium"> 3 - 5 days</label>
                <input type="radio" name="time" id="long" value="6 - 9"><label for="long"> 6 - 9 days</label>
            </div>

            <div class="form-group">
                <label>Shipping method</label><a style="color: red">*</a>:
                <select class="form-control" name="method">
                    <option id="methodAir" value="air">Air</option>
                    <option id="methodSea" value="sea">Sea</option>
                </select>
            </div> 

            <div class="form-group">
                <label for="id_coke">Extra addition:</label>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input onclick="allSelected()" type="checkbox" id="better_box" name="addition[]" value="better box" class="form-check-input"/>better box
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input onclick="allSelected()" type="checkbox" id="weekend_delivery" name="addition[]" value="weekend delivery" class="form-check-input"/>weekend delivery
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input onclick="allSelected()" type="checkbox" id="gift_wrap" name="addition[]" value="gift wrap" class="form-check-input"/>gift wrap
                    </label>
                </div>
            </div>
            <input type="submit" id="calculate" class="btn btn-info btn-block" value="Calculate"/>
        </form>
    </div>


</body>
</html>
