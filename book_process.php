<?php
session_start();
      if(!isset($_SESSION['login']))
      {
         header("location:login.php");
      }
      $con=mysql_connect("localhost","root","");
   $db=mysql_select_db("expedition",$con);
	$u_id=$_SESSION['u_id'];
   $c_id=$_GET['c_id'];
   $p_id=$_GET['p_id'];
   $d_id=$_GET['d_id'];
   $q=mysql_query("INSERT INTO booking values (null, $c_id, $u_id, $d_id, $p_id, 'not done')");
if($q)
{
	header("location:checkout.php");
}
else 
{

header("location:sorry.php");
}

?>