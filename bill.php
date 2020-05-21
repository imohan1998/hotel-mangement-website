<?php
include("connection.php");
$rno=$_GET['rno'];
?>
<DOCTYPE html>
<html>
<head>
<title>bill</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="welcome"><hr>
<h1 align="center">PAYMENT BILL</h1>
<hr>
<font size="4">
<h2>MK&PR HOTEL</h2><img src="img/sun.jpg" width="20%";><br>
#345/cc,5th cross,5th main road,<br>
LN colony ,yeshwanthpur,<br>banglore-56<br>
<br><br>
<hr>
<table>
				<tr>

					<th width="10%" height="50px">ROOMS NO</th>
                     <th width="10%" height="50px">ROOM TYPE</th>
                     <th width="10%" height="50px">PRICE</th>
                     <th width="10%" height="50px">GST%</th>
<th width="10%" height="50px">SERVES CHARGES</th>
                     <th width="10%" height="50px">TOTLE PRICE</th><hr>
                     
				</tr>
				<?php
$s=mysqli_query($a,"select status from room where rno='$rno'");

                 $q1="select * from pay where rno='$rno'";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {

                        $name=$row['name'];
$email=$row['email'];
$codate=$row['codate'];
$m=$row['m'];
                 	$rno=$row['rno'];
                 	$type=$row['type'];
                 	$price=$row['price'];
$gst=$row['price']*0.18;
$serves=$row['price']*0.10;
                        $totle=$row['price']+$serves+$row['price']*0.18;
                        
                        
mysqli_query($a,"update room set status='unbook' where rno=$rno");

                	
                   
                ?>
				<tr>
					<td width="25%" height="50px"><center><?php echo $rno; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $type; ?></center></td>
					<td width="25%" height="50px"><center><?php echo $price; ?></center></td>
<td width="25%" height="50px"><center><?php echo $gst; ?></center></td>

<td width="25%" height="50px"><center><?php echo $serves; ?></center></td>

<td width="25%" height="50px"><center><?php echo $totle; ?></center></td>
					</tr>
<?php
}
?>
</table>
<hr><hr>
<br>
<center><a href="print.php? rno=<?php echo $rno; ?>"><h2><font color="red">PRINT</font></h2></a>
</font>