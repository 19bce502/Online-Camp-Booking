<?php
	session_start();
	$Email=$_POST['email'];
	$psswd=$_POST['password'];
	$con=mysql_connect("Localhost","root","");
	$db=mysql_select_db('expedition');
	$res=mysql_query("select * from login where email='$Email' && pwd='$psswd'");
	$n=mysql_num_rows($res);		
		if($n>0)
    	{
    		$_SESSION['admin'] = "login";
    		$row = mysql_fetch_row($q);
    		$_SESSION['u_id']=$row[0];
    		#echo $row[0];
			header("location:index1.php");
		}

	else
	{
		header("location:index.php");
	}
?>