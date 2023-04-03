<?php
    $dsn = "mysql:host=localhost;dbname=utswebpro";
    $db = new PDO($dsn, "root", "");
    $sql = "SELECT count(*) as jumlah FROM siswa WHERE Status = 'Diterima'";
    $hasil = $db->query($sql);
    $diterima = $hasil->fetch(PDO::FETCH_ASSOC);

    $sql = "SELECT count(*) as jumlah FROM siswa WHERE Status = 'Terdaftar' OR Status='Diterima'";
    $hasil = $db->query($sql);
    $terdaftar = $hasil->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>Bootstrap Example</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">SMA JUAN TERRO</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ppdb.php">Ppdb</a>
                            </li>
                            <div class="btn-group">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" align="right">
                                    Login Sebagai
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                    <li><a class="dropdown-item" role="button" href="loginAdmin.php">Admin</a></li>
                                    <li><a class="dropdown-item" role="button" href="loginSiswa.php">Siswa</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </head>
    <body class="p-3 m-0 border-0 bd-example">
        <style>
            :root {
                --primary-color: #6d4c41;
                --secondary-color: #ffb900;
                --background-color: #f5f5f5;
                --text-color: #333333;
                --link-color: #007bff;
            }

            .navbar {
                background-color: var(--primary-color);
                color: var(--text-color);
            }

            .navbar-brand,
            .navbar-nav .nav-link {
                color: var(--text-color);
            }

            .navbar-toggler {
                border-color: var(--text-color);
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='var(--text-color)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }

            .carousel-item {
                background-color: var(--background-color);
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
                background-color: var(--primary-color);
            }

            section {
                background-color: var(--background-color);
                color: var(--text-color);
                padding: 30px;
            }

            h3 {
                color: var(--primary-color);
                margin-bottom: 20px;
            }

            a {
                color: var(--link-color);
            }

            .btn-primary {
                background-color: var(--primary-color);
                border-color: var(--primary-color);
            }

            .btn-primary:hover {
                background-color: var(--secondary-color);
                border-color: var(--secondary-color);
            }

            .btn-secondary {
                background-color: var(--background-color);
                border-color: var(--text-color);
                color: var(--text-color);
            }

        .btn-secondary {
            background-color: var(--background-color);
            border-color: var(--text-color);
            color: var(--text-color);
        }

        .btn-secondary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--text-color);
        }
    </style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">SMA JUAN TERRO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ppdb.php">Ppdb</a>
                        </li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false" align="right">
                                Login Sebagai
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <li><button class="dropdown-item" type="button" a href="admin.php">Admin</button></a></li>
                                <li><button class="dropdown-item" type="button" a href="siswa.php">Siswa</button></a></li>
                            
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>

        <div>
            <br />
            <h3 class="display-6" style="text-align:center">SMA JUAN TERRO</h3>
                <p class="lead" style="text-align:center">
                Kapasitas kuota ppdb SMA Juan Terro tahun ajaran 2023/2024 tercatat sebanyak. </p>
            <div style="margin: 10%;display:flex;align-items:center;justify-content:space-between;">
                <p class="h1"><?php echo $diterima['jumlah']?> siswa diterima</p>
                <p class="h1"><?php echo $terdaftar['jumlah']?> siswa terdaftar</p>
            </div>
            <p class="h1" style="text-align:center">1500 maksimal siswa/siswi</p>
            <p class="h1" style="text-align:center">1500 maksimal siswa</p>
        </div>
        <p class="h1" style="text-align:center">1500 maksimal siswa/siswi</p>
    </div>
        