
<?php
session_start();
//echo "test". $_SESSION['aid'];
?>

	
	<section>
	
		<div class="col-sm-4 text-center" id="parent-page">
			<div class="panel panel-success" style="background-color:azure ;">
				<div class="panel header text-center">
					<h2 style="color:#7D209B; font-family:'Alegreya';">Account</h2>
				</div>
				<div class="panel-body">
					<section>
					

						<button class="btn btn-success" id="btnlog" <?php if(empty($_SESSION['name'])){ ?> disabled <?php } ?>  onclick="associatedChildPage('reservebook')" title="Please login to use this feature">Reserve My Book</button><br>

						<button class="btn btn-success" id="btnlog" <?php if(empty($_SESSION['name'])){ ?> disabled <?php } ?>  onClick="associatedChildPage('assignbooklogin')" title="Please login to use this feature">Assigned Books</button><br>

						<button class="btn btn-success" id="btnlog" <?php if(empty($_SESSION['name'])){ ?> disabled <?php } ?>  onClick="associatedChildPage('involved')" title="Please login to use this feature">Suggessted Books</button><br/>


						<button type="button" class="btn btn-success"  <?php if(empty($_SESSION['name'])){ ?> disabled <?php } ?> id="btnlog" onClick="associatedChildPage('summary')" title="Please login to use this feature">Account Summary</button><br/>

						<button class="btn btn-success" id="btnlog"  <?php if(empty($_SESSION['name'])){ ?> disabled <?php } ?> onClick="associatedChildPage('changepassword')" title="Please login to use this feature">Changed Password</button><br/>


						<button type="button" class="btn btn-success"  <?php if(empty($_SESSION['name'])){ ?> disabled <?php } ?> id="btnlog" onClick="associatedChildPage('delete')" title="Please login to use this feature">Delete Account</button><br/>


						<button class="btn btn-success" id="btnlog"  <?php if(empty($_SESSION['name'])){ ?> disabled <?php } ?> onClick="logoutpage()" title="Please login to use this feature">Logout</button>

					</section>

				</div>
			</div>
		</div>
		<div class="col-sm-8" id="childPage">
		<?php				
	 			if(!empty($_SESSION['name'])){					
					echo $_SESSION['loginmsg'];
				}	
				?>
		</div>
	</section>

