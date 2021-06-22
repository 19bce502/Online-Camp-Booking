<?php
		$id=$_GET['id'];
		$con=mysql_connect("localhost","root","");
		$db=mysql_select_db("expedition",$con);
		$q=mysql_query("delete from booking where id=$id");
		if($q)
		{
			header("location:thankyou.php");
		}
		else
		{
			header("location:sorry.php");
		}
		
?>