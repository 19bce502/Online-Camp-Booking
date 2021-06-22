<?php
	
	include "conn.php";
	$id=$_GET['id'];
	$res=mysql_query("delete from dates where id=$id");
	header("location:dates.php");
?>