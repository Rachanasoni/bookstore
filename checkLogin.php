<?php
include ("db_connection.php");
session_start();

	


	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];

	
	echo 'email:'.$email;
	echo 'password'.$password;
	
	$sql="select * from register where email='$email' and password='$password'";
//'password' is the name of password column of register table.
	$res=mysqli_query($conn,$sql);
	$total=mysqli_num_rows($res);
	if($total>0)
	{
		$row=mysqli_fetch_object($res);
		$_SESSION['aid']=$row->id;
		$_SESSION['name']=$row->name;
		setcookie("name",$_SESSION['name']);
		echo $_COOKIE["name"];
	    $_SESSION['loginmsg']="<h4 style='color:forestgreen'>You are login successfully</h4>";
		header("location:dashboard.php");
	}

?>