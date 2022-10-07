<?php
  include 'connect.php';

  session_start();

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

  if(isset($_POST['btnsave'])) {
    $save_query = "UPDATE `Users` SET `first_name`='".$_POST['firstname']."',`last_name`='".$_POST['lastname']."' WHERE username='".$_SESSION['username']."'";

    if(executeQuery($save_query)) {
      header('Location: profile.php');
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
        <label for="firstname"><b>First Name</b></label>
        <input type="text" placeholder="Enter First Name" value="<?php echo $firstname ?>" name="firstname" required>
      </div>

      <div class="row">
        <label for="lastname"><b>Last Name</b></label>
        <input type="text" placeholder="Enter Last Name" value="<?php echo $lastname ?>" name="lastname" required>
      </div>

      <div class="row">
        <a href="profile.php">Cancel</a>
        <button type="submit" name="btnsave">Save</button>
      </div>
    </div>
  </form>
</body>

</html>
