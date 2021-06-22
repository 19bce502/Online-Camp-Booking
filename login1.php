<?php
	session_start();
	$email=$_POST['Email'];
	$pwd=$_POST['Password'];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("expedition",$con);
	$q=mysql_query("select * from signup where email='$email' && pwd='$pwd'");
	$n=mysql_num_rows($q);
        
    if($n>0)
    	{
    		$_SESSION['login']="login";
    		$row = mysql_fetch_row($q);
    		$_SESSION['u_id']=$row[0];
    		#echo $row[0];
			header("location:index.php");
		}
	else
		header("location:login.php");
?>