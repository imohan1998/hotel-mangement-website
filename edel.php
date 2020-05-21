<?php 
include("connection.php");
$id=$_GET['id'];
if(mysqli_query($a,"delete from emp where empid=$id"))
{
	header("Location:emd.php");
}
 			
?>