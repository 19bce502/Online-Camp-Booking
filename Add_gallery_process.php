<?php
	$con=mysql_connect("Localhost","root","");
	$db=mysql_select_db('expedition');
	$iname=$_FILES['image']['name'];
	$name=$_POST['camp_name'];
	$camp_id=$_POST['camp_id'];
	$res=mysql_query("INSERT INTO gallery VALUES(NULL, '$iname','$name', $camp_id)");
	$move=move_uploaded_file($_FILES['image']['tmp_name'],"../project/images/gallery/".$iname);
	if($res)
	{
		header("location:gallery.php");
	}
	
?>