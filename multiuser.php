<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shourtcut icon" href="images/teknologi.jpg">
    <link rel="stylesheet" href="style.css">
    <title>Daily Info</title>
  </head>
  <body>
  <div class="card">
      <div class="card_header">
        Login Member
      </div>

    <div class="card_body">
      <form class="form-group" method="post">
        <label for="email">email</label>
        <input type="text" id="email" class="form-control" name="email">

        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="pass"><br>
        <input type="submit" class="btn btn-info" name="login" value="Login">
        <input type="submit"class="btn btn-info" name="register" value="Register">
      </form>

    </div>
  </div>

  <?php
  include 'koneksi/koneksi.php';
  if (isset($_POST['login'])) {
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $query=mysqli_query($link, "SELECT * FROM multiuser where email='$email' AND password='$pass' ");
    $r=mysqli_fetch_assoc($query);

      if ($r ) {
        header('location:admin/admin_teknologi.php');
      }
      else {
        echo "email atau password salah";
      }

  }
  elseif (isset($_POST['register'])) {
    header('location:buatakun.php');
  }
   ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
