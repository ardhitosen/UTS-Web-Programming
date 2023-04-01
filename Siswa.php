<?php
  session_start();
  // if(!isset($_SESSION['id'])){
  //   header("location: index.php");
  // }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Menu</title>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Student's Menu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="profile.php">Profile</a>
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
<div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pendaftaran PPDB</h5>
      <a href="prosesRegister.php" class="btn btn-primary">Click Here</a>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cetak Kartu</h5>
      <button onclick="JavaScript:window.location.href='pdfcreator.php?file=doc.pdf';" class="btn btn-primary"> Click Here</button><br />
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pengumuman</h5>
      <a href="pengumuman.php" class="btn btn-primary">Click Here</a>
    </div>
  </div>
</div>

 




    <div class="sticky-bottom">
        <footer
        
        <div class="fixed-bottom">
            <footer
                class="text-center text-lg-start text-white"
                style="background-color: #929fba"
                >
            <div class="container p-4 pb-0">
            <section class="">
                <div class="row">
                <div class="col-md-2 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-1 font-weight-bold">
                    SMP Juan Terro, Gading Serpong
                    </h6>
                
                    
                    <div>
                      
                    <p><i class="fas fa-envelope mr-3"></i> smpjuanterro@ac.id |   021-123456789</p>
                    </div>
                    </div>
                   </style>

            </section>
            </div>

        </footer>
        </div>
    </body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>