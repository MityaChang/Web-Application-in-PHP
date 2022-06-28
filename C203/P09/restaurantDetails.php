<?php
include "dbFunctions.php";

$theID = $_GET['id'];

$query = "select * from restaurants where rest_id=$theID";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$row = mysqli_fetch_array($result);
if (!empty($row)) {
    $resname = $row['name'];
}
?>

<?php if (!empty($resname)) { ?>
    Restaurant Name:<?php echo $resname ?>
<?php } ?>
