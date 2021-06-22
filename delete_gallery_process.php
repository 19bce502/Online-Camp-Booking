<?php
	
	include "conn.php";
	$id=$_GET['id'];
	$res=mysql_query("delete from gallery where id=$id");
	header("location:gallery.php");
?>