<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	
	
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 1010px; width: 100%; height: 1000px;background-repeat: repeat">
		<div id="header">
			<div id="logo">
				<h1><font color="white">Mk&pr hotel</font></h1>
			</div>
			<div id="cl"><input type="button" name="btn" id="btn"></div>
			<div id="nav">
				<ul id="a1">
					<li><a href="ahome.php">Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="rd.php">Room Dateils</a></li>
					<li><a href="pay.php">PAYMENT</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			<a href="ahome.php"><h1 style="color:red;text-align: center; ">PAYMENT & BILL</h1></a>
			<div style="background-color: rgba(255,255,255,0.6);">
			<table>
				<tr>
					<th width="25%" height="50px">Room No</th>
                     <th width="25%" height="50px">Room Type</th>
                     <th width="25%" height="50px">Price</th>
                     <th width="25%" height="50px">Status</th>
                     <th width="25%" height="50px">BILL</th>
				</tr>
				<?php
                 $q1="select * from room where status='book'";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$rno=$row['rno'];
                 	$type=$row['type'];
                 	$price=$row['price'];
                 	$status=$row['status'];
                   
                ?>
				<tr>
					<td width="10%" height="50px"><center><?php echo $rno; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $type; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $price; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $status; ?></center></td>
					<td><a style="color: blue" href="bill.php? rno=<?php echo $rno; ?>" >PRINT</a> </td>
				</tr>
				<?php
			}
				?>
			</table>
		</center>
		</div>
	<center>
	
	</center>
	</div>
  </div>
</body>

</html>