<?php 
include("connection.php");
$id=$_GET['id'];
if(mysqli_query($a,"delete from f1 where id=$id"))
{
	header("Location:booking.php");
}
 			
?>