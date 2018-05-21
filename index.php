
<?php
	session_start();
	
	?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="description" content="Bookstore">
	<meta name="theme-color" content="darkblue">
	<meta name="keywords" content="HTML,CSS,AJAX,JavaScript">
	<meta name="author" content="Rachana soni">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bookstore</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="assets/css/font-awesome.css" rel="stylesheet">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
	<script type="text/javascript" src="common.js"></script>
	<script type="text/javascript" src="bookstore.js"></script>
	
</head>

<body>
	<div class="container-fluid">
	<?php include('header.php'); ?>
		<section id="result"></section>
		<hr>
	<?php include('footer.php'); ?>
	</div>
</body>
</html>
