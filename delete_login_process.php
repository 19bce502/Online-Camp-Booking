<?php
	
	include "conn.php";
	$id=$_GET['id'];
	$res=mysql_query("delete from login where id=$id");
	header("location:login1.php");
?>