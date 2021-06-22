<?php
	$con=mysql_connect("Localhost","root","");
	$db=mysql_select_db('expedition');
	$iname=$_FILES['image']['name'];
	$res=mysql_query("INSERT INTO slider VALUES(NULL,'$iname')");
	$move=move_uploaded_file($_FILES['image']['tmp_name'],"../project/images/slider/".$iname);
	if($res)
	{
		header("location:Slider.php");
	}
	
	
?>