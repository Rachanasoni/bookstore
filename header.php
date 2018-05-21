<?php
session_start();
if(empty($_SESSION['aid'])){
	echo $_SESSION['msg']= "<h4 style='position:absolute;top:4px;right:25px;color:white;'>Guest You are not login</h4>";
	}else{
	echo $_SESSION['msg']= "<h4 style='position:absolute;top:4px;right:25px;color:white;'>Welcome You are login</h4>";
}
?>
		<header>
			<div class="col-sm-8" id="searchbar">
				<form method="POST" action="searchbook.php">
					<h5 style="font-weight: bold; font-size:18px;">Find Any Book of Any Author &nbsp; <span><input type="text"  id="searchbox" name="author" required></span>
						<button id="searchbtn" type="submit">Search</button></h5>
				</form>
			</div>
			<div class="col-sm-4">

				<!--<h4 id="welcometext">Welcome &nbsp;<?php echo $_SESSION['name'];?>&nbsp;<i class="fa fa-user-circle" style="font-size:22px;"></i></h4>-->
			</div>
		</header>
		<section id="logobar">
			<div class="col-sm-6">
				<figure>
					<img src="assets/images/logo4.png" alt="RACHANA Library" width="300" height="165">
				</figure>
			</div>
			<div class="col-sm-6 text-right">

				<button class="btn btn-success" id="btn" onclick="loginpage()">LOGIN</button>
				<button class="btn btn-success" id="btn" onclick="registerpage()">REGISTER</button>

			</div>
		</section>

		<section id="navlist">
			<div class="col-sm-12" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="#" class="active" onclick="homepage()">HOME</a></li>
					<li><a href="#" onclick="aboutpage()">ABOUT US</a></li>
					<li><a href="#" onclick="collectionpage()">COLLECTION</a></li>
					<li><a href="#" onclick="newaddpage()">NEWLY ADDED</a></li>
					<li><a href="#" onclick="popularpage()">MOST POPULAR</a></li>
					<li><a href="#" onclick="getinvolvedpage()">GET INVOLVED</a></li>

				</ul>

			</div>
		</section>
		
			
		<section>
			<!--Float-button-->
			<div class="contactUs-float">
				<a href="#follow" alt="contact us for your next web job">Contact Us</a>
			</div>
		</section>
