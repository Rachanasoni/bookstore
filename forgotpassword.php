<div class="container-fluid">
<?php
	session_start();
	?>
	<div class="row">
		<div class="col-sm-12">
		<div class="panel panel-success" style="background-color:azure; height:595px;">
				<div class="panel header text-center">
					<h2 style="color:#7D209B;font-family:'Alegreya';"> Recover Password</h2>
				</div>
				<div class="panel-body" style="padding:40px;">
				<form action="resetpassword.php" method="POST" onsubmit="return validatelogin();">
					<div class="row form-group">
						<div class="col-sm-12">
							<caption><h4>Enter your email address to reset your Password</h4></caption>
							<br>
							<label>Email</label>
							<input type="text" placeholder="Enter your email" class="form-control" id="email" name="email" required>
							<i id="email_error" style="color:red"></i>
						</div>
					</div>
					<br>
					
					<br>
					<button class="btn btn-success" type="submit" name="submit">Send</button>
					</form>

				</div>
			</div>
		</div>
		
		
	</div>
</div>