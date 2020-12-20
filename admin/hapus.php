<?php
include '../koneksi/koneksi.php';
$id=$_GET['hapus'];
$query=mysqli_query($link, "DELETE FROM berita where id='$id' ");

if ($query) {
    header('location:admin_rubah.php');
    echo "Berhasil hapus";
}

 ?>
