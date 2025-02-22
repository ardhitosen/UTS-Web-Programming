<?php
  session_start();
  if(!isset($_SESSION['id'])){
    header("location: index.php");
  }

  define('DSN', 'mysql:host=localhost;dbname=utswebpro');
  define('DBUSER','root');  
  define('DBPASS','');

  $IDsiswa = $_SESSION['id'];

  $db = new PDO(DSN, DBUSER, DBPASS);
  $sql = "SELECT * FROM siswa WHERE IDsiswa = ?";
  $stmt = $db -> prepare($sql);
  $stmt -> execute([$IDsiswa]);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<style>
.card-img-top {
  height: 200px;
  padding-top: 43px;
  padding-bottom: 43px;
  padding-left: 30%;
  padding-right: 30%;
}
</style>

<!DOCTYPE html>
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
                  </h2>
              </div>
            </div>
        </section>
    </div>
    <div class="card-group">
      <div class="card">
        <img src="https://uxwing.com/wp-content/themes/uxwing/download/file-and-folder-type/files-icon.png" class="card-img-top" alt="berkas">
        <div style="text-align:center" class="card-body">
          <h5 class="card-title">Unggah Berkas</h5>
          <form action="formBerkas.php">
            <button class="btn btn-primary" id="buttonBerkas" <?php if($row['Status'] == "Belum Terdaftar" || $row['Status'] == "Ditolak" || $row['Status'] == "Diterima"){echo "disabled";}?>>Click Here</button>
          </form>
        </div>
      </div>
      <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/512/3022/3022251.png" class="card-img-top" alt="cetak" width="10px" height="10px">
        <div class="card-body" style="text-align:center">
          <h5 class="card-title">Cetak Kartu</h5>
          <button onclick="JavaScript:window.location.href='pdfcreator.php?file=doc.pdf';" class="btn btn-primary" id="buttonCetak" <?php if($row['Status'] != "Diterima"){echo "disabled";}?>> Click Here</button><br />
        </div>
      </div>
      <div class="card">
        <img src="https://static.thenounproject.com/png/4733434-200.png" class="card-img-top" alt="pengumuman">
        <div class="card-body" style="text-align:center">
          <h5 class="card-title">Pengumuman</h5>
          <a href="pengumuman.php" class="btn btn-primary">Click Here</a>
        </div>
      </div>
    </div>
  </body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>