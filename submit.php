<?php


$Name = $_POST["my_name"];
$Contact = $_POST["my_num"];
$EMail = $_POST["my_mail"];


$conn = mysqli_connect("localhost", "root", "", "tp")
or die('Error connecting to MySQL server.');

$query = "INSERT INTO profile (`Name` , `Contact` , `E.MailID`) VALUES ('$Name', '$Contact', '$EMail');";
mysqli_query($conn, $query) or die(mysqli_error());


$fname = $_FILES['inputfile']['name'];
$fsize = $_FILES['inputfile']['size'];
$ftype = $_FILES['inputfile']['type'];
$tmp = $_FILES['inputfile']['tmp_name'];
$targetpath = "upload/".$fname;

move_uploaded_file($tmp,$targetpath);



header('LOCATION: hotelbookingthankyou.php');


?>