<?php
	 session_start();
	 $u_id=$_SESSION['u_id'];
	 $con=mysql_connect("localhost","root","");
	 $db=mysql_select_db("expedition");
     $q=mysql_query("select * from booking where user_id=$u_id");
                        
	$n=mysql_num_rows($q);
	if($n>0)
		header("location:checkout.php");
		
	else 
		header("location:sorry.php");
		
?>