<?php
	$name=$_POST['Name'];
	$contact=$_POST['Contact'];
	$email=$_POST['Email'];
	$add=$_POST['Address'];
	$pwd=$_POST['Password'];
	$age=$_POST['age'];
	$img=$_FILES["image"]["name"];
	$con=mysql_connect("localhost","root","");
	$db=mysql_select_db("expedition",$con);
	$q=mysql_query("insert into signup (name,contact,email,address,pwd,age,image)values('$name','$contact','$email','$add','$pwd',$age,'$img')");
	move_uploaded_file($_FILES['image']['tmp_name'],"images/profile/".$img);
	if($q)
		header("location:thankyou.php");
	else
		header("location:sorry.php");
?>