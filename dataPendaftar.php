<?php
session_start();

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    header('location: loginAdmin.php');
    exit();
}

$dsn = "mysql:host=localhost;dbname=sekolah_lmao";
$kunci = new PDO($dsn, "root", "");
$sql2 = "SELECT * FROM siswa WHERE Status='Belum Terdaftar'";
$hasil = $kunci->query($sql2);

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Menu</title>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="profileAdmin.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dataPendaftar.php">Data Pendaftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin.php">Upload Berkas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>

    <div class="container p-4 pb-0" style="background-color: #929fba">
        <section class="">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h2 class="text-center text-lg-start text-white">
                        <marquee> WELCOME ADMIN! </marquee>
                    </h2>
                </div>
            </div>
        </section>
    </div>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Place of Birth</th>
                    <th>Age</th>
                    <th>Distance</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = $hasil->fetch(PDO::FETCH_ASSOC)) {
                    $stmt = $kunci->prepare('SELECT DATEDIFF(CURDATE(), `Tanggal Lahir`)/365 AS age FROM siswa WHERE IDsiswa = ?');
                    $stmt->execute([$row['IDsiswa']]);
                    $age = $stmt->fetchColumn();

                ?>
                    <tr>
                        <td><?= $row['Nama'] ?></td>
                        <td><?= $row['Tanggal Lahir'] ?></td>
                        <td><?= $row['Tempat Lahir'] ?></td>
                        <td><?=$age?></td>
                        <td><?= $row['Latitute'] ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    View More
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#">Alamat: <?= $row['Alamat'] ?></a></li>
                                    <li><a class="dropdown-item" href="#">Email: <?= $row['Email'] ?></a></li>
                                    <li><a class="dropdown-item" href="#">Recovery key: <?= $row['Recovery key'] ?></a></li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <form action="update_status.php" method="post">
                                <input type="hidden" name="id" value="<?= $row['IDsiswa'] ?>">
                                <input type="hidden" name="status" value="Terdaftar">
                                <button type="submit" class="btn btn-success">Approve</button>
                            </form>
                        </td>
                        <td>
                            <form action="update_status.php" method="post">
                                <input type="hidden" name="id" value="<?= $row['IDsiswa'] ?>">
                                <input type="hidden" name="status" value="Ditolak">
                                <button type="submit" class="btn btn-danger">Decline</button>
                            </form>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    </div>


</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>