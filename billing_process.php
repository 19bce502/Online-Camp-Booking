<?php
	session_start();
    $u_id=$_SESSION['u_id'];
    $city=$_POST['city'];
	$state=$_POST['state'];
	$pc=$_POST['postalcode'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("expedition",$con);
	$q=mysql_query("INSERT INTO bill_info values (null, $u_id, '$city', '$state', $pc) ");
	if($q)
		header("location:thankyou.php");
	else
		header("location:sorry.php")
?>