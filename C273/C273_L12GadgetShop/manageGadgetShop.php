<?php
include("dbFunctions.php");

$items = array();
$query = "SELECT * FROM items order by item_id";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $items[] = $row;
}
mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gadget Shop</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://www.paypal.com/sdk/js?client-id=Aaz-ixY0DSu1iUab83OW50ZTCqHLO2xsarMMfMvp7VRts8ERmGD0EvV7mgg55sTt6YqYK0uvFe5FB3-k"></script>
        <style>
            form .error {
                color: #ff0000;
            }
        </style>
        <script>
            $(document).ready(function () {
                var count = 0;
                $("[name=add]").click(function () {
                    var list = JSON.parse(localStorage.getItem("itemList"));
                    if (list == null) {
                        list = [];
                    } else {
                        count = list.length + 1;
                    }
                    
                    $("#num").html(count);
                    var item = {
                        name: $("[name=itemname]").val(),
                        quantity: $("[name=itemqty]").val(),
                        price: $("[name=itemprice]").val()
                    };

                    list.push(item);
                    localStorage.setItem("itemList", JSON.stringify(list));
                    $('#item_modal').modal('hide');
                });
                var list = JSON.parse(localStorage.getItem("itemList"));
                if (list == null) {
                    list = [];
                } else {
                    count = list.length;
                }
                $("#num").html(count);
                $(".modalDisplay").click(function(){
                    var id = $(this).val();
                    $.ajax({
                        url: "getItemDetails.php",
                        type: "GET",
                        data: "id=" + id,
                        dataType: "JSON",
                        success: function (data) {
                            var name = data.name;
                            var price = data.price;
                            $("#item_modal [name=itemname]").val(name);
                            $("#item_modal [name=itemprice]").val(price);
                            $("[name=itemqty]").val("");
                            $('#item_modal').modal('show');
                        }
                    });
                });
                $(".checkout").click(function() {
                   window.location = './shoppingCart.html'; 
                });
            });

        </script>
    </head>
    <body>
        <div class="container">
            <h3>Gadget Shop</h3>
            <div id="cartBut">
                <button name="checkout" class="btn btn-danger checkout"><i class="fas fa-shopping-cart"></i>Checkout<span class="badge badge-light"><div id="num"></div></span> items</button>
            </div>

            <div id="msg"></div>
            <div id="products" class="row">
                <?php
                for ($i = 0; $i < count($items); $i++) {
                    ?>
                    <div class="col-3 mb-5">
                        <div class="card"><div class="card-body">
                                <div class="text-center">
                                    <img src="images/<?php echo $items[$i]["image"] ?>"/>
                                    <h4><?php echo $items[$i]["name"] ?></h4>
                                    <p class="text-primary"><?php echo $items[$i]["price"] ?></p>
                                    <button class="btn btn-success modalDisplay" value="<?php echo $items[$i]["item_id"] ?>">Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?> 
            </div> 
        </div>

        <!-- Bootstrap modal -->
        <div class="modal fade" id="item_modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Item Details</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label>Item Name</label>
                                <input name="itemname" class="form-control" type="text" readonly>                                   
                            </div>
                            <div class="form-group">
                                <label>Item Price</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">SGD</span>
                                    </div>
                                    <input name="itemprice" class="form-control" type="text" readonly>
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Item Quantity</label>
                                <input name="itemqty" class="form-control" type="number" value="1" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!--                            <div id="paypal-button-container"></div>
                                                        <div id="result"></div>-->
                            <button name="add" type="button" class="btn btn-success">Add to cart</button>
                        </div>
                    </div><!-- /.modal-body -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- End Bootstrap modal -->

    </body>
</html>
