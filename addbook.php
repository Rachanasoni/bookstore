<?php
include("db_connection.php"); 

//***** including database connection code file and first check its connection ***************

/*if (!$conn) {
    die("Connection is failed: " . mysqli_connect_error());
}
echo "Connection is established". "<br>"; */

//******* ."<br>" forline break.always use before semicolon(;)************************
//*****if submit button is clicked then only print these varaible data.***************


/*if(isset($_POST['submit'])){ 
	echo "Book : "; echo $_POST["bookName"]. "<br>";
	echo "Author : "; echo $_REQUEST["author"]. "<br>"; 
	echo "Year of Publish : "; echo $_POST["YearOfPublish"]. "<br>"; 
	echo "Language : "; echo $_POST["language"]. "<br>";
	echo "Category : "; echo $_POST["category"]. "<br>";
};*/

//***********************************************************************************************

// declare the varaibles with $bookName,$author,$YearOfPublish,$language,$category to store the values of form controls. These values are carried to this page by using $_POST/REQUEST/GET variable.//


$bookName = $_POST["bookName"];
     $author = $_REQUEST["author"];
     $YearOfPublish = $_POST["YearOfPublish"];
     $language = $_POST["language"];
     $category = $_POST["category"];
    


$sql = "INSERT INTO books(name, author, YearOfPublish,language,category)
VALUES ('$bookName', '$author','$YearOfPublish','$language','$category')";


if ($conn->query($sql) === TRUE) {
    echo "<h4 style='color:forestgreen'>New record created successfully</h4>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} ;


$conn->close();
?>