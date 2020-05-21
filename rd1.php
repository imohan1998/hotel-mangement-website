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
		<div  style="background-image: url('img/bms1.jpg');background-size: 100% 1010px; width: 100%; height: 1000px;">
		<div id="header">
			<div id="logo">
				<h1><font color="white">Mk&pr hotel</font></h1>
			</div>
			<div id="cl"><input type="button" name="btn" id="btn"></div>
			<div id="nav">
				<ul id="a1">
					<li><a href="index.php">Home</a></li>
					<li><a href="contect.php">Contect Us</a></li>
					<li><a href="bms.php">Book my stay</a></li>
					<li><a href="rd.php"></a>ROOM RATES</li>
					<li><a href="#">Help</a></li>
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			<a href=".php"><h1 style="color:blue;text-align: center; ">ROOMS AND RATES</h1></a>
			<div style="background-color: rgba(255,255,255,0.6);">
			<table>
				<tr>
					
                     <th width="25%" height="50px">Room Type</th>
                     <th width="25%" height="50px">Price</th>
                     
<?php
                 $q1="select * from room where status='unbook'";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$rno=$row['rno'];
                 	$type=$row['type'];
                 	$price=$row['price'];
                 	$status=$row['status'];
                    ?>
                     
				<tr>
					<td width="25%" height="50px"><center><?php echo $type; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $price; ?></center></td>
</tr>
				
                <?php
			}		
				
			?>
			
			</table>
		</center>
		</div>
	
	
	
	</div>
  </div>
</body>

</html>