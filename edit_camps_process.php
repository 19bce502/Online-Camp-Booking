<?php
	$id=$_POST['id'];
	$con=mysql_connect("Localhost","root","");
	$db=mysql_select_db('expedition');
	$name=$_POST['name'];
	$days=$_POST['days'];
	$cost=$_POST['cost'];	
	$iname=$_FILES['image']['name'];
	$nights=$_POST['nights'];
	$loc=$_POST['location'];
	$map=$_POST['map'];
	$des=$_POST['img_des'];
	$iternary=$_POST['iternary'];
	$link=$_POST['link'];
	if($iname=="")
	{
	$q=mysql_query("UPDATE camps set name='$name', dys=$days, cost=$cost, nights=$nights, location='$loc', map='$map', img_des='$des', iternary='$iternary', link='$link' where id=$id");
	}
	else
	{
	$q=mysql_query("UPDATE camps set name='$name', dys=$days, cost=$cost, img='$iname', nights=$nights, location='$loc', map='$map', img_des='$des', iternary='$iternary', link='$link' where id=$id");
	
	$move=move_uploaded_file($_FILES['image']['tmp_name'],"../project/images/camps/".$iname);
	}
	if($q)
	{
		header("location:camps.php");
	}
?>