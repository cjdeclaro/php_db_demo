<?php
  include 'connect.php';

  if(isset($_POST['btnsubmit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $query = "INSERT INTO `Users`(`username`, `password`, `first_name`, `last_name`) VALUES ('".$username."','".$password."','".$firstname."','".$lastname."')";
    if(executeQuery($query)){
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
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>
      </div>

      <div class="row">
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>
      </div>

      <div class="row">
        <label for="firstname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" name="firstname" required>
      </div>

      <div class="row">
        <label for="lastname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" name="lastname" required>
      </div>

      <div class="row">
        <a href="index.php">Cancel</a>
        <button type="submit" name="btnsubmit">Sign Up</button>
      </div>
    </div>
  </form>
</body>

</html>