<?php
	include 'connection.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="website.css"/>
	</head>
	<body>
		<div class = "reg">

			<form method="post">
				<p style="color: #6c3483; font-size:500%"><b><i><font face="vivaldi">Enter your information for Registration...</font></i></b></p>
				<h3><b>Name :</b></h3> <input type: "text" name="name"></br></br>
				<h3><b>Email :</b></h3> <input type: "text" name="email"></br></br>
				<h3><b>Password :</b></h3> <input type: "text" name="password"></br></br>
				<h3><b>Nationality :</b></h3> <input type: "text" name="nationality"></br></br>
				<h3><b>Hobby :</b></h3> <input type: "text" name="hobby"></br></br>
				<input name="submit" type="submit" id="btn" value="SUBMIT"/>
			</form>
		</div>
	</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$nationality=$_POST['nationality'];
		$hobby=$_POST['hobby'];
		
		$sql = "INSERT INTO details (name,email,password,nationality,hobby) VALUES ('$name','$email','$password','$nationality','$hobby')";
		
		if(mysqli_query($con,$sql)){
								echo" 
								<script>
								window.location.href='login.php';
								</script>
								";
		}
		else {
			echo "
				<script>
					alert('Registration Failed  ');
					window.location.href='registration.php';
				</script>
				";
		}
	}
?>