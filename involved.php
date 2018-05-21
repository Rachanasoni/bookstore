<?php
session_start();
?>


<div class="container-fluid">
	<section>
		<div class="col-sm-1"></div>

		<div class="col-sm-10" style="background-color:azure; padding:20px;  border-radius:10px; color:#7D209B;">

			<section style="height:80px;">
				<div class="col-sm-12 text-center">
					<h3 style="color:#7D209B; font-family:'Alegreya';">ADD BOOKS TO LIBRARY</h3>
				</div>
			</section>
			<hr>

			<div class="row form-group">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">

					<!----------form starts here. POST method is used for security purpose becoz we are sending sensitive information like password in the form.If method is "POST" is used in this form then we must use "POST" in addbook.php(action page) to store value in $_POST(global variable which takes the form data to db) "name" attribute is complusory becoz this name is used to store that perticuler field data.----------------------------------->

					<form action="addbook.php" method="POST" onsubmit="return validateForm()">
						<div class="row form-group">
							<div class="col-sm-4"><label>Name</label></div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="bookName" placeholder="Enter Book Name" id="name">
								<i id="name_error" style="color:red"></i>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-4"><label>Author</label></div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="author" placeholder="Enter Author Name" id="author">
								<i id="author_error" style="color:red"></i>

							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4"><label>Year Of Publish</label></div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="YearOfPublish" placeholder="Enter Published Year" id="publishYear">
								<i id="year_error" style="color:red"></i>

							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-4"><label>Language</label></div>
							<div class="col-sm-8">
								<textarea class="form-control" name="language" placeholder="Enter Book Language" id="language"></textarea>
								<i id="language_error" style="color:red"></i>

							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-4"><label>Category </label></div>
							<div class="col-sm-8">
								<textarea class="form-control" name="category" placeholder="Enter Book Category" id="category"></textarea>
								<i id="category_error" style="color:red"></i>

							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-12 text-center">
								<input type="submit" id="button1" value="Submit" name="submit" />
								<button type="reset" id="button2">Clear</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-2"></div>
			</div>

		</div>
		<div class="col-sm-1"></div>
	</section>
</div>

