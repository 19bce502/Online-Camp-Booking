<?php
	$id=$_GET['id'];
	include 'conn.php';
	$q=mysql_query("UPDATE booking set paid='done' where id=$id");
	if($q)
		header("location:show1.php");
	else 
		header("location:show1.php");
?>