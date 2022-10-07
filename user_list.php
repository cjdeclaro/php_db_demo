<?php
  include 'connect.php';

  $query = "SELECT * FROM `Users`";
  $users = executeQuery($query);
?>

<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <style>
    th {
      padding: 5px;
    }

    td {
      padding: 5px;
    }
  </style>
</head>

<body>
  <div class="container">
    <table>
      <tr>
        <th>
          First Name
        </th>
        <th>
          Last Name
        </th>
      </tr>
      <?php
        while($user = mysqli_fetch_assoc($users)) {
          echo'
            <tr>
              <td>
                '.$user['first_name'].'
              </td>
              <td>
              '.$user['last_name'].'
              </td>
            </tr>
          ';
        }
      ?>
    </table>

    <a href="index.php">back</a>
  </div>
</body>

</html>
