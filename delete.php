<?php
  include 'connect.php';

  session_start();

  if(!isset($_SESSION['firstname'])) {
    header('Location: login.php');
  }

  if(isset($_POST['btndelete'])) {
    $query = "DELETE FROM `Users` WHERE `username` = '".$_SESSION['username']."'";
    if(executeQuery($query)) {
      header('Location: login.php');
    }
  }
?>

<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
  <form action="" method="post">
    <div class="container">
      <div class="row">
        <p>Are you sure you want to delete this profile?</p>
      </div>

      <div class="row">
        <a href="profile.php">Cancel</a>
        <button type="submit" name="btndelete">YES</button>
      </div>
    </div>
  </form>
</body>

</html>
