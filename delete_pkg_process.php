<?php
	
	include "conn.php";
	$id=$_GET['id'];
	$res=mysql_query("delete from pkg where id=$id");
	header("location:Package.php");
?>