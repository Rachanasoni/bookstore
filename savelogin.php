
<?php
//include ("index.html");
?>
<?php
include ("db_connection.php");
//********including database connection code file and first check its connection ***************

/*if (!$conn) {
    die("Connection is failed: " . mysqli_connect_error());
}
echo "Connection is established". "<br>"; */

//******* ."<br>" forline break.always use before semicolon(;)************************
//*****if submit button is clicked then only print these varaible data.***************
//***if(isset($_POST['login'])) this login parameter will be the name of button which you used in the button //name******************************************

/*if(isset($_POST['login'])){ 
	echo "Email : "; echo $_POST["email"]. "<br>";
	echo "Password : "; echo $_POST["password"]. "<br>"; 
};*/

session_start();
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql="select * from register where email='$email' and password='$password'";
//'password' is the name of password column of register table.
	$res=mysqli_query($conn,$sql);
	$total=mysqli_num_rows($res);
	if($total>0)
	{
		$row=mysqli_fetch_object($res);
		$_SESSION['aid']=$row->id;
		$_SESSION['name']=$row->name;
		echo $_SESSION['name'];
		
		$_SESSION['loginmsg']="<h4 style='color:forestgreen'>You are login successfully</h4>";
		header("location:dashboard.php");
	    //echo "<h4 style='color:forestgreen'>You are login successfully</h4>"."<br>";
		
	}
	else{
		mysqli_error();
	}

// declare the varaibles with $bookName,$author,$YearOfPublish,$language,$category to store the values of form controls. These values are carried to this page by using $_POST/REQUEST/GET variable.//
     
/*$sql1 = "INSERT INTO login(email,password)
	VALUES('$email','$password')";

if ($conn->query($sql1) === TRUE) {
    echo "<h4 style='color:forestgreen'>New record created successfully</h4>";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
} ;*/



?>


