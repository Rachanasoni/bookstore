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

/*if(isset($_POST['submit'])){
	echo "Email: "; echo $_POST["email"]. "<br>";
	echo " Current Password: "; echo $_POST["password1"]."<br>";
	echo "New Password: "; echo $_POST["password2"]."<br>";
	
}*/

//*******************************************************************************************



	 $email = $_POST["email"];
     $currentpassword = $_POST["password1"];
     $newpassword = $_POST["password2"];
    
 //$sql= "UPDATE register SET password = '$newpassword', confirmPassword='$newpassword' WHERE  password= '$currentpassword' AND email='$email'";

//*************Updating password with writing  quary and inserting data manually to check orm and connection.*****//

$sql= "UPDATE register SET password='new34',confirmPassword='new34' WHERE email='testuser3@gmail.com';"; 

if($conn->query($sql)===TRUE){
	echo"<h4 style='color:forestgreen'>Password change successfully.</h4>";
	
}else{
	echo "Error: ". $sql2. "<br>". $conn->error;
}

$conn->close();
?>
