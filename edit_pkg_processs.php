<?php
	$id=$_POST['id'];
	$con=mysql_connect("Localhost","root","");
	$db=mysql_select_db('expedition');
	$camp_id=$_POST['camp_id'];
	$name=$_POST['name'];
	$cost=$_POST['cost'];

	$q=mysql_query("UPDATE pkg set cmp_id=$camp_id, name='$name', cost=$cost where id=$id");
	if($q)
	{
		header("location:package.php");
	}
?>