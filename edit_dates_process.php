<?php
	$id=$_POST['id'];
	$con=mysql_connect("Localhost","root","");
	$db=mysql_select_db('expedition');
	$camp_id=$_POST['camp_id'];
	$date=$_POST['date'];

	$q=mysql_query("UPDATE dates set cmp_id=$camp_id, dates='$date' where id=$id");
	if($q)
	{
		header("location:dates.php");
	}
?>