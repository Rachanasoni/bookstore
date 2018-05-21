<style>
	body{
		font-family: 'Alegreya';
	}
	

	label {

		font-size: 20px;
		font-weight: bold;
		color: #7D209B;
	}

	#panel {
		padding: 50px;
		padding-bottom: 112px;
	}

	
</style>


<div class="container-fluid">
	<section>
		
		<div class="col-sm-12">
		<div class="panel panel-success" style="background-color:azure; height:auto;">
				<div class="panel header text-center">
					<h2 style="color:#7D209B;font-family:'Alegreya';">Reserve My Book</h2>
				</div>
				<div class="panel-body" style="padding:40px;">
				<form action="reservebookdetail.php" method="POST" onSubmit="return validatereserve();">
				
				
					<div class="row form-group">
						<div class="col-sm-12">
							<label> Email</label>
							<input type="email" placeholder="Enter your email" class="form-control"  name="email" id="email">
							<i id="email_error" style="color:red"></i>
						</div>
					</div>
					
					
				<div class="row form-group">
						<div class="col-sm-12">
							<label>Book Name</label>
							<select class="form-control" name="bookName" id="bookName">
							<option value="0">Choose book</option>
							<?php
							include("db_connection.php");
							$sql="select * from books order by name";
								$res=mysqli_query($conn,$sql);
								while($row=mysqli_fetch_object($res))
								{
									echo"<option value='$row->name'>$row->name</option>";
									
								}
							?>
							</select>
							<i id="bookName_error" style="color:red"></i>
						</div>
					</div>
					
				
					<div class="row from-group">
						<div class="col-sm-12">
							<label>Date Of Booking</label>
							<input type="date"  class="form-control" placeholder="Enter your booking date"  name="DateOfBooking" id="DateOfBooking" required>
							<i id="DateOfBooking_error" style="color:red"></i>
						
						</div>
					</div>
					
					<div class="row from-group">
						<div class="col-sm-12">
							<input type="checkbox"  class="form-control" name="bookstatus" id="bookstatus" value="true"><label>Confirm Booking</label>
							<i id="check_error" style="color:red"></i>
							
						</div>
					</div>
					<br>
					
					<br>
					<button class="btn btn-success" type="submit" name="submit">Book</button>
					<button class="btn btn-danger" type="reset" name="clear">Clear</button>
					</form>

				</div>
			</div>
		</div>
	</section>
</div>

