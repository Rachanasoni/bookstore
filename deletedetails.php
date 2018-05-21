<?php
include("db_connection.php");

// db_connection has the code to connect with database _bookstore

// checking  the connection*****************************************************************


/*if(!$conn){
	die("connection is failed :" . mysqli_Connect_error());
}echo "Connection is established". "<br>"; */

//*********************************************************************************************
//*****if DELETE button is clicked then only print these varaible data.***************
//****if(isset($_POST['submit'])) this submit parameter will be the name of button which you used in the button name******************************************

/*if(isset($_POST['delete'])){ 
	echo "Email : "; echo $_POST["email"]. "<br>";
	echo "Password : "; echo $_POST["password"]. "<br>"; 
};*/


//*******************************************************************************************

// Declare the variables with $email,$password,$confirmpassword,$title,$username,$mobile,$heardaboutus to store the values of form controls. These values are carried to this page by using $_POST/REQUEST/GET variable. These varaible which we createdto store form control values are inserted in the table in Values.//






session_start();



	 $email = $_POST["email"];
     $password = $_POST["password"];
     
	
$sql2= "DELETE FROM register WHERE email='$email' AND password='$password'";

if($conn->query($sql2)===TRUE){
	echo"<h4 style='color:forestgreen'>record is deleted successfully.</h4>";
}else{
	echo "Error: ". $sql2. "<br>". $conn->error;
}

$conn->close();
?>
