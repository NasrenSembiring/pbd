<?php
include '../koneksi.php';
$sql = "delete from jurusan where id='" . $_GET['id'] . "'";
$data = mysqli_query($con, $sql);
echo "<script>alert('data berhasil dihapus');window.location='index.php';</script>"

    ?>