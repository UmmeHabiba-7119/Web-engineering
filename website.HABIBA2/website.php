<?php
	include 'connection.php';
	SESSION_START();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="website.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	
	<body>
		<div class="rectangular">
		
			<div class="l1">
				<p align="center" style="color: white"><b><i> Welcome to my website </i></b></p>
				<p align="center" style="color: white"><b><i> Beautiful scenery makes our hearts cheerful. So stay here... </i></b></p>
			</div>
			
			<div class="l2">
				<div class="topnav">
					<a class="active" href="home.php">HOME</a>
					<a href="file:///F:\xampp\htdocs\website.HABIBA\second.php">RIVER</a>
					<a href="file:///F:\xampp\htdocs\website.HABIBA\third.php">MOUNTAIN</a>
					<a href="file:///F:\xampp\htdocs\website.HABIBA\fourth.php">LAKE</a>
					<a href="sunrise.php">SUNRISE</a>
				</div>
			</div>
			
			<div class="l3">
				<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
				<input type="text" placeholder="Search.." name="search2">
				<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
			
			<p style="color: #6c3483; font-size:500%"><b><i><font face="vivaldi">The Beauty of Nature...</font></i></b></p>
		
		</div>
	</body>
</html>