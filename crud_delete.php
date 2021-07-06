
<?php 
  require('db.php');

  if (isset($_POST["del"])) {
    $delUID = $_POST["delUID"];

    $query = "DELETE FROM users WHERE id = $delUID";
    $sql = mysqli_query($con, $query);

    echo '<script>alert("SUCCESSFULLY DELETED PROFILE ID: '.$delUID.'!")</script>';
    echo '<script>window.location.href = "crud_users_page.php"</script>';
  } else {
    echo '<script>window.location.href = "crud_users_page.php"</script>';
  }
?>