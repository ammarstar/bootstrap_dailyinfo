<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../images/teknologi.jpg">
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

    <title>Halaman admin</title>
  </head>
  <body>
    <div class="container">
      <div class="admin_wrap">
        <h5>HALAMAN ADMIN</h5>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="navbar-brand">
            Halaman Admin
          </div>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#ikon">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="ikon">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a href="admin_teknologi.php" class="nav-link">Teknologi</a>
              </li>
              <li class="nav-item active">
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
            <input type="text" name="judul" class="form-control" id="judul">

            <label for="isi">Isi</label>
            <textarea name="isi" class="ckeditor" id="ckeditor"></textarea>
            <br/>
            <input type="text" name="nama_gambar" value="">
            <br/>
            <input type="file" class="form-control-file" name="gambar" value="">
            <br/><br/>

            <button type="submit" class="btn btn-info" name="simpan">simpan</button>

          </form>

          <?php
          include '../koneksi/koneksi.php';
          if (isset($_POST['simpan'])) {
            $kategori="Gadget";
            $asal=$_FILES['gambar']['name'];
            $tmp=$_FILES['gambar']['tmp_name'];
            $tampung='../images/';
            move_uploaded_file($tmp, $tampung.$asal);

            $query=mysqli_query($link, "insert into berita values(null, '$kategori',
                                                                              '".$_POST['judul']."',
                                                                              '".$_POST['isi']."',
                                                                              '".$_POST['nama_gambar']."',
                                                                              '$asal') ");
            if ($query) {
              echo "Berhasil simpan";
            }
            else {
              echo "Gagal simpan";
            }
          }
           ?>
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
