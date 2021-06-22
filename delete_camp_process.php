<?php
	
	include "conn.php";
	$id=$_GET['id'];
	$res=mysql_query("delete from camps where id=$id");
	header("location:Camps.php");
?>