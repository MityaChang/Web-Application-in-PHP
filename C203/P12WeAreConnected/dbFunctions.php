<?php

if ($_SERVER['HTTP_HOST'] == "localhost")
{
    $username = "root"; 
    $password = "";       
    $db       = "c203_p12";  
} 
else
{ // SERVER homes.soi.rp.edu.sg 
    $username = "s19034275";  // Replace with your rp username with prefix with s e.g. s12345678
    $password = "a389e350"; // The password obtained after registering at http://homes.soi.rp.edu.sg/db/ 
    $db       = $username; 
}

$host = "localhost";
$link = mysqli_connect($host,$username,$password,$db) or 
        die(mysqli_connect_error());

?>
