<?php
include ("db_connection.php");
session_start();

	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];

/*$email=$_REQUEST['email'];
	$md5password=md5($_REQUEST['password']);//trying to decrypt
	if (!empty($email) && !empty($md5password)) {	
	$sql="select * from register where email='$email' and password='$md5password'";*/
	
	/*echo 'email:'.$email;
	echo 'password'.$password;*/
	if (!empty($email) && !empty($password)) {
		
	$sql="select * from register where email='$email' and password='$password'";

	$res=mysqli_query($conn,$sql);
	$total=mysqli_num_rows($res);
	if($total>0)//if($total>0)
	{
		$row=mysqli_fetch_object($res);
		$_SESSION['aid']=$row->id;
		$_SESSION['name']=$row->name;
		setcookie("name",$_SESSION['name']);
		echo $_COOKIE["name"];
	    $_SESSION['loginmsg']="<h4 style='color:forestgreen'>You are login successfully</h4>";
		header("location:dashboard.php");
	}else{
		echo"<div class='row' style='height:400px'>";
			echo"<div class='col-sm-4'></div>";
				echo"<div class='col-sm-4'><h4 style='color:forestgreen'>Sorry ! You entered either wrong email or password.</h4></div>";
				echo"<div class='col-sm-4'></div>";
			echo"</div>";
	}
	}

?>