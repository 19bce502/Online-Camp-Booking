<?php
	
	include "conn.php";
	$id=$_GET['id'];
	$res=mysql_query("delete from reviews where id=$id");
	header("location:reviews.php");
?>