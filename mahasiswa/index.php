<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container-fluid ">
            <a class="navbar-brand text-light" href="#">Kampus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white-50" aria-current="page" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="../dosen/index.php">Dosen</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active text-light" href="mahasiswa/index.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="../jurusan/index.php">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="../nilai/index.php">Nilai</a>
                    </li>

                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <table border="1" width="100%" class="table table-bordered">
        <a href="insert.php" type="button" class="btn btn-success m-2">Tambah Data Mahasiswa</a>
        <thead class="table-dark">
            <tr>
                <td>No</td>
                <td>NIM</td>
                <td>NAMA</td>
                <td>JENIS KELAMIN</td>
                <td>Status Kerja</td>
                <td>Usia</td>
                <td>Status Nikah</td>
                <td>Jurusan</td>
                <td>Kode Dosen</td>
                <td>Kelulusan</td>
                <td>Rata-Rata</td>

                <td colspan="2">Aksi</td>

            </tr>
        </thead>


        <?php
        include '../koneksi.php';
        $no = 1;
        $sql = "SELECT * FROM mahasiswa";
        $data = mysqli_query($con, $sql);
        while ($rd = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td>
                <?= $no++ ?>
            </td>
            <td>
                <?= $rd['nim']; ?>
            </td>
            <td>
                <?= $rd["nama_mhs"]; ?>
            </td>
            <td>
                <?= $rd["jk"]; ?>
            </td>
            <td>
                <?= $rd["status_kerja"]; ?>
            </td>
            <td>
                <?= $rd["usia"]; ?>
            </td>
            <td>
                <?= $rd["status_nikah"]; ?>
            </td>
            <td>
                <?= $rd["kode_jur"]; ?>
            </td>
            <td>
                <?= $rd["kode_dosen"]; ?>
            </td>
            <td>
                <?= $rd["kelulusan"]; ?>
            </td>
            <td>
                <?= $rd["rata_rata"]; ?>
            </td>
            <td><a href="delete.php?nim=<?= $rd['nim']; ?>"><i class="fa-solid fa-pen"></i></a></td>
            <td><a href="update.php?nim=<?= $rd['nim']; ?>"><i class="fa-solid fa-trash text-danger"></i></a></td>

        </tr>
        <?php
        }

        ?>
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>