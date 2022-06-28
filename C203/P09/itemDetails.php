<?php
include "dbFunctions.php";

$theID=$_GET['id'];

$query="select * from items where id=$theID";
$result= mysqli_query($link, $query) or die(mysqli_error($link));
$row= mysqli_fetch_array($result);
if(!empty($row)){
    $item=$row['name'];
    $descrption=$row['description'];
    $sold=$row['date_sold'];
    $quality=$row['quality'];
    $price=$row['price'];
    $image=$row['image'];
}
?>

<?php if(!empty($item)){?>
<div style="width:350px;">
    <b>Item Name:</b><?php echo $item?><br/>
    <b>Description:</b><?php echo $descrption?><br/>
    <b>Date sold:</b><?php echo $sold?><br/>
    <b>Quality:</b><?php echo $quality?><br/>
    <b>Price:</b><?php echo $price?><br/>
    <img src="itemPics/<?php echo $image ?>" width="200"/>
    </div>
<?php } ?>
