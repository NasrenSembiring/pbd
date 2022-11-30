<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include '../koneksi.php';
    $sql = " SELECT * from jurusan where kode_jur='" . $_GET['kode_jur'] . "'";
    $data = mysqli_query($con, $sql);
    $rd = mysqli_fetch_array($data);
    ?>
    <form action="" method="POST">
        <label for="kode_jur">Kode Jurusan</label>
        <input type="text" name="kode_jur" value="<?= $rd['kode_jur'] ?>">
        <label for="kode_jur">Nama Jurusan</label>
        <input type="text" name="nama_jur" value="<?= $rd['nama_jur'] ?>">
        <input type="submit" name="simpan" value="simpan">
    </form>

</body>

</html>

<?php

if (isset($_POST['simpan'])) {
    include '../koneksi.php';
    $sql = "UPDATE jurusan SET kode_jur='" . $_POST['kode_jur'] . "', nama_jur='" . $_POST['nama_jur'] . "' WHERE kode_jur='" . $_GET['kode_jur'] . "'";
    // echo $sql;
    // die();
    $proses = mysqli_query($con, $sql);
    echo "<script>alert('data berhasil disimpan');window.location='index.php';</script>";
}

?>