<?php
$Name = $_GET["cust_name"];
$Contact = $_GET["mob_num"];
$EMail = $_GET["Email"];
$CheckIn = $_GET["in_date"];
$CheckOut = $_GET["out_date"];
$Destination = $_GET["dest"];
$other = $_GET["other"];

$conn = mysqli_connect("localhost", "root", "", "tp")
or die('Error connecting to MySQL server.');

$query = "INSERT INTO HotelBooking (`Name` , `Contact` , `E-Mail` , `Check-In` , `Check-Out` , `Destination` , `Other`) VALUES ('$Name', '$Contact', '$EMail', '$CheckIn', '$CheckOut', '$Destination', '$other');";


mysqli_query($conn, $query) or die(mysqli_error());



header('LOCATION: hotelbookingthankyou.php');
?>

