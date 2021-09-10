<html>
<head>
<title> Travel Pool </title>
<link href="style.css" rel="stylesheet">
</head>
<body bgcolor="#6699ff">
<center> <img src="tp,jpg.jpg" width="250px" height="150px"> </img> </center> <br>

<?php include('header.php'); ?>
<br>
<h1 style="text-align:center; font-size:100px">
<i><b>
Chalo trip pe chalte hain!!
</i></b>
</h1>

<br>
<br>
<br> <center>
<?php
$conn = mysqli_connect("localhost", "root", "", "tp")
or die('Error connecting to MySQL server.');

$keywords = $_GET['searchbox'];
$query = "SELECT * FROM `profile` WHERE
					`Name` LIKE '%$keywords%'" ;

$result = mysqli_query($conn, $query) or die("Error");

echo "<table style=width:30% border=1 px>
		<tr>
		<th> Name </th>
		<th> Contact </th>
		<th> E.MailID </th>
		</tr>
		";
		
while($row = mysqli_fetch_array($result)){
	echo " <tr> <td><i>".$row['Name']."</i></td>
	<td><i>".$row['Contact']."</i></td>
	<td><i>".$row['E.MailID']."</i></td></tr>";
}
	echo "</table>";




?>
</center>
<br>
<br>
<br>
<br>
<table style="background-color:#FFA07A;width:25%">
<tr> <td> <b> <u> <i> Reservations and Contact Details </i> <u> </b> </td> </tr>
<tr>
<td> Contact Number: 8955137400 </td> </tr>
<tr>
<td> Email Id: <u> travelpooljaipur@gmail.com </u> </td> </tr>
<tr> <td> Address: 48, Shivaji Nagar, Jhotwara, Jaipur </td> </tr>
</table>
<center> <h1 style="color:red"> <u style="color:red"> TRAVEL POOL </u> </h1> </center>
</body>
</html>
