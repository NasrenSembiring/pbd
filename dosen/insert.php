<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body>
    <div class="container ">
        <div class="col text-center">
            <h2>Form Input Data Dosen</h2>
        </div>
    </div>
    <div class="container justify-content-center text-center ">
        <div class="row text start justify-content-center ">
            <form action="" method="POST">
                <div class="md-1 row m-1 justify-content-center">
                    <label for="kode_dosen" class="col-sm-2 col-form-label">Kode Dosen</label>
                    <div class="col-sm-5">
                        <input type="text" name="kode_dosen" class="form-control">
                    </div>
                </div>
                <div class="md-1 row m-1 justify-content-center">
                    <label for="nama_dosen" class="col-sm-2 col-form-label">Nama Dosen</label>
                    <div class="col-sm-5">
                        <input type="text" name="nama_dosen" class="form-control">
                    </div>
                </div>


                <div class="md-1 row m-1 justify-content-center">
                    <label for="kode_jur" class="col-sm-2 col-form-label">Kode Jurusan</label>
                    <div class="col-sm-5">
                        <input type="text" name="kode_jur" class="form-control">
                    </div>
                </div>

                <div class="md-1 row m-1 justify-content-center">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-5">
                        <input type="text" name="alamat" class="form-control">
                    </div>
                </div>

                <div class="md-1 row m-1 justify-content-center">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="col-sm-5">
                        <select name="pendidikan" id="" class="form-control">
                            <option value="0"></option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                <a href="index.php" class="btn btn-secondary">Kembali</a>
                <a href="../index.html" class="btn btn-secondary">Home</a>
            </form>
        </div>
    </div>
    <?php

    if (isset($_POST['simpan'])) {
        include '../koneksi.php';
        $sql = "INSERT INTO dosen SET kode_dosen='" . $_POST['kode_dosen'] . "', nama_dosen='" . $_POST['nama_dosen'] . "', kode_jur='" . $_POST['kode_jur'] . "', alamat='" . $_POST['alamat'] . "', pendidikan='" . $_POST['pendidikan'] . "' ";

        $proses = mysqli_query($con, $sql);

        echo "<script>alert('data berhasil disimpan');window.location = 'index.php';</script>";

    }
    ?>
















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


</body>

</html>