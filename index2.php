<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname ="_bookstore";
//we just given the credential to connect the server. Now we make the connection//


$conn = mysqli_connect(localhost, root, root,_bookstore);
	//condition to check and print connection status

	/*if (!$conn) {
    die("Connection is failed: " . mysqli_connect_error());
}
echo "Connection is established";*/


/*Now we crete our database by using sql statement "CREATE DATABASE nameofdatabase";
we are passing our query of create db($sql) to connection.*/


/*$sql = "CREATE DATABASE _bookstore";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}*/

/*We creted our database _bookstore and its now showing in the phpmyadmin databases page. Now we create tables in our databases. tables are nothing but the small small databases of the main database.*/


/*$sql = "CREATE TABLE books (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(100) NOT NULL,
author VARCHAR(30) NOT NULL,
YearOfPublish YEAR NOT NULL,
language VARCHAR(30) NOT NULL,
category VARCHAR(30) NOT NULL

)";
if ($conn->query($sql) === TRUE) {
    echo "Table books created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}*/


/*We created our books table succesfully. but in that table there is no rows means no records with six columns. now we comment the create table becoz we already created the table ,its time to insert date into table. Now we start inserting data in our table.*/
//===================================================


/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Harry Potter and the Philosophers Stone', 'J.K.Rollings', '1996','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES (' Harry Potter and the Chamber of Secrets', 'J.K.Rollings', '1998','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES (' Harry Potter and the Prisoner of Azkaban', 'J.K.Rollings', '1999','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Harry Potter and the Goblet of Fire', 'J.K.Rollings', '2000','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Harry Potter and the Half-Blood Prince', 'J.K.Rollings', '2005','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Harry Potter and the Deathly Hallows', 'J.K.Rollings', '2007','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('The Thomas Berryman Number', 'James Patterson ', '1976','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Season of the Machete', 'James Patterson ', '1977','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('The Jericho Commandment', 'James Patterson ', '1979','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Black Market', 'James Patterson ', '1986','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('The Midnight Club', 'James Patterson ', '1988','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Along Came A Spider', 'James Patterson', '1992','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('The Immortals of Meluha', 'Amish Tripathi', '2011','English/Hindi','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('The Secret of the Nagas', 'Amish Tripathi', '2012','English/Hindi','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('The oath of vayuputras', 'Amish Tripathi', '2013','English/Hindi','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Ram : scion of ikshvaku', 'Amish Tripathi', '2015','English/Hindi','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Sita : warrior of Mithila', 'Amish Tripathi', '2017','English/Hindi','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Ravana:orphan of Aryavarta', 'Amish Tripathi', '2018','English/Hindi','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('The Alchemist', 'Paulo Coelho', '1988','English','Fantasy')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Brida', 'Paulo Coelho', '1990','English','Drama/Romance')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('The supreme gift', 'Paulo Coelho', '1991','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('The Fifth Mountain', 'Paulo Coelho', '1996','English','Love/Mystery/Spiritual')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Pinjar', 'Amrita Pritam', '1950','Punjabi','Social')";*/


/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('First Among The Equals', 'Jaffery Archer','1984','English','Political')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('A Matter Of Honour', 'Jaffery Archer','1986','English','Fiction')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('As the Crow Flies', 'Jaffery Archer','1991','English','Mystry/Thriller')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('The God of Small Things', 'Arundathi Roy','1997','English','Social')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Power Politics', 'Arundathi Roy','2000','English','Political')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('War Of Peace', 'Arundathi Roy','2001','English','Social')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('War With No End', 'Arundathi Roy','2007','English','Social')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Walking With The Comrades', 'Arundathi Roy','2011','English','Social')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Things that Can and Cannot Be Said', 'Arundathi Roy','2016','English','Social/conversational')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Wings Of Fire', 'A P J Abdul Kalam','1999','English/Tamil','Autobiography')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Ignited Minds', 'A P J Abdul Kalam','2002','English','Inspirational')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Inspiring Thoughts', 'A P J Abdul Kalam','2007','English','Inspirational')";*/

/*$sql = "INSERT INTO books (name, author, YearOfPublish,language,category)
VALUES ('Turning Points: A journey through challenges', 'A P J Abdul Kalam','2012','English','Biography')";*/


/*if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
} ;*/

/*data is successfully starts inserting in the books table. Now we try to fetch that data from our table books and show the fetched data in our browser.*/

//SELECT the data from the table and print it on browser window


/*$sql1 = "SELECT id, name, author FROM books";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"] . " is wriiten by " . $row["author"]. 
			 "<br>";
    }
} else {
    echo "0 results";
}

//==============================================================================================

/* Create a new table for login. we already have a database _bookstore so comment the previous create database, connect command .Only need to create a new table command.*/

 /*$sql2="CREATE TABLE login(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
password VARCHAR(30) NOT NULL
)";
if($conn->query($sql2)===TRUE){
	echo"table login has created successfully";
}else{
	echo"Error while creating table login:" .$conn->error;
}*/



//=================================================================================================
/* Create a new table for register. We already have a database _bookstore so comment the previous create database, connect command .Only need to create table command.*/

/*$sql3="CREATE TABLE register(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(100) NOT NULL,
password VARCHAR(30) NOT NULL,
confirmPassword VARCHAR(30) NOT NULL,
title VARCHAR(6) NOT NULL,
name VARCHAR(30) NOT NULL,
mobile VARCHAR(10) NOT NULL,
heardAboutUs VARCHAR(100)
)";
if($conn->query($sql3)===TRUE){
	echo"table register has created successfully";
}else{
	echo"Error while creating table register:" .$conn->error;
}*/


echo"welcome";

mysqli_close($conn);
	?>
	


