<style>
	.listcontainer {
		min-height: 400px;
		font-size: 18px;
	}

</style>


<div class="listcontainer">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<table align="center" class="table table-bordered" style="background-color:forestgreen;	color:white; font-size:18px" ;>
				<caption>
					<h2 style="text-align:center"> LIST OF All Books</h2>
				</caption>
				<thead>
					<tr>
						<th>Name</th>

					</tr>
				</thead>
				<tbody>
					<?php
	include("db_connection.php");
					


$sql= "select name from books where name like 'A%'";

	$res = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_object($res))
	{
		echo"<tr>";
		echo"<td>$row->name</td>";
			
		echo"</tr>";	
	}
					?>

				</tbody>
			</table>


		</div>
		<div class="col-sm-2"></div>

	</div>

</div>
