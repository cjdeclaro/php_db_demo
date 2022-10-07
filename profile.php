<?php
  include 'connect.php';

  session_start();

  if(!isset($_SESSION['firstname'])) {
    header('Location: login.php');
  }

  $query = "SELECT * FROM `Users` WHERE username = '".$_SESSION['username']."'";
  $users = executeQuery($query);

  if(mysqli_num_rows($users) > 0) {
    while($user = mysqli_fetch_assoc($users)) {
      $firstname = $user['first_name'];
      $lastname = $user['last_name'];
    }
  } else {
    header('Location: login.php?error=no_accout_found');
  }
?>

<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <p>
        First Name: <?php echo $firstname ?>
        <br>
        Last Name: <?php echo $lastname ?>
      </p>
    </div>
  
    <div class="row">
      <a href="edit_profile.php">EDIT</a>
      <a href="delete.php">DELETE</a>
      <a href="login.php">LOG OUT</a>
    </div>
  </div>
</body>

</html>