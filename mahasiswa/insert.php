<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">NIM</label>
        <input type="text" name="nim">
        <br>
        <label for="">Nama</label>
        <input type="text" name="nama">
        <br>
        <label for="">jenis kelamin</label>
        <select name="jk" id="">
            <option value="0"></option>
            <option value="P">P</option>
            <option value="L">L</option>
        </select>
        <br>
        <label for="">Status Kerja</label>
        <select name="status_kerja" id="">
            <option value="0"></option>
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Bekerja">Bekerja</option>
        </select>
        <br>
        <label for="">Usia</label>
        <input type="text" name="usia">
        <br>
        <label for="">Status Menikah</label>
        <select name="status_nikah" id="">
            <option value="0"></option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Sudah Menikah">Sudah Menikah</option>
        </select>
        <br>
        <label for="">jurusan</label>
        <select name="jurusan">
            <option value="0"></option>
            <?php
            include '../koneksi.php';
            $sql = " SELECT * from jurusan ";
            $data = mysqli_query($con, $sql);
            while ($rd = mysqli_fetch_array($data)) {
            ?>
            <option value="<?php echo $rd['kode_jur'] ?>">
                <?php echo $rd['nama_jur'] ?>
            </option>
            <?php } ?>
        </select>
        <br>
        <label for="">Kode Dosen</label>
        <input type="text" name="kode_dosen">
        <br>
        <label for="">kelulusan</label>
        <select name="kelulusan" id="">
            <option value="0"></option>
            <option value="Tepat Waktu">Tepat Waktu</option>
            <option value="Terlambat">Terlambat</option>
        </select>
        <br>
        <label for="">Rata-Rata</label>
        <input type="text" name="rata_rata">
        <br>
        <input type="submit" name="simpan" id="" value="simpan">
    </form>
</body>

</html>


<?php


if (isset($_POST['simpan'])) {
    include '../koneksi.php';
    $sql = "INSERT INTO mahasiswa SET nim='" . $_POST['nim'] . "', nama_mhs='" . $_POST['nama'] . "',";
    $sql .= "jk='" . $_POST['jk'] . "' , status_kerja='" . $_POST['status_kerja'] . "', usia='" . $_POST['usia'] . "', status_nikah='" . $_POST['status_nikah'] . "', kode_jur='" . $_POST['jurusan'] . "', kode_dosen='" . $_POST['kode_dosen'] . "', kelulusan='" . $_POST['kelulusan'] . "', rata_rata='" . $_POST['rata_rata'] . "' ";
    // echo $sql;
    // die();
    $proses = mysqli_query($con, $sql);
    echo "<script>alert('data berhasil disimpan');window.location='index.php';</script>";
}
?>