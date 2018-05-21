
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
		<th>Password</th>
		<th>Mobile</th>
			<th>Assigned Books</th>
		
			<th>Reserve Books</th>
		
		</tr>
		</thead>	
		<tbody>
	
			<?php
	include("db_connection.php");
			
	 echo $sql= "select * from user where email='$email'";
	$res = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_object($res))
	{
		echo"<tr>";
		echo"<td>$row->username</td>";"<br>";
		echo"<td>$row->email</td>";
			echo"<td>$row->password</td>";
		echo"<td>$row->mobile</td>";
		echo"<td>$row->assignedBooks</td>";
	
			echo"<td>$row->reservemyBook</td>";
		
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
