<?php
include '../koneksi.php';
$sql = "delete from mahasiswa where nim='" . $_GET['nim'] . "'";
$data = mysqli_query($con, $sql);
echo "<script>alert('data berhasil dihapus');window.location='index.php';</script>"

    ?>