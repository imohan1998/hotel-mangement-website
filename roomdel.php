<?php
include("connection.php");
$rno=$_GET['id'];
if(mysqli_query($a,"delete from room where rno=$rno"))
{
	header("Location:rd_2.php");
}
?>