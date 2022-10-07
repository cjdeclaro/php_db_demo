<?php
  include 'connect.php';

  session_start();
  session_destroy();
  session_start();

  if(isset($_POST['btnlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `Users` WHERE username = '".$username."' AND password = '".$password."'";
    $users = executeQuery($query);

    if(mysqli_num_rows($users) > 0) {
      while($user = mysqli_fetch_assoc($users)) {
        $_SESSION['firstname'] = $user['first_name'];
        $_SESSION['lastname'] = $user['last_name'];
        $_SESSION['username'] = $user['username'];
      }

      header('Location: profile.php');
    } else {
      header('Location: login.php?error=no_accout_found');
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
        <a href="index.php">Cancel</a>
        <button type="submit" name="btnlogin">Login</button>
      </div>
    </div>
  </form>
</body>

</html>