
<html>
<body>
<?php
	
	session_start();
	?>
<div class="container-fluid">
	<section>
		
		<div class="col-sm-12">
		<div class="panel panel-success" style="background-color:azure; height:auto;">
				<div class="panel header text-center">
					<h2 style="color:#7D209B;font-family:'Alegreya';">Account Summary</h2>
				</div>
				<div class="panel-body" style="padding:40px;">
	
		<table align="center" class="table table-bordered" cellpadding="10">
		<thead>
		<tr>
			<th>User Name</th><br>
			<th>Email</th>
			<th>Mobile</th>
			<th>Assigned Books</th>
			<th>Reserve Booking Date</th>
			<th>Booking Status</th>
		</tr>
		</thead>	
		<tbody>
	
			<?php
	include("db_connection.php");

			

$sql="SELECT name,mobile,password,reservemybook.email,reservemybook.bookname,reservemybook.DateOfBooking,reservemybook.bookedStatus FROM register LEFT JOIN reservemybook ON register.email = reservemybook.email";

	$res = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_object($res))
	{
		echo"<tr>";
		echo"<td>$row->name</td>";"<br>";
		echo"<td>$row->email</td>";
		echo"<td>$row->mobile</td>";
		echo"<td>$row->bookname</td>";
	echo"<td>$row->DateOfBooking</td>";
			echo"<td>$row->bookedStatus</td>";
		
		echo"</tr>";	
	}
	
	
	?>
	
	</tbody>
	</table>
			</div>
			</div>
		</div>
	</section>
	</div>
</body>
</html>
