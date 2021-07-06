<?php 
  require('db.php');

  if (isset($_POST["chg"])) {
    $chgUID = $_POST['chgUID'];
    $chgUname = $_POST['chgUname'];
    $chgEmail = $_POST['chgEmail'];
    $chgPwd = $_POST['chgPwd'];
  }

  if (isset($_POST['upd'])) {
    $updUID = $_POST['updUID'];
    $updUname = $_POST['updUname'];
    $updEmail = $_POST['updEmail'];
    $updPwd = $_POST['updPwd'];

    $updHashPwd = password_hash($updPwd, PASSWORD_DEFAULT);

    $query = "UPDATE users SET username = '$updUname', email = '$updEmail', password = '$updHashPwd' WHERE id = $updUID";
    $sql = mysqli_query($con, $query);

    echo '<script>alert("Profile has been successfully updated!")</script>';
    echo '<script>window.location.href = "crud_users_page.php"</script>';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update</title>
  <link rel="stylesheet" href="update_page.css">
</head>

<body>
<div class="main">
    <form class="update-main" action="crud_update.php" method="post">
      <h3>change user details.</h3>
      <input type="text" name="updUname" placeholder="Enter username" value=""  required/>
      <input type="text" name="updEmail" placeholder="Enter email" value=""  required/>
      <input type="password" name="updPwd" placeholder="Enter password" value="" required/>
      <input type="submit" name="upd" value="UPDATE" />
      <input type="hidden" name="updUID" value="<?php echo $chgUID?>" />
    </form>
</body>
</html>