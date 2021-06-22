<?php
	$con=mysql_connect("Localhost","root","");
	$db=mysql_select_db('expedition');
	$camp_id=$_POST['camp_id'];
	$name=$_POST['name'];
	$cost=$_POST['cost'];
	$res=mysql_query("INSERT INTO pkg VALUES(NULL, $camp_id, '$name', '$cost' )");
	if($res)
	{
		header("location:Package.php");
	}
	
?>