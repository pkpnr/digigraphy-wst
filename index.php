<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="reg.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $firstname = stripslashes($_REQUEST['firstname']);
        //escapes special characters in a string
        $firstname = mysqli_real_escape_string($con, $firstname);
        $lastname = stripslashes($_REQUEST['lastname']);
        //escapes special characters in a string
        $lastname = mysqli_real_escape_string($con, $lastname);
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (firstname,lastname,username, password, email, create_datetime)
                     VALUES ('$firstname','$lastname','$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<script>
            alert('You have successfully registered!.')
            location = 'login.php';
            </script>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
            <div class="wrapper">
                <div class="left">
                    <div class="profile-pic-div">
                        <img src="profile/P8.gif"
                        alt="user" width="100" id="photo">
                        <input type="file" id="file">
                        <label for="file" id="upload">Choose photo</label>
                    </div>
                </div>

                <div class="right">
                    <div class="info">
                        <form class="form" action="" method="post">
                     
                    <h1 class="login-title">Registration</h1>
                    <input type="text" class="login-input" name="firstname" placeholder="First Name" required />
                    <input type="text" class="login-input" name="lastname" placeholder="Last Name" required />
                    <input type="text" class="login-input" name="username" placeholder="Username" required />
                    <input type="text" class="login-input" name="email" placeholder="Email Address">
                    <input type="password" class="login-input" name="password" placeholder="Password">
                    <input type="password" class="login-input" name="password" placeholder="Confirm Password">
                    <input type="submit" name="submit" value="Register" class="login-button">
                    <p class="link">Already have an account?<br> <a href="login.php">Login here</a></p>
                </form>
                    </div>
                  
                  
                    
            </div>
            <?php
    }
?>
<script src="reg.js"></script>
</body>
</html>