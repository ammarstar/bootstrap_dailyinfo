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
    <?php
    include 'koneksi/koneksi.php';
     ?>
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
              <li class="nav-item"><a href="teknologi.php" class="nav-link active">Teknologi</a></li>
              <li class="nav-item"><a href="gadget.php" class="nav-link">Gadget</a></li>
            </ul>
          </div>
        </nav>

        <div class="carousel slide" id="gambar" data-ride="carousel">
          <ul class="carousel-indicators">
            <li data-target="#gambar" data-slide-to="0" class="active"></li>
            <li data-target="#gambar" data-slide-to="1"></li>
          </ul>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/teknologi.jpg" alt="">
            </div>
            <div class="carousel-item">
              <img src="images/startup.jpg" alt="">
            </div>
          </div>
        </div>

        <div class="content">
          <div class="row">
            <div class="col-md-9">
              <?php
              $query=mysqli_query($link, "SELECT * FROM berita where kategori='Teknologi' ");
              while ($outputan=mysqli_fetch_assoc($query)) {
              ?>
              <div class="judul">
                <img src="images/<?php echo $outputan['gambar']; ?>" alt="">
                <a href="content.php?read=<?php echo $outputan['id']; ?>">
                  <?php echo $outputan['judul']; ?>
                </a>
              </div>
              <?php

              }
               ?>
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
