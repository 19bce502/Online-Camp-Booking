<?php
	
	include "conn.php";
	$id=$_GET['id'];
	$res=mysql_query("delete from team where id=$id");
	header("location:Team.php");
?>