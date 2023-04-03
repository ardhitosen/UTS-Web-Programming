<?php
    session_start();
    define('DSN', 'mysql:host=localhost;dbname=utswebpro');
    define('DBUSER','root');  
    define('DBPASS','');
    $db = new PDO(DSN, DBUSER, DBPASS);
    $sql = "SELECT siswa.Status as sStatus, berkas.Status as bStatus FROM siswa JOIN berkas ON siswa.berkas = berkas.IDberkas WHERE IDsiswa = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$_SESSION['id']]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pengumuman</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
            </section>
        </div>

        <div class="typewriter">
            <h1>PENGUMUMAN PPDB SMP JUAN TERRO TAHUN AJARAN 2023/2024</h1>
            <style>
            /* DEMO-SPECIFIC STYLES */
            .typewriter h1 {
            color: blue;
            font-family: monospace;
            overflow: hidden; /* Ensures the content is not revealed until the animation */
            border-right: .15em solid orange; /* The typwriter cursor */
            white-space: nowrap; /* Keeps the content on a single line */
            margin: 0 auto; /* Gives that scrolling effect as the typing happens */
            letter-spacing: .15em; /* Adjust as needed */
            animation: 
                typing 3.5s steps(30, end),
                blink-caret .5s step-end infinite;
            justify-content: center;
            }

            /* The typing effect */
            @keyframes typing {
            from { width: 0 }
            to { width: 100% }
            }

            /* The typewriter cursor effect */
            @keyframes blink-caret {
            from, to { border-color: transparent }
            50% { border-color: orange }
            }
            </style>
        </div>
        <div class="container">
            <h1>Status Anda: <?php echo $row['sStatus']; ?></h1>
            <h3> <?php if($row['bStatus'] == "Approved" && $row['sStatus'] == "Diterima"){
                echo "Selamat anda telah diterima di sekolah kami!";
            }else if($row['bStatus'] == "File Ditolak" && $row['sStatus'] == "Belum Diterima"){
                echo "Berkas anda ditolak. Tolong kirimkan ulang berkas yang baru!";
            }else if($row['bStatus'] == "Belum Approved" && $row['sStatus'] == "Belum Diterima"){
                echo "Berkas anda dalam tahap pengecekan oleh admin!";
            }else if($row['sStatus'] == "Diterima"){
                echo "Selamat anda lolos seleksi. Silakan lakukan upload berkas!";
            }else if($row['sStatus'] == "Ditolak"){
                echo "Mohon maaf, anda tidak lolos masuk ke sekolah kami!";
            }else if($row['sStatus'] == "Belum Terdaftar"){
                echo "Pendaftaran anda sedang diseleksi oleh admin!";
            }
            ?></h3>
        </div>
        <div class="sticky-bottom">
            <div class="fixed-bottom">
                <footer class="text-center text-lg-start text-white" style="background-color: #929fba">
                    <div class="container p-4 pb-0">
                    <section">
                        <div class="row">
                            <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3">
                                <h6 class="text-uppercase mb-1 font-weight-bold">
                                SMP Juan Terro, Gading Serpong
                                </h6>
                                <div>
                                <p><i class="fas fa-envelope mr-3"></i> smpjuanterro@ac.id |   021-123456789</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    </div>
                </footer>
            </div>
        </div>
    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>