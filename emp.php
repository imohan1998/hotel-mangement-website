<?php
include("connection.php");
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style_2.css">
	
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/s.jpg'); height: 1200px;">
		<div id="header">
			<div id="logo">
				<h1><font color="white">MANAGEMENT</font></h1>
			</div>
			<div id="nav">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="contect.php">Contect Us</a></li>
					<li><a href="emd.php">employe detials</a></li>
					<li><a href="our.php">Our Hotel</a></li>
					<li><a href="rd1.php">ROOMS RATE</a></li>
				</ul> 
			</div>
		</div>
		<div id="banner">
			<div id="form">
				<form action="emp.php" method="post">
			<table style="color: white;font size="4";">
				<?php
				  $q1="select * from emp ";
                        $run=mysqli_query($a,$q1);
                        $row=mysqli_fetch_array($run);
                         

                       
                        	?>
                        	
				<tr>
					<td><h3>Name</td>
					<td><input type="text" name="name" placeholder="Enter Name" title="Name"></td>
					
				</tr>
				
				<tr>
					<td><h3>address</td>
					<td><select name="address">
						<option>--select--</option>
						
<option>Mumbai</option>
<option>hyderabad</option>						<option>Delhi</option>
<option>chennai</option>						<option>Bengrulu</option>
<option>thiruvanathpuram</option>

					</select></td>
				</tr>
				
				<tr>
					<td><h3>State</td>
					<td><select name="state">
						<option>--select--</option>
						<option>Maharashtra</option>
						<option>Delhi</option>
<option>andhra pradesh</option>
<option>karnataka</option>
<option>telagana</option>
<option>kerala</option>						<option>tamil nadu</option>
					</select></td>
				</tr>
				<tr>
					<td><h3>Enter E-mail</td>
					<td><input type="text" name="email" placeholder="Enter E-mail" title="E-mail"></td>
				</tr>
				<tr>
					<td><h3>Work Type</td>
					<td><input type="text" name="work" placeholder="work type" title="work type"></td>
					
				</tr>
				<tr>
					<td><h3>Enter Salary</td>
					<td><input type="integer" name="salary" placeholder="Enter Members" title="salary"></td>
				</tr>
				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>
				</td>

                  
				</h3>
				
			</table>
		</form></form>
		<?php
        if(isset($_POST['submit']))
        {
        	$name=$_POST['name'];
        	$address=$_POST['address'];
            
        	
        	$state=$_POST['state'];
           $email=$_POST['email'];
            $work=$_POST['work'];
        	$salary=$_POST['salary'];
        		 


        		if(mysqli_query($a,"insert into emp(name,email,address,state,work,salary) value('$name','$email','$address','$state','work','$salary')"))
        		{
        			/*$run1=mysqli_query($a,"select *from f1  where idno=$idno");$row1=mysqli_fetch_array($run1);$id=row1['id'];*/

header("Location:emd.php");

        		}
         		else
        		{
        			echo "data not insert";
        		}
       }
       
		?>			</div>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>