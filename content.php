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
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(67, 147, 12);">
          <div class="navbar-brand">
            Daily Info
          </div>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#ikonkecil">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="ikonkecil">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="teknologi.php" class="nav-link">Teknologi</a></li>
              <li class="nav-item"><a href="#" class="nav-link">Gadget</a></li>
            </ul>
          </div>
        </nav>

        <div class="content_baca">
          <div class="row">
            <div class="col-md-9">
              <?php
              include 'koneksi/koneksi.php';
              $id=$_GET['read'];
              $query=mysqli_query($link, "SELECT * FROM berita where id='$id' ");
              $outputan=mysqli_fetch_assoc($query);
              ?>
              <div class="judul"> <?php echo $outputan['judul'];?></div>
              <img src="images/<?php echo $outputan['gambar']; ?>" alt="">
              <div class="isi">   <?php echo $outputan['isi']; ?></div>

            </div>
            <div class="col-md-3">

            </div>
          </div>

        </div>

        <div class="footer">
          <img src="images/footer.png" alt="">

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
