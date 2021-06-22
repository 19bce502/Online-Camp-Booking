<?php
	
	include "conn.php";
	$id=$_GET['id'];
	$res=mysql_query("delete from signup where id=$id");
	header("location:User.php");
?>