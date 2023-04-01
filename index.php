<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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

        .btn-secondary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--text-color);
        }
    </style>

    
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
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ppdb.php">Ppdb</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
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
        <body>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="./Images/School1.PNG" alt="First slide" style="width:800px;height:400px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./Images/School2.PNG" alt="Second slide" style="width:800px;height:400px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./Images/School3.jpg" alt="Third slide" style="width:800px;height:400px">
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
                Salah satu sekolah menengah tingkat atas swasta terbaik di Gading Serpong, Tangerang Selatan. Dengan terakreditasi A. SMA Juan Terro telah berdiri sejak tahun 2022 dan mempunyai banyak prestasi baik dibidang akademik maupun non akademik </p>
        </div>
    </body>