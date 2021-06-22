<?php
	$ci=$_POST['ci'];
	$cmp_id=$_POST['camp_id'];
	$con=mysql_connect("Localhost","root","");
	$db=mysql_select_db('expedition');
	$res=mysql_query("select * from booking where id=$ci");
	$n=mysql_num_rows($res);		
		if($n>0)
    	{
    		
    		header("location:show.php?id=$ci");
		}

	else
	{
		
		header("location:msg.php");
	}

?>