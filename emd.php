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
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 710px; width: 100%; height: 1000px">
		<div id="header">
			<div id="logo">
				<h1><font color="white">Management</font></h1>
			</div>
			<div id="cl"><input type="button" name="btn" id="btn"></div>
			<div id="nav">
				<ul id="a1">
					<li><a href="ahome.php">Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="rd.php">Room Dateils</a></li>
					<li><a href="pay.php">payment</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			<a href="https://mail.google.com/mail/u/0/#sent?compose=new"><h1 style="color:blue;text-align: center; ">SEND  EMAIL </h1></a>

			<div style="background-color: rgba(255,255,255,0.6);">
			<table>

				<tr><th width="10%" height="50px">EMPLOYE ID</th>
					<th width="10%" height="50px">EMPLOYE Name</th>
                     <th width="10%" height="50px">Address</th>
                     <th width="10%" height="50px">State</th>
                     <th width="10%" height="50px">EMAIL</th>
                     <th width="10%" height="50px">WORK TYPE</th>
                     <th width="10%" height="50px">SALARY</th>
                     
<th width="10%" height="50px"> OPTION</th>
				</tr>
				<?php
                 $q1="select * from emp";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {      $id=$row['empid'];
                 	$name=$row['name'];
                 	$salary=$row['salary'];
                 	$work=$row['work'];
                 	$address=$row['address'];
                   	$state=$row['state'];
                        $email=$row['email']; 
                     	
                ?>

				<tr>
					<td width="10%" height="50px"><center><?php echo $id; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $name; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $address; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $state; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $email; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $work; ?></center></td>
					<td width="10%" height="50px"><center><?php echo $salary; ?><center></td>

					
<td><center><a style="color: red" href="edel.php?id=<?php echo $id; ?>" >DELETE</a></center></td>
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