<?php 
require('db.php');
  
  $sort = 'ASC';
  $column = 'id';

  if (isset($_GET['column']) && isset($_GET['sort'])) {
    $column = $_GET['column'];
    $sort = $_GET['sort'];

    // Opposite
    $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC'; 
  }

  $query = "SELECT * FROM users ORDER BY $column $sort";
  $sql = mysqli_query($con, $query);
?>