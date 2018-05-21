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
<?php
	session_start();
	?>
	<section>
		
		<div class="col-sm-12">
		<div class="panel panel-success" style="background-color:azure; height:595px;">
				<div class="panel header text-center">
					<h2 style="color:#7D209B;font-family:'Alegreya';"> Enter Email To See Assign Book</h2>
				</div>
				<div class="panel-body" style="padding:40px;">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validatelogin();">
					<div class="row form-group">
						<div class="col-sm-12">
							<label>Email</label>
							<input type="text" placeholder="Enter your email" class="form-control" id="email" name="email" required>
							<i id="email_error" style="color:red"></i>
						</div>
					</div>
					<br>
					<div class="row from-group">
						<div class="col-sm-12">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Enter your password" id="password" name="password" required>
							<i id="password_error" style="color:red"></i>
						</div>
					</div>
					<br>
					
					<br>
					<button class="btn btn-success" type="submit" name="submit">Submit</button>
					</form>

				</div>
			</div>
		</div>
	</section>
</div>

