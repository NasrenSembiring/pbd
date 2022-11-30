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
        <div class="container-fluid">
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
                        <a class="nav-link active text-light" href="dosen/index.php">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white-50" href="../mahasiswa/index.php">Mahasiswa</a>
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
    <table border="1" class="table table-bordered">
        <a href="insert.php" type="button" class="btn btn-success m-2">Tambah Data Dosen</a>
        <thead class="table-dark">
            <tr>
                <td>No</td>
                <td>Kode Dosen</td>
                <td>Nama Dosen</td>
                <td>Kode Jurusan</td>
                <td>Alamat</td>
                <td>Pendidikan</td>
                <td colspan="2">Aksi</td>
            </tr>
        </thead>

        <?php
        include '../koneksi.php';
        $sql = "SELECT * FROM dosen";
        $data = mysqli_query($con, $sql);
        while ($rd = mysqli_fetch_array($data)) {

        ?>
        <tr>
            <td>
                <?= $rd['id']; ?>
            </td>
            <td>
                <?= $rd['kode_dosen']; ?>
            </td>
            <td>
                <?= $rd['nama_dosen']; ?>
            </td>
            <td>
                <?= $rd['kode_jur']; ?>
            </td>
            <td>
                <?= $rd['alamat']; ?>
            </td>
            <td>
                <?= $rd['pendidikan']; ?>
            </td>
            <td><a href="update.php?kode_dosen=<?= $rd['kode_dosen']; ?>"><i class="fa-solid fa-pen"></i></a></td>
            <td><a href="delete.php?kode_dosen=<?= $rd['kode_dosen']; ?>"><i
                        class="fa-solid fa-trash text-danger"></i></a>
            </td>

        </tr>
        <?php } ?>

    </table>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>