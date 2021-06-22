<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("expedition",$con);
	$q=mysql_query("insert into contact(name,email,msg)values('$name','$email','$message')");
	if($q)
		header("location:index.php");
?>