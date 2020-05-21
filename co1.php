
<?php
include("connection.php");
$rno=$_GET['rno'];
if(mysqli_query($a,"update room set status='book' where rno=$rno"))
{


$q1="select * from room where rno=$rno";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$rno=$row['rno'];
                 	$type=$row['type'];
                 	$price=$row['price'];

        		mysqli_query($a,"insert into pay(name,rno,type,price,email,codate,m) value('$name','$rno','$type','$price','$email','$coout','$m')");
        			header("Location:rd.php");
        		
       }

       
       
}				

	


?>
