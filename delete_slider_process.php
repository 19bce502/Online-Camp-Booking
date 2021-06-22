<?php
	
	include "conn.php";
	$id=$_GET['id'];
	$res=mysql_query("delete from slider where id=$id");
	header("location:Slider.php");
?>