<!DOCTYPE html>
<html>
<head>
	<title>BMS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 910px; width: 100%; height: 800px">
		<div id="header">
			<div id="logo">
				<h1><font color="white">MK&PR HOTEL</font></h1>
			</div>
			<div id="cl"><input type="button" name="btn" id="btn"></div>
			<div id="nav">
				<ul id="a1">
					<li><a href="index.php">Home</a></li>
					<li><a href="contect.php">Contect Us</a></li>
					<li><a href="bms.php">BOOK MY STAY</a></li>
					<li><a href="our.php">Our Hotel</a></li>
					<li><a href="rd1.php">avalabel rooms and rates</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"></div>
	<center>
	<div style="background:rgba(255,255,255,.5); width: 80%;">
	<form action="r1.php" method="get">	
		<table>
			<tr>
				<th width="20%" height="50px">Destination</th>
				<th width="20%" height="50px">Check In Date </th>
				<th width="20%" height="50px">Check Out Date</th>
				<th width="20%" height="50px">Room</th>
				<td rowspan="2"><input type="submit" name="sub" value="Check"></td>
			</tr>
			<tr>
				<td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter Destination"></center></td>
				<td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
				<td width="20%" height="50px"><center><input type="date" name="co"></center></td>
				<td width="20%" height="50px">
					<center><select name="room">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select></center>
				</td>
			</tr>
		</table>
	</from>
	</div>
	</center>
	</div>
  </div>
</body>

</html>