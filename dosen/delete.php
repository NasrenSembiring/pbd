<?php

include '../koneksi.php';
$sql = "DELETE FROM dosen WHERE kode_dosen='" . $_GET['kode_dosen'] . "'";
$data = mysqli_query($con, $sql);
echo "<script>alert('data berhasil dihapus');window.location='index.php';</script>"
    ?>