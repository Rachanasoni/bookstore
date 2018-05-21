<?php
?>

<div class="container-fluid">
	<section>
		<div class="col-sm-4 text-center">
			<div class="panel panel-success" style="background-color:azure;">
				<div class="panel header text-center">
					<h2 style="color:#7D209B; font-family:'Alegreya';">Need To Register</h2>
				</div>
				<div class="panel-body">
					

				</div>
			</div>
		</div>


		<div class="col-sm-8">
			<div class="panel panel-success" style="background-color:azure; height:825px;">
				<div class="panel header text-center">
					<h2 style="color:#7D209B;font-family:'Alegreya';">Register</h2>
				</div>
				<div class="panel-body" style="padding:50px;">
					<form action="saveregister.php" method="POST" onsubmit="return validateregister()">
						<div class="row form-group">
							<div class="col-sm-12">
								<label id=labelregister>Email</label>
								<input type="text" placeholder="Enter your Email" class="form-control" id="email" name="email">
								<i id="email_error" style="color:red"></i>
							</div>
						</div>
						<br>

						<div class="row from-group">
							<div class="col-sm-12">
								<label id=labelregister>Password</label>
								<input type="password" class="form-control" name="password" placeholder="Enter your password" id="password1">


							</div>
						</div><br>

						<div class="row from-group">
							<div class="col-sm-12">
								<label id=labelregister> Confirm Password</label>
								<input type="password" class="form-control" name="confirm_password" placeholder="Enter your password again" id="password2">
								<i id="password_match_error" style="color:red"></i>
							</div>
						</div><br>

						<div class="row from-group">
							<div class="col-sm-12">
								<label id=labelregister>Title</label>
								<select class="form-control" name="title" id="title">
                                 <option value="">Choose Title</option>
                                 <option value="Mr.">Mr.</option>
                                 <option value="Ms.">Ms.</option>
                                 <option value="Mrs.">Mrs.</option>
                              </select>
								<i id="title_error" style="color:red"></i>
							</div>
						</div><br>


						<div class="row from-group">
							<div class="col-sm-12">
								<label id=labelregister>Name</label>
								<input type="text" class="form-control" placeholder="Enter your Name" id="name" name="user_name">
								<i id="name_error" style="color:red"></i>
							</div>
						</div><br>

						<div class="row from-group">
							<div class="col-sm-12">
								<label id=labelregister>Mobile</label>
								<input type="tel" class="form-control" placeholder="Enter your Mobile no." id="mobile" name="mobile">
								<i id="mobile_error" style="color:red"></i>
							</div>
						</div><br>

						<div class="row from-group">
							<div class="col-sm-12">
								<label id=labelregister>Heard About Us</label>
								<textarea class="form-control" name="source" id="heard"></textarea><i id="hearderror" style="color:red"></i></div>
						</div>

						<br>

						<button type="submit" value="submit" name="Submit" class="btn btn-success" id="register">SUBMIT</button>
						<br>
						
					</form>

				</div>
			</div>

		</div>
	</section>
</div>
