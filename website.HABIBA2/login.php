<?php
	include 'connection.php';
	SESSION_START();
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="website.css"/>
	</head>
	
	<body>
		<div class="container">
			<img src="login.jpg"/>

				<form action="login.php" method="post">
				Enter your email: <input type: "text" name="email"></br></br>
				Enter your password: <input type: "text" name="password"></br></br>
				
				<input name="login" type="submit" id="btn" value="LOGIN"/>
				</br><input name="reg" type="submit" id="btn2" value="REGISTRATION" />
			</form>
		</div>

<?php
	if(isset($_POST['login'])){
		
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$sql="select*from details where email='$email'AND password='$password'";
		$result=mysqli_query($con,$sql);
		
		if($result){
			if(mysqli_num_rows($result)> 0)
			{
				$_SESSION["email"] = $email;
				
				echo"
					<script>
					alert('You are Successfully  Logged in');
					window.location.href='website.php';
					</script>
					";
				
			}
			else
			{
				echo"
					<script>
					alert('Password or Email not Found ');
					window.location.href('login.php');
					</script>
					";
			}
		}
		else{
			echo"
						<script>
							alert('Database Error');
							window.location.href('login.php');
						</script>
						";
		}
	}
	else if(isset($_POST['reg'])){
				echo 	" <script>
								window.location.href='reg.php';
							</script>
							";
		
			}
?>
	</body>
</html>