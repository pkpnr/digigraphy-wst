<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>
	<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user main page
            header("Location: main_ui.php");
        } else {
            echo "<script>
            alert('Incorrect username and/or password.')
            location = 'login.php';
            </script>";
        }
    } else {
?>
		
		<div class="loginsignup">
			<div class="container">
				<div class="row justify-content-between">
					<div class="content-left">
					</div>

					<div class="content-right">
						<form class="form" method="post" name="login">
							<div class="form-group">
								<h2 class="logintitle">Login</h2>
								<input type="text" 
								name="username"placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" 
								name="password" placeholder="Password">
							</div>
							<input type="submit" name="submit" value="Login" class="login-button">
							<div class="forgot">
							<p class='link'>Doesn't have an account yet? <a href='index.php'>Register</a></p>
							</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
		<?php
    }
?>
<script src="reg.js"></script>		
</body>
</html>