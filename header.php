<?php
session_start();

?>
		<header>
			<div class="col-sm-8" id="searchbar">
				<form method="POST" action="searchbook.php">
					<h5 style="font-weight: bold; font-size:18px;">Find Any Book of Any Author &nbsp; <span><input type="text"  id="searchbox" name="author" required></span>
						<button id="searchbtn" type="submit">Search</button></h5>
				</form>
			</div>
			<div class="col-sm-4">
			
			
			<h4 id="welcometext">Welcome &nbsp;<span id="username">Guest</span>&nbsp;<i class="fa fa-user-circle" style="font-size:22px;"></i></h4>
			</div>
		</header>
		<section id="logobar">
			<div class="col-sm-6">
				<figure>
					<img src="assets/images/logo4.png" alt="RACHANA Library" width="300" height="165">
				</figure>
			</div>
			<div class="col-sm-6 text-right">

				<button class="btn btn-success" id="btn" onclick="associatedPage('login')">LOGIN</button>
				<button class="btn btn-success" id="btn" onclick="associatedPage('register')">REGISTER</button>

			</div>
		</section>

		<section id="navlist">
			<div class="col-sm-12" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="#" class="active" onclick="homePage()">HOME</a></li>
					<li><a href="#" onclick="associatedPage('about')">ABOUT US</a></li>
					<li><a href="#" onclick="associatedPage('collection')">COLLECTION</a></li>
					<li><a href="#" onclick="associatedPage('newadd')">NEWLY ADDED</a></li>
					<li><a href="#" onclick="associatedPage('popular')">MOST POPULAR</a></li>
					<li><a href="#" onclick="associatedPage('involved')">GET INVOLVED</a></li>

				</ul>

			</div>
		</section>
		
			
		<section>
			<!--Float-button-->
			<div class="contactUs-float">
				<a href="#follow" alt="contact us for your next web job">Contact Us</a>
			</div>
		</section>
