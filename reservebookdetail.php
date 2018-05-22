
<?php


include("db_connection.php"); 
//include("index.html");

//***** including database connection code file and first check its connection ***************

/*if (!$conn) {
    die("Connection is failed: " . mysqli_connect_error());
}
echo "Connection is established". "<br>"; */

//******* ."<br>" forline break.always use before semicolon(;)************************
//*****if submit button is clicked then only print these varaible data.***************


if(isset($_POST['submit'])){ 
	/*echo "email : "; echo $_POST["email"]. "<br>";
	echo "bookname : "; echo $_POST["bookName"]. "<br>";
	echo "authorname : "; echo $_REQUEST["authorname"]. "<br>"; 
	echo "DateOfBooking : "; echo $_POST["DateOfBooking"]. "<br>"; 
	echo "Status : "; echo $_POST["status"]. "<br>";*/ 



//***********************************************************************************************

// declare the varaibles with $bookName,$author,$YearOfPublish,$language,$category to store the values of form controls. These values are carried to this page by using $_POST/REQUEST/GET variable.//

$email = $_POST['email'];
$bookName = $_REQUEST['bookName'];
     $DateOfBooking = $_POST['DateOfBooking'];
 $bookstatus = $_POST['bookstatus'];
 
   //$sql = "INSERT INTO reservemybook (email, bookname,DateOfBooking,bookedStatus)VALUES ('$email','$bookName','$DateOfBooking','$bookstatus')";

//*******************Data is inserted manually to database table to insure database connection and form action.

$sql = "INSERT INTO reservemybook (email, bookname,DateOfBooking,bookedStatus)VALUES ('user@gmail.com','warfield','2018-05-05','true')";//date is in YYYY-MM-DD

if ($conn->query($sql) === TRUE) {

echo"<h4 style='color:forestgreen'>Your Booking Details:</h4>";
	echo "<h4>Book Name: </h4>"; echo $_POST["bookName"]. "<br>";
	echo "<h4>Date Of Booking: </h4>"; echo $_POST["DateOfBooking"];
}else{
	echo "Error: ". $sql2. "<br>". $conn->error;
}
}

$conn->close();
?>
