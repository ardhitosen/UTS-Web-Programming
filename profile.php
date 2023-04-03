<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("location: index.php");
}

define('DSN', 'mysql:host=localhost;dbname=utswebpro');
define('DBUSER', 'root');
define('DBPASS', '');

$IDsiswa = $_SESSION['id'];

$db = new PDO(DSN, DBUSER, DBPASS);
$sql = "SELECT * FROM siswa WHERE IDsiswa = ?";
$stmt = $db->prepare($sql);
$stmt->execute([$IDsiswa]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input values from the form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nisn = $_POST['nisn'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $alamat = $_POST['alamat'];

    // Update the data in the database
    $sql = "UPDATE siswa SET Nama = ?, Email = ?, NISN = ?, `Tanggal Lahir` = ?, `Tempat Lahir` = ?, Alamat = ? WHERE IDsiswa = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$nama, $email, $nisn, $tgl_lahir, $tempat_lahir, $alamat, $IDsiswa]);

    // Refresh the page to show the updated data
    header("location: profile.php");
}

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Menu</title>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="Siswa.php">Student's Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Siswa.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
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
                        <marquee> WELCOME STUDENT'S! </marquee>
                        </h1>
                </div>
            </div>
    </div>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px" src="<?php echo $row['Pas Foto'] ?>">
                    <span class="font-weight-bold"><?php echo $row['Nama'] ?></span>
                    <span class="text-black-50"><?php echo $row['Email'] ?></span><span> </span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Student's Profile</h4>
                    </div>
                    <form method="POST">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label"><strong>Nama:</strong></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nama" value="<?php echo $row['Nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label"><strong>Email:</strong></label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" name="email" value="<?php echo $row['Email'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label"><strong>NISN:</strong></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nisn" value="<?php echo $row['NISN'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label"><strong>Date of Birth:</strong></label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $row['Tanggal Lahir'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label"><strong>Place of Birth:</strong></label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['Tempat Lahir'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label"><strong>Address:</strong></label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="alamat"><?php echo $row['Alamat'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="update_data">Save</button>
                            </div>
                        </div>
                    </form>


                </div>

                <style>
                    body {
                        background: rgb(99, 39, 120)
                    }

                    .form-control:focus {
                        box-shadow: none;
                        border-color: #BA68C8
                    }

                    .profile-button {
                        background: rgb(99, 39, 120);
                        box-shadow: none;
                        border: none
                    }

                    .profile-button:hover {
                        background: #682773
                    }

                    .profile-button:focus {
                        background: #682773;
                        box-shadow: none
                    }

                    .profile-button:active {
                        background: #682773;
                        box-shadow: none
                    }

                    .back:hover {
                        color: #682773;
                        cursor: pointer
                    }

                    .labels {
                        font-size: 11px
                    }

                    .add-experience:hover {
                        background: #BA68C8;
                        color: #fff;
                        cursor: pointer;
                        border: solid 1px #BA68C8
                    }
                </style>
            </div>
        </div>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>