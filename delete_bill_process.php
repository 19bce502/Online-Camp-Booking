<?php
	
	include "conn.php";
	$id=$_GET['id'];
	$res=mysql_query("delete from bill_info where id=$id");
	header("location:Bill.php");
?>