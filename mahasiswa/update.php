<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <label for="">Ubah data Mahasiswa :
        <?php echo $_GET['nim'] ?>
    </label>


    <?php
    include '../koneksi.php';
    $sql = " SELECT * from mahasiswa where nim='" . $_GET['nim'] . "'";
    $data = mysqli_query($con, $sql);
    $rd = mysqli_fetch_array($data);
    ?>

    <form action="" method="POST">
        <label for="">NIM</label>
        <input type="text" name="nim" value="<?php echo $rd['nim'] ?>" readonly>
        <br>
        <label for="">Nama</label>
        <input type="text" name="nama" value="<?php echo $rd['nama_mhs'] ?>">
        <br>
        <label for="">jenis kelamin</label>
        <input type="text" name="jk" value="<?php echo $rd['jk'] ?>">
        <br>
        <label for="">Status Kerja</label>
        <input type="text" name="status_kerja" value="<?php echo $rd['status_kerja'] ?>">
        <br>
        <label for="">Usia</label>
        <input type="text" name="usia" value="<?php echo $rd['usia'] ?>">
        <br>
        <label for="">Status Menikah</label>
        <input type="text" name="status_nikah" value="<?php echo $rd['status_nikah'] ?>">
        <br>
        <label for="">jurusan</label>
        <select name="jurusan">
            <?php

            $sql = " SELECT * from jurusan ";
            $data = mysqli_query($con, $sql);
            while ($rc = mysqli_fetch_array($data)) {
            ?>
            <option value="<?php echo $rc['kode_jur'] ?>">
                <?php echo $rc['nama_jur'] ?>
            </option>
            <?php } ?>
        </select>
        <!-- <input type="text" name="jurusan" value=" <?php echo $rd['kode_jur'] ?>"> -->

        <br>
        <label for="">Kode Dosen</label>
        <input type="text" name="kode_dosen" value="<?php echo $rd['kode_dosen'] ?>">
        <br>
        <label for="">kelulusan</label>
        <input type="text" name="kelulusan" value="<?php echo $rd['kelulusan'] ?>">
        <br>
        <label for="">Rata-Rata</label>
        <input type="text" name="rata_rata" value="<?php echo $rd['rata_rata'] ?>">
        <br>
        <input type="submit" name="simpan" id="" value="simpan">
    </form>
</body>

</html>


<?php


if (isset($_POST['simpan'])) {

    // $sql = "UPDATE mahasiswa SET nim='" . $_POST['nim'] . "', nama_mhs='" . $_POST['nama'] . "',";
    // $sql .= "jk='" . $_POST['jk'] . "', kode_jur='" . $_POST['jurusan'] . "' WHERE nim='" . $_GET['nim'] . "'";
    $sql = "UPDATE mahasiswa SET nim='" . $_POST['nim'] . "', nama_mhs='" . $_POST['nama'] . "',";
    $sql .= "jk='" . $_POST['jk'] . "' , status_kerja='" . $_POST['status_kerja'] . "', usia='" . $_POST['usia'] . "', status_nikah='" . $_POST['status_nikah'] . "', kode_jur='" . $_POST['jurusan'] . "', kode_dosen='" . $_POST['kode_dosen'] . "', kelulusan='" . $_POST['kelulusan'] . "', rata_rata='" . $_POST['rata_rata'] . "' WHERE nim='" . $_GET['nim'] . "' ";
    // echo $sql;
    // die();
    $proses = mysqli_query($con, $sql);
    echo "<script>alert('data berhasil diubah');window.location='index.php';</script>";
}
?>