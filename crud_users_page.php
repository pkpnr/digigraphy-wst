<?php 
  require("crud_read.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP CRUD</title>
  <link rel="stylesheet" href="users_page.css">
</head>

<body>
  <div class="main">

    <table class="read-main">
      <tr>
        <th><a href="?column=id&sort=<?php echo $sort ?>">ID</a></th>
        <th><a href="?column=username&sort=<?php echo $sort ?>">USERNAME</a></th>
        <th><a href="?column=firstname&sort=<?php echo $sort ?>">FIRST NAME</a></th>
        <th><a href="?column=lastname&sort=<?php echo $sort ?>">LAST NAME</a></th>
        <th>ACTIONS</th>
      </tr>
      <?php while($res = mysqli_fetch_array($sql)) { ?>
        <tr>
          <td><?php echo $res['id']; ?></td>
          <td><?php echo $res['username']; ?></td>
          <td><?php echo $res['firstname']; ?></td>
          <td><?php echo $res['lastname']; ?></td>
          <td>
            <form action="crud_update.php" method="post">
              <input type="submit" name="chg" value="CHG" />
              <input type="hidden" name="chgUID" value="<?php echo $res['id']; ?>" />
              <input type="hidden" name="chgEmail" value="<?php echo $res['email']; ?>" />
              <input type="hidden" name="chgUname" value="<?php echo $res['username']; ?>"/>
              <input type="hidden" name="chgPwd" value="<?php echo $res['password']; ?>" />
            </form>
            <form action="crud_delete.php" method="post">
              <input type="submit" name="del" value="DEL" />
              <input type="hidden" name="delUID" value="<?php echo $res['id']; ?>"/>
            </form>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>