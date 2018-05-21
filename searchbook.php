<?php
//include ("index.html");
?>
<div class="searchbox">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10" id="assignbooktable">
			<br>
			<table align="center" style="font-size:18px; border: 2px solid green;">
			<caption><h2 style="text-align:center">Author Books</h2></caption>
				<thead>
					<tr>
						<th>Name</th>
						<th>Author</th>
						<th>Year&nbsp;Of &nbsp;Publish</th>
						<th>Language</th>
						<th>Category</th>
						
						

					</tr>
				</thead>
				<tbody>
					<?php
	include("db_connection.php");
					
$author= $_POST['author'];

$sql= "select * from books where author='$author'";
	$res = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_object($res))
	{
		echo"<tr>";
		echo"<td>$row->name</td>";
			echo"<td>$row->author</td>";
		echo"<td>$row->YearOfPublish</td>";
		echo"<td>$row->language</td>";
		echo"<td>$row->category</td>";
		
		echo"</tr>";
		
	}
					
		?>
				</tbody>
			</table>
		</div>
		<div class="col-sm-1"></div>
</div>
	</div>
		