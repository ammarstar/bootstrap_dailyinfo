<?php
include '../koneksi/koneksi.php';
$id=$_GET['edit'];
$query=mysqli_query($link, "SELECT * FROM berita where id='$id' ");
$outputan=mysqli_fetch_assoc($query);
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/teknologi.jpg">
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="admin_wrap">
        <h5>HALAMAN ADMIN</h5>
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
          <div class="navbar-brand">
            Halaman Admin
          </div>
          <button type="button" name="button" class="navbar-toggler" data-toggle="collapse" data-target="#ikon">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="ikon">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a href="admin_teknologi.php" class="nav-link">Teknologi</a>
              </li>
              <li class="nav-item">
                <a href="admin_gadget.php" class="nav-link">Gadget</a>
              </li>
              <li class="nav-item">
                <a href="admin_rubah.php" class="nav-link">Rubah</a>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link">Log-out</a>
              </li>
            </ul>
          </div>

        </nav>

      <div class="isi">
        <form class="form-group" method="post" enctype="multipart/form-data">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $outputan['judul'] ?>">

          <label for="isi">Isi</label>
          <textarea name="isi" class="ckeditor" id="ckeditor"><?php echo $outputan['isi']; ?></textarea>
          <br/>

          <input type="text" name="nama_gambar" placeholder="nama gambar">
          <input type="file" class="form-control-file" name="gambar" value="">
          <br/>

          <button type="submit" class="btn btn-info" name="simpan">Simpan Perubahan</button>
          <?php
          if (isset($_POST['simpan'])) {
            $query1=mysqli_query($link, "UPDATE berita SET judul='".$_POST['judul']."',
                                                             isi='".$_POST['isi']."'where id='$id' ");
          }
           ?>
        </form>

      </div>

    </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
