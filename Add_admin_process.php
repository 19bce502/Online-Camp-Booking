<?php
	$nm=$_POST['name'];
	$Email=$_POST['email'];
	$psswd=$_POST['password'];
	$inm=$_FILES['image']['name'];
	$con=mysql_connect("Localhost","root","");
	$db=mysql_select_db('expedition');
	$res=mysql_query("INSERT INTO login values (null,'$nm','$inm','$Email', '$psswd')");
	$move=move_uploaded_file($_FILES['image']['tmp_name'],"../project/images/profile/".$inm);
	if($res)
	{
		header("location:login1.php");
	}
?>