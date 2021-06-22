<?php
	$con=mysql_connect("Localhost","root","");
	$db=mysql_select_db('expedition');
	$camp_id=$_POST['camp_id'];
	$date=$_POST['date'];		
	$res=mysql_query("INSERT INTO dates VALUES(NULL, $camp_id, '$date' )");
	if($res)
	{
		header("location:dates.php");
	}
	
?>