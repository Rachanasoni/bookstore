<?php
include ("db_connection.php");
session_start();
?>

<script>
	
</script>

<div class="panel panel-success" style="background-color:azure; height:595px;">
				<div class="panel header text-center">
					<h2 style="color:#7D209B;font-family:'Alegreya';" id="innerheading">Account Login</h2>
				</div>
				<div class="panel-body" style="padding:40px;" id="panelbody">
				<?php				
	 				echo $_SESSION['loginmsg'];
				?>
		
			<form id="loginform" action="#">
					<div class="row form-group">
						<div class="col-sm-12">
							<label>Email</label>
							<input type="text" placeholder="Enter your Email" class="form-control" id="email" name="email">
							<i id="email_error" style="color:red"></i>
						</div>
					</div>
					<br>
					<div class="row from-group">
						<div class="col-sm-12">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Enter your password" id="password" name="password">
							<i id="password_error" style="color:red"></i>
						</div>
					</div>
					<br>
					<div class="row form-group">
						<div class="col-sm-12">
							<caption><a href="#" onClick="associatedPage('forgotpassword')">Forgot your password</a></caption>
						</div>
					</div>
					<br>
					<br>

					<button class="btn btn-success" type="button" name="submit"  onClick="submitLogin()">SUBMIT</button>
					</form>

				</div>
			</div>
			
		