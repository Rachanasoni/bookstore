<?php
//include("index.html");
?>
<style>
<?php
	
	session_start();
	?>
#assignbooks {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#assignbooks td, #assignbooks th {
    border: 1px solid #ddd;
    padding: 8px;
}

#assignbooks tr:nth-child(even){background-color: #f2f2f2;}

#assignbooks tr:hover {background-color: #ddd;}

#assignbooks th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
		
</style>
	<div class="container-fluid">
		<section>
 
			<div class="col-sm-12" id="assignbooktable">
				<div class="panel panel-success" style="background-color:azure;height:auto; width:auto;">
					<div class="panel header text-center">
						<h2 style="color:#7D209B;font-family:'Alegreya';">Assigned Book Summary</h2>
					</div>
					<div class="panel-body" style="padding:40px;">

						<table align="center" class="table table-bordered" cellpadding="12" id="assignbooks">
							<thead>
								<tr>
									<th>Assigned Book</th>
									<th>Email</th>
									<th>Date of Assign</th>
									<th>Assigned Status</th>

								</tr>
							</thead>
							<tbody>

								<?php
	include("db_connection.php");
		
			
			$email=$_REQUEST['email'];
			$password=$_REQUEST['password'];
								
	 //$sql= "select * from reservemybook where email='$email'";
								
	//********This php code fetched the data so manually writing the fetching code to check the form action.******//
	$sql= "select * from reservemybook where email='user@gmail.com'";						
								
	$res = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_object($res))
	{
		echo"<tr>";
		echo"<td>$row->bookname</td>";"<br>";
		echo"<td>$row->email</td>";
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
	
	