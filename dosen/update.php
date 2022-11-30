<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <label for="">Ubah Data Dosen :<?= $_GET['kode_dosen'] ?></label>

    <?php
    include '../koneksi.php';
    $sql = " SELECT * from dosen where kode_dosen='" . $_GET['kode_dosen'] . "'";
    $data = mysqli_query($con, $sql);
    $rd = mysqli_fetch_array($data);
    ?>

    <form action="" method="POST">
        <label for="kode_dosen">Kode Dosen</label>
        <input type="text" name="kode_dosen" value="<?= $rd['kode_dosen'] ?>" readonly>
        <br>
        <label for="nama_dosen">Nama Dosen</label>
        <input type="text" name="nama_dosen" value="<?= $rd['nama_dosen'] ?>">
        <br>
        <label for="kode_jur">Kode Jurusan</label>
        <input type="text" name="kode_jur" value="<?= $rd['kode_jur'] ?>">
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" value="<?= $rd['alamat'] ?>">
        <br>
        <label for="pendidikan">Pendidikan</label>
        <input type="text" name="pendidikan" value="<?= $rd['pendidikan'] ?>">
        <br>
        <input type="submit" name="simpan" value="simpan">
    </form>

    <?php

    if (isset($_POST['simpan'])) {
        include '../koneksi.php';
        $sql = "UPDATE dosen SET kode_dosen='" . $_POST['kode_dosen'] . "', nama_dosen='" . $_POST['nama_dosen'] . "', kode_jur='" . $_POST['kode_jur'] . "', alamat='" . $_POST['alamat'] . "', pendidikan='" . $_POST['pendidikan'] . "' WHERE kode_dosen='" . $_GET['kode_dosen'] . "' ";
        // echo $sql;
        // die();
    
        $proses = mysqli_query($con, $sql);
        echo "<script>alert('data berhasil disimpan');window.location='index.php';</script>";
    }

    ?>
</body>

</html>