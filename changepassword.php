
<div class="container-fluid">
	<section>
		
		<div class="col-sm-12">
		<div class="panel panel-success" style="background-color:azure; height:595px;">
				<div class="panel header text-center">
					<h2 style="color:#7D209B;font-family:'Alegreya';"> Change Password</h2>
				</div>
				<div class="panel-body" style="padding:40px;">
				<form action="savechangepassword.php" method="POST" onsubmit="return validatelogin();">
				
				<div class="row from-group">
						<div class="col-sm-12">
							<label>Email</label>
							<input type="email" class="form-control" placeholder="Enter your  Email Id" name="email">
						<i id="email_error" style="color:red"></i>
						</div>
					</div>
					<br>
					<div class="row form-group">
						<div class="col-sm-12">
							<label>Current Password</label>
							<input type="password" placeholder="Enter your current password" class="form-control" id="email" name="password1">
							<i id="password_error" style="color:red"></i>
						</div>
					</div>
					<br>
					<div class="row from-group">
						<div class="col-sm-12">
							<label> New Password</label>
							<input type="password" class="form-control" placeholder="Enter your  new password" id="password" name="password2">
							<i id="password_error" style="color:red"></i>
						</div>
					</div>
					<br>
					
					<br>
					<button class="btn btn-success" type="submit" name="submit">Submit</button>
					<button class="btn btn-danger" type="clear" name="clear">Clear</button>
					</form>

				</div>
			</div>
		</div>
	</section>
</div>
