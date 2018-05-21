<?php
//include("index.html");
?>
<?php
include("db_connection.php");


// db_connection has the code to connect with database _bookstore

// checking  the connection*****************************************************************


/*if(!$conn){
	die("connection is failed :" . mysqli_Connect_error());
}echo "Connection is established". "<br>"; */

//*********************************************************************************************
//*****if SUBMIT button is clicked then only print these varaible data.***************
//****if(isset($_POST['submit'])) this submit parameter will be the name of button which you used in the button name******************************************

/*if(isset($_POST['Submit'])){
	echo "Email: "; echo $_POST["email"]. "<br>";
	echo "Password: "; echo $_POST["password"]."<br>";
	echo "Confirm Password: "; echo $_POST["confirm_password"]."<br>";
	echo "Title: "; echo $_POST["title"]. "<br>";
	echo "Name: "; echo $_POST["user_name"]."<br>";
	echo "Mobile: "; echo $_POST["mobile"]. "<br>";
	echo "Heard About Us: "; echo $_POST["source"]."<br>";
}*/

//*******************************************************************************************

// Declare the variables with $email,$password,$confirmpassword,$title,$username,$mobile,$heardaboutus to store the values of form controls. These values are carried to this page by using $_POST/REQUEST/GET variable. These varaible which we createdto store form control values are inserted in the table in Values.//


	 $email = $_POST["email"];
     $password = $_REQUEST["password"];
     $confirmpassword = $_POST["confirm_password"];
     $title = $_POST["title"];
     $user_name = $_POST["user_name"];
	 $mobile=$_POST["mobile"];
     $heardAboutUs = $_POST["source"];
   
    
$sql2= "INSERT INTO register(email, password, confirmPassword, title, name, mobile, heardAboutUs)
VALUES('$email','$password','$confirmpassword','$title','$user_name','$mobile','$heardAboutUs')";

if($conn->query($sql2)===TRUE){

	//declaration of msg variable.//
	//session_start();
	// $_SESSION['registersuccess']="<h4 style='text-align:center';>You are registered successfully</h4>";
	//header ("Location:index.html");
   echo "<h4 style='text-align:center;color:forestgreen;'>You are registered successfully</h4>";
	
}else{
	echo "Error: ". $sql2. "<br>". $conn->error;
}

$conn->close();
?>
