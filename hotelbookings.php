<html>
<head>
<title> Travel Pool </title>
<link href="style.css" rel="stylesheet">
</head>
<body bgcolor="#6699ff">
<center> <img src="tp,jpg.jpg" width="250px" height="150px"> </img> </center> <br>

<?php include('header.php'); ?>

<br>
<h1 style="text-align:center; font-size:65px">
<i><b>

Chalo trip pe chalte hain!!
</i></b>
</h1>

<br>
<form action="hotelbooking.php">
<center> <table>
<tr><td> Name: </td> <td> <input type="text" name="cust_name" required> </td></tr>
<tr><td> Contact Number: </td> <td> <input type="varchar" name="mob_num" required> </td> </tr>
<tr><td> E-Mail ID: </td> <td> <input type="text" name="Email" required> </td> </tr>
<tr><td> Check-In Date </td> <td> <input type="date" name="in_date" required> </td></tr>
<tr><td> Check-Out Date </td> <td> <input type="date" name="out_date" required> </td></tr>
<tr><td> Destination </td><td> <input type="text" name="dest" required> </td></tr>
<tr><td> Other Details </td><td> <input type="text" name="other" required> </td> </tr>
</table> </center>
<center> <input type="reset" name="button" value="Reset">
<input type="submit" name="button" value="Submit"> </center>
</form>
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
